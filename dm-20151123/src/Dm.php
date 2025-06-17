<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dm\V20151123\Models\AddIpfilterRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\AddIpfilterResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveReplyMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveReplyMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\BatchSendMailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\BatchSendMailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckReplyToMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckReplyToMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateReceiverRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateReceiverResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateTagRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateTagResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateUserSuppressionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateUserSuppressionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteInvalidAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteInvalidAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteIpfilterByEdmIdRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteIpfilterByEdmIdResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteReceiverDetailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteReceiverDetailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteReceiverRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteReceiverResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteTagRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteTagResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescAccountSummaryRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescAccountSummaryResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpProtectionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpProtectionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetSuppressionListLevelRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetSuppressionListLevelResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListByMailFromAndTagNameRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListByMailFromAndTagNameResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetUserResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyPWByDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyPWByDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyTagRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyTagResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryDomainByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryDomainByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryInvalidAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryInvalidAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryMailAddressByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryMailAddressByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverDetailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverDetailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTagByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTagByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\RemoveUserSuppressionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\RemoveUserSuppressionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SaveReceiverDetailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SaveReceiverDetailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsByTagNameAndBatchIDRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsByTagNameAndBatchIDResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SendTestByTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SendTestByTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SetSuppressionListLevelRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SetSuppressionListLevelResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateIpProtectionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateIpProtectionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Add IP Protection Information.
     *
     * @param request - AddIpfilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddIpfilterResponse
     *
     * @param AddIpfilterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddIpfilterResponse
     */
    public function addIpfilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipAddress) {
            @$query['IpAddress'] = $request->ipAddress;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddIpfilter',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddIpfilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add IP Protection Information.
     *
     * @param request - AddIpfilterRequest
     *
     * @returns AddIpfilterResponse
     *
     * @param AddIpfilterRequest $request
     *
     * @return AddIpfilterResponse
     */
    public function addIpfilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpfilterWithOptions($request, $runtime);
    }

    /**
     * Verify Reply Address.
     *
     * @param request - ApproveReplyMailAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApproveReplyMailAddressResponse
     *
     * @param ApproveReplyMailAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApproveReplyMailAddressResponse
     */
    public function approveReplyMailAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ticket) {
            @$query['Ticket'] = $request->ticket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApproveReplyMailAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApproveReplyMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verify Reply Address.
     *
     * @param request - ApproveReplyMailAddressRequest
     *
     * @returns ApproveReplyMailAddressResponse
     *
     * @param ApproveReplyMailAddressRequest $request
     *
     * @return ApproveReplyMailAddressResponse
     */
    public function approveReplyMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveReplyMailAddressWithOptions($request, $runtime);
    }

    /**
     * Batch Send Emails.
     *
     * @param request - BatchSendMailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSendMailResponse
     *
     * @param BatchSendMailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BatchSendMailResponse
     */
    public function batchSendMailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->clickTrace) {
            @$query['ClickTrace'] = $request->clickTrace;
        }

        if (null !== $request->headers) {
            @$query['Headers'] = $request->headers;
        }

        if (null !== $request->ipPoolId) {
            @$query['IpPoolId'] = $request->ipPoolId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->receiversName) {
            @$query['ReceiversName'] = $request->receiversName;
        }

        if (null !== $request->replyAddress) {
            @$query['ReplyAddress'] = $request->replyAddress;
        }

        if (null !== $request->replyAddressAlias) {
            @$query['ReplyAddressAlias'] = $request->replyAddressAlias;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->unSubscribeFilterLevel) {
            @$query['UnSubscribeFilterLevel'] = $request->unSubscribeFilterLevel;
        }

        if (null !== $request->unSubscribeLinkType) {
            @$query['UnSubscribeLinkType'] = $request->unSubscribeLinkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchSendMail',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSendMailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Send Emails.
     *
     * @param request - BatchSendMailRequest
     *
     * @returns BatchSendMailResponse
     *
     * @param BatchSendMailRequest $request
     *
     * @return BatchSendMailResponse
     */
    public function batchSendMail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSendMailWithOptions($request, $runtime);
    }

    /**
     * Check Domain Status.
     *
     * @param request - CheckDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDomainResponse
     *
     * @param CheckDomainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDomainResponse
     */
    public function checkDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDomain',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check Domain Status.
     *
     * @param request - CheckDomainRequest
     *
     * @returns CheckDomainResponse
     *
     * @param CheckDomainRequest $request
     *
     * @return CheckDomainResponse
     */
    public function checkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainWithOptions($request, $runtime);
    }

    /**
     * Validate Reply-To Address.
     *
     * @param request - CheckReplyToMailAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckReplyToMailAddressResponse
     *
     * @param CheckReplyToMailAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckReplyToMailAddressResponse
     */
    public function checkReplyToMailAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->mailAddressId) {
            @$query['MailAddressId'] = $request->mailAddressId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckReplyToMailAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckReplyToMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validate Reply-To Address.
     *
     * @param request - CheckReplyToMailAddressRequest
     *
     * @returns CheckReplyToMailAddressResponse
     *
     * @param CheckReplyToMailAddressRequest $request
     *
     * @return CheckReplyToMailAddressResponse
     */
    public function checkReplyToMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkReplyToMailAddressWithOptions($request, $runtime);
    }

    /**
     * Create Domain.
     *
     * @param request - CreateDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->dkimSelector) {
            @$query['dkimSelector'] = $request->dkimSelector;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDomain',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Domain.
     *
     * @param request - CreateDomainRequest
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * Create a mail address.
     *
     * @param request - CreateMailAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMailAddressResponse
     *
     * @param CreateMailAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMailAddressResponse
     */
    public function createMailAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->replyAddress) {
            @$query['ReplyAddress'] = $request->replyAddress;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendtype) {
            @$query['Sendtype'] = $request->sendtype;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMailAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a mail address.
     *
     * @param request - CreateMailAddressRequest
     *
     * @returns CreateMailAddressResponse
     *
     * @param CreateMailAddressRequest $request
     *
     * @return CreateMailAddressResponse
     */
    public function createMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMailAddressWithOptions($request, $runtime);
    }

    /**
     * Create Receiver List.
     *
     * @param request - CreateReceiverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReceiverResponse
     *
     * @param CreateReceiverRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateReceiverResponse
     */
    public function createReceiverWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->receiversAlias) {
            @$query['ReceiversAlias'] = $request->receiversAlias;
        }

        if (null !== $request->receiversName) {
            @$query['ReceiversName'] = $request->receiversName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateReceiver',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Receiver List.
     *
     * @param request - CreateReceiverRequest
     *
     * @returns CreateReceiverResponse
     *
     * @param CreateReceiverRequest $request
     *
     * @return CreateReceiverResponse
     */
    public function createReceiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReceiverWithOptions($request, $runtime);
    }

    /**
     * Create Tag.
     *
     * @param request - CreateTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tagDescription) {
            @$query['TagDescription'] = $request->tagDescription;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTag',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Tag.
     *
     * @param request - CreateTagRequest
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     *
     * @return CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * Create User\\"s Invalid Address.
     *
     * @param request - CreateUserSuppressionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserSuppressionResponse
     *
     * @param CreateUserSuppressionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateUserSuppressionResponse
     */
    public function createUserSuppressionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUserSuppression',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserSuppressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create User\\"s Invalid Address.
     *
     * @param request - CreateUserSuppressionRequest
     *
     * @returns CreateUserSuppressionResponse
     *
     * @param CreateUserSuppressionRequest $request
     *
     * @return CreateUserSuppressionResponse
     */
    public function createUserSuppression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserSuppressionWithOptions($request, $runtime);
    }

    /**
     * Delete Domain.
     *
     * @param request - DeleteDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Domain.
     *
     * @param request - DeleteDomainRequest
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * Remove invalid addresses from the invalid address database.
     *
     * @param request - DeleteInvalidAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInvalidAddressResponse
     *
     * @param DeleteInvalidAddressRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteInvalidAddressResponse
     */
    public function deleteInvalidAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->toAddress) {
            @$query['ToAddress'] = $request->toAddress;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInvalidAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInvalidAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Remove invalid addresses from the invalid address database.
     *
     * @param request - DeleteInvalidAddressRequest
     *
     * @returns DeleteInvalidAddressResponse
     *
     * @param DeleteInvalidAddressRequest $request
     *
     * @return DeleteInvalidAddressResponse
     */
    public function deleteInvalidAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInvalidAddressWithOptions($request, $runtime);
    }

    /**
     * Delete IP Protection Information.
     *
     * @param request - DeleteIpfilterByEdmIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpfilterByEdmIdResponse
     *
     * @param DeleteIpfilterByEdmIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteIpfilterByEdmIdResponse
     */
    public function deleteIpfilterByEdmIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromType) {
            @$query['FromType'] = $request->fromType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIpfilterByEdmId',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpfilterByEdmIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete IP Protection Information.
     *
     * @param request - DeleteIpfilterByEdmIdRequest
     *
     * @returns DeleteIpfilterByEdmIdResponse
     *
     * @param DeleteIpfilterByEdmIdRequest $request
     *
     * @return DeleteIpfilterByEdmIdResponse
     */
    public function deleteIpfilterByEdmId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpfilterByEdmIdWithOptions($request, $runtime);
    }

    /**
     * Delete Mail Address.
     *
     * @param request - DeleteMailAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMailAddressResponse
     *
     * @param DeleteMailAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMailAddressResponse
     */
    public function deleteMailAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mailAddressId) {
            @$query['MailAddressId'] = $request->mailAddressId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMailAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Mail Address.
     *
     * @param request - DeleteMailAddressRequest
     *
     * @returns DeleteMailAddressResponse
     *
     * @param DeleteMailAddressRequest $request
     *
     * @return DeleteMailAddressResponse
     */
    public function deleteMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMailAddressWithOptions($request, $runtime);
    }

    /**
     * Delete Receiver List.
     *
     * @param request - DeleteReceiverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteReceiverResponse
     *
     * @param DeleteReceiverRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteReceiverResponse
     */
    public function deleteReceiverWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->receiverId) {
            @$query['ReceiverId'] = $request->receiverId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteReceiver',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Receiver List.
     *
     * @param request - DeleteReceiverRequest
     *
     * @returns DeleteReceiverResponse
     *
     * @param DeleteReceiverRequest $request
     *
     * @return DeleteReceiverResponse
     */
    public function deleteReceiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReceiverWithOptions($request, $runtime);
    }

    /**
     * Delete a Single Recipient.
     *
     * @param request - DeleteReceiverDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteReceiverDetailResponse
     *
     * @param DeleteReceiverDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteReceiverDetailResponse
     */
    public function deleteReceiverDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->receiverId) {
            @$query['ReceiverId'] = $request->receiverId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteReceiverDetail',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteReceiverDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a Single Recipient.
     *
     * @param request - DeleteReceiverDetailRequest
     *
     * @returns DeleteReceiverDetailResponse
     *
     * @param DeleteReceiverDetailRequest $request
     *
     * @return DeleteReceiverDetailResponse
     */
    public function deleteReceiverDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReceiverDetailWithOptions($request, $runtime);
    }

    /**
     * Delete Tag.
     *
     * @param request - DeleteTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTag',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Tag.
     *
     * @param request - DeleteTagRequest
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     *
     * @return DeleteTagResponse
     */
    public function deleteTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithOptions($request, $runtime);
    }

    /**
     * Retrieve account information.
     *
     * @param request - DescAccountSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescAccountSummaryResponse
     *
     * @param DescAccountSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescAccountSummaryResponse
     */
    public function descAccountSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescAccountSummary',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescAccountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve account information.
     *
     * @param request - DescAccountSummaryRequest
     *
     * @returns DescAccountSummaryResponse
     *
     * @param DescAccountSummaryRequest $request
     *
     * @return DescAccountSummaryResponse
     */
    public function descAccountSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descAccountSummaryWithOptions($request, $runtime);
    }

    /**
     * Get Domain Details.
     *
     * @param request - DescDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescDomainResponse
     *
     * @param DescDomainRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DescDomainResponse
     */
    public function descDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->requireRealTimeDnsRecords) {
            @$query['RequireRealTimeDnsRecords'] = $request->requireRealTimeDnsRecords;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescDomain',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Domain Details.
     *
     * @param request - DescDomainRequest
     *
     * @returns DescDomainResponse
     *
     * @param DescDomainRequest $request
     *
     * @return DescDomainResponse
     */
    public function descDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descDomainWithOptions($request, $runtime);
    }

    /**
     * Get IP Protection Information.
     *
     * @param request - GetIpProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIpProtectionResponse
     *
     * @param GetIpProtectionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetIpProtectionResponse
     */
    public function getIpProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIpProtection',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIpProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get IP Protection Information.
     *
     * @param request - GetIpProtectionRequest
     *
     * @returns GetIpProtectionResponse
     *
     * @param GetIpProtectionRequest $request
     *
     * @return GetIpProtectionResponse
     */
    public function getIpProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpProtectionWithOptions($request, $runtime);
    }

    /**
     * Retrieve IP Protection Information.
     *
     * @param request - GetIpfilterListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIpfilterListResponse
     *
     * @param GetIpfilterListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetIpfilterListResponse
     */
    public function getIpfilterListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIpfilterList',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIpfilterListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve IP Protection Information.
     *
     * @param request - GetIpfilterListRequest
     *
     * @returns GetIpfilterListResponse
     *
     * @param GetIpfilterListRequest $request
     *
     * @return GetIpfilterListResponse
     */
    public function getIpfilterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpfilterListWithOptions($request, $runtime);
    }

    /**
     * 获取用户无效地址级别配置.
     *
     * @param request - GetSuppressionListLevelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSuppressionListLevelResponse
     *
     * @param GetSuppressionListLevelRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSuppressionListLevelResponse
     */
    public function getSuppressionListLevelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSuppressionListLevel',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSuppressionListLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户无效地址级别配置.
     *
     * @param request - GetSuppressionListLevelRequest
     *
     * @returns GetSuppressionListLevelResponse
     *
     * @param GetSuppressionListLevelRequest $request
     *
     * @return GetSuppressionListLevelResponse
     */
    public function getSuppressionListLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuppressionListLevelWithOptions($request, $runtime);
    }

    /**
     * Get tracking information.
     *
     * @param request - GetTrackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrackListResponse
     *
     * @param GetTrackListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTrackListResponse
     */
    public function getTrackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->dedicatedIp) {
            @$query['DedicatedIp'] = $request->dedicatedIp;
        }

        if (null !== $request->dedicatedIpPoolId) {
            @$query['DedicatedIpPoolId'] = $request->dedicatedIpPoolId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->esp) {
            @$query['Esp'] = $request->esp;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->offsetCreateTime) {
            @$query['OffsetCreateTime'] = $request->offsetCreateTime;
        }

        if (null !== $request->offsetCreateTimeDesc) {
            @$query['OffsetCreateTimeDesc'] = $request->offsetCreateTimeDesc;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        if (null !== $request->total) {
            @$query['Total'] = $request->total;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrackList',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTrackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get tracking information.
     *
     * @param request - GetTrackListRequest
     *
     * @returns GetTrackListResponse
     *
     * @param GetTrackListRequest $request
     *
     * @return GetTrackListResponse
     */
    public function getTrackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrackListWithOptions($request, $runtime);
    }

    /**
     * Get tracking information based on the sender address and tag name.
     *
     * @param request - GetTrackListByMailFromAndTagNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrackListByMailFromAndTagNameResponse
     *
     * @param GetTrackListByMailFromAndTagNameRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetTrackListByMailFromAndTagNameResponse
     */
    public function getTrackListByMailFromAndTagNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->dedicatedIp) {
            @$query['DedicatedIp'] = $request->dedicatedIp;
        }

        if (null !== $request->dedicatedIpPoolId) {
            @$query['DedicatedIpPoolId'] = $request->dedicatedIpPoolId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->esp) {
            @$query['Esp'] = $request->esp;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->offsetCreateTime) {
            @$query['OffsetCreateTime'] = $request->offsetCreateTime;
        }

        if (null !== $request->offsetCreateTimeDesc) {
            @$query['OffsetCreateTimeDesc'] = $request->offsetCreateTimeDesc;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        if (null !== $request->total) {
            @$query['Total'] = $request->total;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrackListByMailFromAndTagName',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTrackListByMailFromAndTagNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get tracking information based on the sender address and tag name.
     *
     * @param request - GetTrackListByMailFromAndTagNameRequest
     *
     * @returns GetTrackListByMailFromAndTagNameResponse
     *
     * @param GetTrackListByMailFromAndTagNameRequest $request
     *
     * @return GetTrackListByMailFromAndTagNameResponse
     */
    public function getTrackListByMailFromAndTagName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrackListByMailFromAndTagNameWithOptions($request, $runtime);
    }

    /**
     * Get Account Details.
     *
     * @param request - GetUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Account Details.
     *
     * @returns GetUserResponse
     *
     * @return GetUserResponse
     */
    public function getUser()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($runtime);
    }

    /**
     * List User Invalid Addresses.
     *
     * @param request - ListUserSuppressionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserSuppressionResponse
     *
     * @param ListUserSuppressionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUserSuppressionResponse
     */
    public function listUserSuppressionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->endBounceTime) {
            @$query['EndBounceTime'] = $request->endBounceTime;
        }

        if (null !== $request->endCreateTime) {
            @$query['EndCreateTime'] = $request->endCreateTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startBounceTime) {
            @$query['StartBounceTime'] = $request->startBounceTime;
        }

        if (null !== $request->startCreateTime) {
            @$query['StartCreateTime'] = $request->startCreateTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserSuppression',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserSuppressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List User Invalid Addresses.
     *
     * @param request - ListUserSuppressionRequest
     *
     * @returns ListUserSuppressionResponse
     *
     * @param ListUserSuppressionRequest $request
     *
     * @return ListUserSuppressionResponse
     */
    public function listUserSuppression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserSuppressionWithOptions($request, $runtime);
    }

    /**
     * Modify the sending address.
     *
     * @param request - ModifyMailAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMailAddressResponse
     *
     * @param ModifyMailAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyMailAddressResponse
     */
    public function modifyMailAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mailAddressId) {
            @$query['MailAddressId'] = $request->mailAddressId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->replyAddress) {
            @$query['ReplyAddress'] = $request->replyAddress;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMailAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the sending address.
     *
     * @param request - ModifyMailAddressRequest
     *
     * @returns ModifyMailAddressResponse
     *
     * @param ModifyMailAddressRequest $request
     *
     * @return ModifyMailAddressResponse
     */
    public function modifyMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMailAddressWithOptions($request, $runtime);
    }

    /**
     * Modify the domain-level password.
     *
     * @param request - ModifyPWByDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPWByDomainResponse
     *
     * @param ModifyPWByDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyPWByDomainResponse
     */
    public function modifyPWByDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPWByDomain',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPWByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the domain-level password.
     *
     * @param request - ModifyPWByDomainRequest
     *
     * @returns ModifyPWByDomainResponse
     *
     * @param ModifyPWByDomainRequest $request
     *
     * @return ModifyPWByDomainResponse
     */
    public function modifyPWByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPWByDomainWithOptions($request, $runtime);
    }

    /**
     * Modify Tag.
     *
     * @param request - ModifyTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTagResponse
     *
     * @param ModifyTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyTagResponse
     */
    public function modifyTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tagDescription) {
            @$query['TagDescription'] = $request->tagDescription;
        }

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTag',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Tag.
     *
     * @param request - ModifyTagRequest
     *
     * @returns ModifyTagResponse
     *
     * @param ModifyTagRequest $request
     *
     * @return ModifyTagResponse
     */
    public function modifyTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagWithOptions($request, $runtime);
    }

    /**
     * Query domain information.
     *
     * @param request - QueryDomainByParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainByParamResponse
     *
     * @param QueryDomainByParamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryDomainByParamResponse
     */
    public function queryDomainByParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainByParam',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query domain information.
     *
     * @param request - QueryDomainByParamRequest
     *
     * @returns QueryDomainByParamResponse
     *
     * @param QueryDomainByParamRequest $request
     *
     * @return QueryDomainByParamResponse
     */
    public function queryDomainByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainByParamWithOptions($request, $runtime);
    }

    /**
     * NextStart changed to string.
     *
     * @remarks
     * Retrieve deduplicated invalid address information. If an email is sent to the same invalid address multiple times, only the first occurrence will be recorded. The query should be based on the time when the address was first classified as invalid.
     *
     * @param request - QueryInvalidAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInvalidAddressResponse
     *
     * @param QueryInvalidAddressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryInvalidAddressResponse
     */
    public function queryInvalidAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->nextStart) {
            @$query['NextStart'] = $request->nextStart;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInvalidAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInvalidAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * NextStart changed to string.
     *
     * @remarks
     * Retrieve deduplicated invalid address information. If an email is sent to the same invalid address multiple times, only the first occurrence will be recorded. The query should be based on the time when the address was first classified as invalid.
     *
     * @param request - QueryInvalidAddressRequest
     *
     * @returns QueryInvalidAddressResponse
     *
     * @param QueryInvalidAddressRequest $request
     *
     * @return QueryInvalidAddressResponse
     */
    public function queryInvalidAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInvalidAddressWithOptions($request, $runtime);
    }

    /**
     * Query the list of mail addresses.
     *
     * @param request - QueryMailAddressByParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMailAddressByParamResponse
     *
     * @param QueryMailAddressByParamRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMailAddressByParamResponse
     */
    public function queryMailAddressByParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendtype) {
            @$query['Sendtype'] = $request->sendtype;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMailAddressByParam',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMailAddressByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of mail addresses.
     *
     * @param request - QueryMailAddressByParamRequest
     *
     * @returns QueryMailAddressByParamResponse
     *
     * @param QueryMailAddressByParamRequest $request
     *
     * @return QueryMailAddressByParamResponse
     */
    public function queryMailAddressByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMailAddressByParamWithOptions($request, $runtime);
    }

    /**
     * Query the details of the recipient list.
     *
     * @param request - QueryReceiverByParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryReceiverByParamResponse
     *
     * @param QueryReceiverByParamRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryReceiverByParamResponse
     */
    public function queryReceiverByParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryReceiverByParam',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryReceiverByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the details of the recipient list.
     *
     * @param request - QueryReceiverByParamRequest
     *
     * @returns QueryReceiverByParamResponse
     *
     * @param QueryReceiverByParamRequest $request
     *
     * @return QueryReceiverByParamResponse
     */
    public function queryReceiverByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReceiverByParamWithOptions($request, $runtime);
    }

    /**
     * Retrieve detailed information about a recipient list.
     *
     * @param request - QueryReceiverDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryReceiverDetailResponse
     *
     * @param QueryReceiverDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryReceiverDetailResponse
     */
    public function queryReceiverDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->nextStart) {
            @$query['NextStart'] = $request->nextStart;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->receiverId) {
            @$query['ReceiverId'] = $request->receiverId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryReceiverDetail',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryReceiverDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve detailed information about a recipient list.
     *
     * @param request - QueryReceiverDetailRequest
     *
     * @returns QueryReceiverDetailResponse
     *
     * @param QueryReceiverDetailRequest $request
     *
     * @return QueryReceiverDetailResponse
     */
    public function queryReceiverDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReceiverDetailWithOptions($request, $runtime);
    }

    /**
     * Call QueryTagByParam to retrieve tags.
     *
     * @param request - QueryTagByParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTagByParamResponse
     *
     * @param QueryTagByParamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTagByParamResponse
     */
    public function queryTagByParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTagByParam',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTagByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call QueryTagByParam to retrieve tags.
     *
     * @param request - QueryTagByParamRequest
     *
     * @returns QueryTagByParamResponse
     *
     * @param QueryTagByParamRequest $request
     *
     * @return QueryTagByParamResponse
     */
    public function queryTagByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagByParamWithOptions($request, $runtime);
    }

    /**
     * Query task.
     *
     * @param request - QueryTaskByParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskByParamResponse
     *
     * @param QueryTaskByParamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryTaskByParamResponse
     */
    public function queryTaskByParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTaskByParam',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query task.
     *
     * @param request - QueryTaskByParamRequest
     *
     * @returns QueryTaskByParamResponse
     *
     * @param QueryTaskByParamRequest $request
     *
     * @return QueryTaskByParamResponse
     */
    public function queryTaskByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskByParamWithOptions($request, $runtime);
    }

    /**
     * 删除用户无效地址
     *
     * @param request - RemoveUserSuppressionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserSuppressionResponse
     *
     * @param RemoveUserSuppressionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveUserSuppressionResponse
     */
    public function removeUserSuppressionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->suppressionIds) {
            @$query['SuppressionIds'] = $request->suppressionIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUserSuppression',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUserSuppressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除用户无效地址
     *
     * @param request - RemoveUserSuppressionRequest
     *
     * @returns RemoveUserSuppressionResponse
     *
     * @param RemoveUserSuppressionRequest $request
     *
     * @return RemoveUserSuppressionResponse
     */
    public function removeUserSuppression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserSuppressionWithOptions($request, $runtime);
    }

    /**
     * Create a Single Recipient.
     *
     * @param request - SaveReceiverDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveReceiverDetailResponse
     *
     * @param SaveReceiverDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SaveReceiverDetailResponse
     */
    public function saveReceiverDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->detail) {
            @$query['Detail'] = $request->detail;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->receiverId) {
            @$query['ReceiverId'] = $request->receiverId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveReceiverDetail',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveReceiverDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a Single Recipient.
     *
     * @param request - SaveReceiverDetailRequest
     *
     * @returns SaveReceiverDetailResponse
     *
     * @param SaveReceiverDetailRequest $request
     *
     * @return SaveReceiverDetailResponse
     */
    public function saveReceiverDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveReceiverDetailWithOptions($request, $runtime);
    }

    /**
     * Send Template Test Email.
     *
     * @param request - SendTestByTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendTestByTemplateResponse
     *
     * @param SendTestByTemplateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SendTestByTemplateResponse
     */
    public function sendTestByTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->birthday) {
            @$query['Birthday'] = $request->birthday;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->gender) {
            @$query['Gender'] = $request->gender;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->nickName) {
            @$query['NickName'] = $request->nickName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendTestByTemplate',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendTestByTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Send Template Test Email.
     *
     * @param request - SendTestByTemplateRequest
     *
     * @returns SendTestByTemplateResponse
     *
     * @param SendTestByTemplateRequest $request
     *
     * @return SendTestByTemplateResponse
     */
    public function sendTestByTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTestByTemplateWithOptions($request, $runtime);
    }

    /**
     * Retrieve Sending Data under Specified Conditions.
     *
     * @param request - SenderStatisticsByTagNameAndBatchIDRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SenderStatisticsByTagNameAndBatchIDResponse
     *
     * @param SenderStatisticsByTagNameAndBatchIDRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SenderStatisticsByTagNameAndBatchIDResponse
     */
    public function senderStatisticsByTagNameAndBatchIDWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->dedicatedIp) {
            @$query['DedicatedIp'] = $request->dedicatedIp;
        }

        if (null !== $request->dedicatedIpPoolId) {
            @$query['DedicatedIpPoolId'] = $request->dedicatedIpPoolId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->esp) {
            @$query['Esp'] = $request->esp;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SenderStatisticsByTagNameAndBatchID',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SenderStatisticsByTagNameAndBatchIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve Sending Data under Specified Conditions.
     *
     * @param request - SenderStatisticsByTagNameAndBatchIDRequest
     *
     * @returns SenderStatisticsByTagNameAndBatchIDResponse
     *
     * @param SenderStatisticsByTagNameAndBatchIDRequest $request
     *
     * @return SenderStatisticsByTagNameAndBatchIDResponse
     */
    public function senderStatisticsByTagNameAndBatchID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->senderStatisticsByTagNameAndBatchIDWithOptions($request, $runtime);
    }

    /**
     * Query Delivery Result Details.
     *
     * @param request - SenderStatisticsDetailByParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SenderStatisticsDetailByParamResponse
     *
     * @param SenderStatisticsDetailByParamRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SenderStatisticsDetailByParamResponse
     */
    public function senderStatisticsDetailByParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->nextStart) {
            @$query['NextStart'] = $request->nextStart;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        if (null !== $request->toAddress) {
            @$query['ToAddress'] = $request->toAddress;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SenderStatisticsDetailByParam',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SenderStatisticsDetailByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Delivery Result Details.
     *
     * @param request - SenderStatisticsDetailByParamRequest
     *
     * @returns SenderStatisticsDetailByParamResponse
     *
     * @param SenderStatisticsDetailByParamRequest $request
     *
     * @return SenderStatisticsDetailByParamResponse
     */
    public function senderStatisticsDetailByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->senderStatisticsDetailByParamWithOptions($request, $runtime);
    }

    /**
     * 设置用户无效地址级别配置.
     *
     * @param request - SetSuppressionListLevelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSuppressionListLevelResponse
     *
     * @param SetSuppressionListLevelRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetSuppressionListLevelResponse
     */
    public function setSuppressionListLevelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->suppressionListLevel) {
            @$query['SuppressionListLevel'] = $request->suppressionListLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSuppressionListLevel',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSuppressionListLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置用户无效地址级别配置.
     *
     * @param request - SetSuppressionListLevelRequest
     *
     * @returns SetSuppressionListLevelResponse
     *
     * @param SetSuppressionListLevelRequest $request
     *
     * @return SetSuppressionListLevelResponse
     */
    public function setSuppressionListLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSuppressionListLevelWithOptions($request, $runtime);
    }

    /**
     * API for Sending Emails.
     *
     * @param request - SingleSendMailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SingleSendMailResponse
     *
     * @param SingleSendMailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SingleSendMailResponse
     */
    public function singleSendMailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->clickTrace) {
            @$query['ClickTrace'] = $request->clickTrace;
        }

        if (null !== $request->fromAlias) {
            @$query['FromAlias'] = $request->fromAlias;
        }

        if (null !== $request->headers) {
            @$query['Headers'] = $request->headers;
        }

        if (null !== $request->htmlBody) {
            @$query['HtmlBody'] = $request->htmlBody;
        }

        if (null !== $request->ipPoolId) {
            @$query['IpPoolId'] = $request->ipPoolId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->replyAddress) {
            @$query['ReplyAddress'] = $request->replyAddress;
        }

        if (null !== $request->replyAddressAlias) {
            @$query['ReplyAddressAlias'] = $request->replyAddressAlias;
        }

        if (null !== $request->replyToAddress) {
            @$query['ReplyToAddress'] = $request->replyToAddress;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subject) {
            @$query['Subject'] = $request->subject;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        if (null !== $request->textBody) {
            @$query['TextBody'] = $request->textBody;
        }

        if (null !== $request->toAddress) {
            @$query['ToAddress'] = $request->toAddress;
        }

        if (null !== $request->unSubscribeFilterLevel) {
            @$query['UnSubscribeFilterLevel'] = $request->unSubscribeFilterLevel;
        }

        if (null !== $request->unSubscribeLinkType) {
            @$query['UnSubscribeLinkType'] = $request->unSubscribeLinkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SingleSendMail',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SingleSendMailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * API for Sending Emails.
     *
     * @param request - SingleSendMailRequest
     *
     * @returns SingleSendMailResponse
     *
     * @param SingleSendMailRequest $request
     *
     * @return SingleSendMailResponse
     */
    public function singleSendMail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleSendMailWithOptions($request, $runtime);
    }

    /**
     * Update IP Protection API.
     *
     * @param request - UpdateIpProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIpProtectionResponse
     *
     * @param UpdateIpProtectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateIpProtectionResponse
     */
    public function updateIpProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipProtection) {
            @$query['IpProtection'] = $request->ipProtection;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIpProtection',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIpProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update IP Protection API.
     *
     * @param request - UpdateIpProtectionRequest
     *
     * @returns UpdateIpProtectionResponse
     *
     * @param UpdateIpProtectionRequest $request
     *
     * @return UpdateIpProtectionResponse
     */
    public function updateIpProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpProtectionWithOptions($request, $runtime);
    }

    /**
     * Update account information.
     *
     * @param tmpReq - UpdateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateUserShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->user) {
            $request->userShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }

        $body = [];
        if (null !== $request->userShrink) {
            @$body['User'] = $request->userShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update account information.
     *
     * @param request - UpdateUserRequest
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}
