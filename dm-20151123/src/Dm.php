<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 添加IP防护信息
     *  *
     * @param AddIpfilterRequest $request AddIpfilterRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddIpfilterResponse AddIpfilterResponse
     */
    public function addIpfilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipAddress)) {
            $query['IpAddress'] = $request->ipAddress;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIpfilter',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIpfilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加IP防护信息
     *  *
     * @param AddIpfilterRequest $request AddIpfilterRequest
     *
     * @return AddIpfilterResponse AddIpfilterResponse
     */
    public function addIpfilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpfilterWithOptions($request, $runtime);
    }

    /**
     * @summary 验证回信地址
     *  *
     * @param ApproveReplyMailAddressRequest $request ApproveReplyMailAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ApproveReplyMailAddressResponse ApproveReplyMailAddressResponse
     */
    public function approveReplyMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ticket)) {
            $query['Ticket'] = $request->ticket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApproveReplyMailAddress',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveReplyMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证回信地址
     *  *
     * @param ApproveReplyMailAddressRequest $request ApproveReplyMailAddressRequest
     *
     * @return ApproveReplyMailAddressResponse ApproveReplyMailAddressResponse
     */
    public function approveReplyMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveReplyMailAddressWithOptions($request, $runtime);
    }

    /**
     * @summary 批量发送邮件
     *  *
     * @param BatchSendMailRequest $request BatchSendMailRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSendMailResponse BatchSendMailResponse
     */
    public function batchSendMailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->clickTrace)) {
            $query['ClickTrace'] = $request->clickTrace;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->receiversName)) {
            $query['ReceiversName'] = $request->receiversName;
        }
        if (!Utils::isUnset($request->replyAddress)) {
            $query['ReplyAddress'] = $request->replyAddress;
        }
        if (!Utils::isUnset($request->replyAddressAlias)) {
            $query['ReplyAddressAlias'] = $request->replyAddressAlias;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->unSubscribeFilterLevel)) {
            $query['UnSubscribeFilterLevel'] = $request->unSubscribeFilterLevel;
        }
        if (!Utils::isUnset($request->unSubscribeLinkType)) {
            $query['UnSubscribeLinkType'] = $request->unSubscribeLinkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSendMail',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSendMailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量发送邮件
     *  *
     * @param BatchSendMailRequest $request BatchSendMailRequest
     *
     * @return BatchSendMailResponse BatchSendMailResponse
     */
    public function batchSendMail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSendMailWithOptions($request, $runtime);
    }

    /**
     * @summary 校验域名状态
     *  *
     * @param CheckDomainRequest $request CheckDomainRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDomainResponse CheckDomainResponse
     */
    public function checkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDomain',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验域名状态
     *  *
     * @param CheckDomainRequest $request CheckDomainRequest
     *
     * @return CheckDomainResponse CheckDomainResponse
     */
    public function checkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 校验回信地址
     *  *
     * @param CheckReplyToMailAddressRequest $request CheckReplyToMailAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckReplyToMailAddressResponse CheckReplyToMailAddressResponse
     */
    public function checkReplyToMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->mailAddressId)) {
            $query['MailAddressId'] = $request->mailAddressId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckReplyToMailAddress',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckReplyToMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验回信地址
     *  *
     * @param CheckReplyToMailAddressRequest $request CheckReplyToMailAddressRequest
     *
     * @return CheckReplyToMailAddressResponse CheckReplyToMailAddressResponse
     */
    public function checkReplyToMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkReplyToMailAddressWithOptions($request, $runtime);
    }

    /**
     * @summary 创建域名
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建域名
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * @param CreateMailAddressRequest $request CreateMailAddressRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMailAddressResponse CreateMailAddressResponse
     */
    public function createMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->replyAddress)) {
            $query['ReplyAddress'] = $request->replyAddress;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendtype)) {
            $query['Sendtype'] = $request->sendtype;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMailAddress',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMailAddressRequest $request CreateMailAddressRequest
     *
     * @return CreateMailAddressResponse CreateMailAddressResponse
     */
    public function createMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMailAddressWithOptions($request, $runtime);
    }

    /**
     * @summary 创建收件人列表
     *  *
     * @param CreateReceiverRequest $request CreateReceiverRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateReceiverResponse CreateReceiverResponse
     */
    public function createReceiverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->receiversAlias)) {
            $query['ReceiversAlias'] = $request->receiversAlias;
        }
        if (!Utils::isUnset($request->receiversName)) {
            $query['ReceiversName'] = $request->receiversName;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateReceiver',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建收件人列表
     *  *
     * @param CreateReceiverRequest $request CreateReceiverRequest
     *
     * @return CreateReceiverResponse CreateReceiverResponse
     */
    public function createReceiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReceiverWithOptions($request, $runtime);
    }

    /**
     * @summary 创建标签
     *  *
     * @param CreateTagRequest $request CreateTagRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTagResponse CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagDescription)) {
            $query['TagDescription'] = $request->tagDescription;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTag',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建标签
     *  *
     * @param CreateTagRequest $request CreateTagRequest
     *
     * @return CreateTagResponse CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * @summary 创建用户无效地址
     *  *
     * @param CreateUserSuppressionRequest $request CreateUserSuppressionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserSuppressionResponse CreateUserSuppressionResponse
     */
    public function createUserSuppressionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserSuppression',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserSuppressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建用户无效地址
     *  *
     * @param CreateUserSuppressionRequest $request CreateUserSuppressionRequest
     *
     * @return CreateUserSuppressionResponse CreateUserSuppressionResponse
     */
    public function createUserSuppression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserSuppressionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除域名
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除域名
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 从无效地址库删除无效地址
     *  *
     * @param DeleteInvalidAddressRequest $request DeleteInvalidAddressRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInvalidAddressResponse DeleteInvalidAddressResponse
     */
    public function deleteInvalidAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->toAddress)) {
            $query['ToAddress'] = $request->toAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInvalidAddress',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInvalidAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从无效地址库删除无效地址
     *  *
     * @param DeleteInvalidAddressRequest $request DeleteInvalidAddressRequest
     *
     * @return DeleteInvalidAddressResponse DeleteInvalidAddressResponse
     */
    public function deleteInvalidAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInvalidAddressWithOptions($request, $runtime);
    }

    /**
     * @summary 删除IP保护信息
     *  *
     * @param DeleteIpfilterByEdmIdRequest $request DeleteIpfilterByEdmIdRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpfilterByEdmIdResponse DeleteIpfilterByEdmIdResponse
     */
    public function deleteIpfilterByEdmIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromType)) {
            $query['FromType'] = $request->fromType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpfilterByEdmId',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpfilterByEdmIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除IP保护信息
     *  *
     * @param DeleteIpfilterByEdmIdRequest $request DeleteIpfilterByEdmIdRequest
     *
     * @return DeleteIpfilterByEdmIdResponse DeleteIpfilterByEdmIdResponse
     */
    public function deleteIpfilterByEdmId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpfilterByEdmIdWithOptions($request, $runtime);
    }

    /**
     * @summary 删除发信地址
     *  *
     * @param DeleteMailAddressRequest $request DeleteMailAddressRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMailAddressResponse DeleteMailAddressResponse
     */
    public function deleteMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mailAddressId)) {
            $query['MailAddressId'] = $request->mailAddressId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMailAddress',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除发信地址
     *  *
     * @param DeleteMailAddressRequest $request DeleteMailAddressRequest
     *
     * @return DeleteMailAddressResponse DeleteMailAddressResponse
     */
    public function deleteMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMailAddressWithOptions($request, $runtime);
    }

    /**
     * @summary 删除收件人列表
     *  *
     * @param DeleteReceiverRequest $request DeleteReceiverRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteReceiverResponse DeleteReceiverResponse
     */
    public function deleteReceiverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->receiverId)) {
            $query['ReceiverId'] = $request->receiverId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteReceiver',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除收件人列表
     *  *
     * @param DeleteReceiverRequest $request DeleteReceiverRequest
     *
     * @return DeleteReceiverResponse DeleteReceiverResponse
     */
    public function deleteReceiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReceiverWithOptions($request, $runtime);
    }

    /**
     * @summary 删除单个收件人
     *  *
     * @param DeleteReceiverDetailRequest $request DeleteReceiverDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteReceiverDetailResponse DeleteReceiverDetailResponse
     */
    public function deleteReceiverDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->receiverId)) {
            $query['ReceiverId'] = $request->receiverId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteReceiverDetail',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteReceiverDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除单个收件人
     *  *
     * @param DeleteReceiverDetailRequest $request DeleteReceiverDetailRequest
     *
     * @return DeleteReceiverDetailResponse DeleteReceiverDetailResponse
     */
    public function deleteReceiverDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReceiverDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 删除标签
     *  *
     * @param DeleteTagRequest $request DeleteTagRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTagResponse DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTag',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除标签
     *  *
     * @param DeleteTagRequest $request DeleteTagRequest
     *
     * @return DeleteTagResponse DeleteTagResponse
     */
    public function deleteTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithOptions($request, $runtime);
    }

    /**
     * @param DescAccountSummaryRequest $request DescAccountSummaryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescAccountSummaryResponse DescAccountSummaryResponse
     */
    public function descAccountSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescAccountSummary',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescAccountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescAccountSummaryRequest $request DescAccountSummaryRequest
     *
     * @return DescAccountSummaryResponse DescAccountSummaryResponse
     */
    public function descAccountSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descAccountSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary 获取域名详情
     *  *
     * @param DescDomainRequest $request DescDomainRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescDomainResponse DescDomainResponse
     */
    public function descDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->requireRealTimeDnsRecords)) {
            $query['RequireRealTimeDnsRecords'] = $request->requireRealTimeDnsRecords;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescDomain',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取域名详情
     *  *
     * @param DescDomainRequest $request DescDomainRequest
     *
     * @return DescDomainResponse DescDomainResponse
     */
    public function descDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 获取IP保护信息
     *  *
     * @param GetIpProtectionRequest $request GetIpProtectionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIpProtectionResponse GetIpProtectionResponse
     */
    public function getIpProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIpProtection',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIpProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取IP保护信息
     *  *
     * @param GetIpProtectionRequest $request GetIpProtectionRequest
     *
     * @return GetIpProtectionResponse GetIpProtectionResponse
     */
    public function getIpProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取IP防护信息
     *  *
     * @param GetIpfilterListRequest $request GetIpfilterListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIpfilterListResponse GetIpfilterListResponse
     */
    public function getIpfilterListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIpfilterList',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIpfilterListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取IP防护信息
     *  *
     * @param GetIpfilterListRequest $request GetIpfilterListRequest
     *
     * @return GetIpfilterListResponse GetIpfilterListResponse
     */
    public function getIpfilterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpfilterListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户无效地址级别配置
     *  *
     * @param GetSuppressionListLevelRequest $request GetSuppressionListLevelRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSuppressionListLevelResponse GetSuppressionListLevelResponse
     */
    public function getSuppressionListLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSuppressionListLevel',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSuppressionListLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户无效地址级别配置
     *  *
     * @param GetSuppressionListLevelRequest $request GetSuppressionListLevelRequest
     *
     * @return GetSuppressionListLevelResponse GetSuppressionListLevelResponse
     */
    public function getSuppressionListLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuppressionListLevelWithOptions($request, $runtime);
    }

    /**
     * @summary 获取跟踪信息
     *  *
     * @param GetTrackListRequest $request GetTrackListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTrackListResponse GetTrackListResponse
     */
    public function getTrackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->offsetCreateTime)) {
            $query['OffsetCreateTime'] = $request->offsetCreateTime;
        }
        if (!Utils::isUnset($request->offsetCreateTimeDesc)) {
            $query['OffsetCreateTimeDesc'] = $request->offsetCreateTimeDesc;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->total)) {
            $query['Total'] = $request->total;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrackList',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取跟踪信息
     *  *
     * @param GetTrackListRequest $request GetTrackListRequest
     *
     * @return GetTrackListResponse GetTrackListResponse
     */
    public function getTrackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrackListWithOptions($request, $runtime);
    }

    /**
     * @summary 根据发信地址和Tag名称获取跟踪信息
     *  *
     * @param GetTrackListByMailFromAndTagNameRequest $request GetTrackListByMailFromAndTagNameRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTrackListByMailFromAndTagNameResponse GetTrackListByMailFromAndTagNameResponse
     */
    public function getTrackListByMailFromAndTagNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->offsetCreateTime)) {
            $query['OffsetCreateTime'] = $request->offsetCreateTime;
        }
        if (!Utils::isUnset($request->offsetCreateTimeDesc)) {
            $query['OffsetCreateTimeDesc'] = $request->offsetCreateTimeDesc;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->total)) {
            $query['Total'] = $request->total;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrackListByMailFromAndTagName',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrackListByMailFromAndTagNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据发信地址和Tag名称获取跟踪信息
     *  *
     * @param GetTrackListByMailFromAndTagNameRequest $request GetTrackListByMailFromAndTagNameRequest
     *
     * @return GetTrackListByMailFromAndTagNameResponse GetTrackListByMailFromAndTagNameResponse
     */
    public function getTrackListByMailFromAndTagName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrackListByMailFromAndTagNameWithOptions($request, $runtime);
    }

    /**
     * @summary 获取账号详情
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取账号详情
     *  *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($runtime);
    }

    /**
     * @summary 列出用户无效地址
     *  *
     * @param ListUserSuppressionRequest $request ListUserSuppressionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserSuppressionResponse ListUserSuppressionResponse
     */
    public function listUserSuppressionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->endBounceTime)) {
            $query['EndBounceTime'] = $request->endBounceTime;
        }
        if (!Utils::isUnset($request->endCreateTime)) {
            $query['EndCreateTime'] = $request->endCreateTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startBounceTime)) {
            $query['StartBounceTime'] = $request->startBounceTime;
        }
        if (!Utils::isUnset($request->startCreateTime)) {
            $query['StartCreateTime'] = $request->startCreateTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserSuppression',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserSuppressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出用户无效地址
     *  *
     * @param ListUserSuppressionRequest $request ListUserSuppressionRequest
     *
     * @return ListUserSuppressionResponse ListUserSuppressionResponse
     */
    public function listUserSuppression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserSuppressionWithOptions($request, $runtime);
    }

    /**
     * @summary 修改发信地址
     *  *
     * @param ModifyMailAddressRequest $request ModifyMailAddressRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMailAddressResponse ModifyMailAddressResponse
     */
    public function modifyMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mailAddressId)) {
            $query['MailAddressId'] = $request->mailAddressId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->replyAddress)) {
            $query['ReplyAddress'] = $request->replyAddress;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMailAddress',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMailAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改发信地址
     *  *
     * @param ModifyMailAddressRequest $request ModifyMailAddressRequest
     *
     * @return ModifyMailAddressResponse ModifyMailAddressResponse
     */
    public function modifyMailAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMailAddressWithOptions($request, $runtime);
    }

    /**
     * @summary 修改域级别密码
     *  *
     * @param ModifyPWByDomainRequest $request ModifyPWByDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPWByDomainResponse ModifyPWByDomainResponse
     */
    public function modifyPWByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPWByDomain',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPWByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改域级别密码
     *  *
     * @param ModifyPWByDomainRequest $request ModifyPWByDomainRequest
     *
     * @return ModifyPWByDomainResponse ModifyPWByDomainResponse
     */
    public function modifyPWByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPWByDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 修改标签
     *  *
     * @param ModifyTagRequest $request ModifyTagRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTagResponse ModifyTagResponse
     */
    public function modifyTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagDescription)) {
            $query['TagDescription'] = $request->tagDescription;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTag',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改标签
     *  *
     * @param ModifyTagRequest $request ModifyTagRequest
     *
     * @return ModifyTagResponse ModifyTagResponse
     */
    public function modifyTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagWithOptions($request, $runtime);
    }

    /**
     * @summary 查询域名信息
     *  *
     * @param QueryDomainByParamRequest $request QueryDomainByParamRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainByParamResponse QueryDomainByParamResponse
     */
    public function queryDomainByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainByParam',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询域名信息
     *  *
     * @param QueryDomainByParamRequest $request QueryDomainByParamRequest
     *
     * @return QueryDomainByParamResponse QueryDomainByParamResponse
     */
    public function queryDomainByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainByParamWithOptions($request, $runtime);
    }

    /**
     * @summary NextStart修改为string
     *  *
     * @param QueryInvalidAddressRequest $request QueryInvalidAddressRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryInvalidAddressResponse QueryInvalidAddressResponse
     */
    public function queryInvalidAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->nextStart)) {
            $query['NextStart'] = $request->nextStart;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInvalidAddress',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInvalidAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary NextStart修改为string
     *  *
     * @param QueryInvalidAddressRequest $request QueryInvalidAddressRequest
     *
     * @return QueryInvalidAddressResponse QueryInvalidAddressResponse
     */
    public function queryInvalidAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInvalidAddressWithOptions($request, $runtime);
    }

    /**
     * @param QueryMailAddressByParamRequest $request QueryMailAddressByParamRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMailAddressByParamResponse QueryMailAddressByParamResponse
     */
    public function queryMailAddressByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendtype)) {
            $query['Sendtype'] = $request->sendtype;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMailAddressByParam',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMailAddressByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMailAddressByParamRequest $request QueryMailAddressByParamRequest
     *
     * @return QueryMailAddressByParamResponse QueryMailAddressByParamResponse
     */
    public function queryMailAddressByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMailAddressByParamWithOptions($request, $runtime);
    }

    /**
     * @summary 查询收信人列表详情
     *  *
     * @param QueryReceiverByParamRequest $request QueryReceiverByParamRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryReceiverByParamResponse QueryReceiverByParamResponse
     */
    public function queryReceiverByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryReceiverByParam',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryReceiverByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询收信人列表详情
     *  *
     * @param QueryReceiverByParamRequest $request QueryReceiverByParamRequest
     *
     * @return QueryReceiverByParamResponse QueryReceiverByParamResponse
     */
    public function queryReceiverByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReceiverByParamWithOptions($request, $runtime);
    }

    /**
     * @summary 查询收信人列表详情信息
     *  *
     * @param QueryReceiverDetailRequest $request QueryReceiverDetailRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryReceiverDetailResponse QueryReceiverDetailResponse
     */
    public function queryReceiverDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->nextStart)) {
            $query['NextStart'] = $request->nextStart;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->receiverId)) {
            $query['ReceiverId'] = $request->receiverId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryReceiverDetail',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryReceiverDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询收信人列表详情信息
     *  *
     * @param QueryReceiverDetailRequest $request QueryReceiverDetailRequest
     *
     * @return QueryReceiverDetailResponse QueryReceiverDetailResponse
     */
    public function queryReceiverDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReceiverDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTagByParamRequest $request QueryTagByParamRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTagByParamResponse QueryTagByParamResponse
     */
    public function queryTagByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTagByParam',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTagByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTagByParamRequest $request QueryTagByParamRequest
     *
     * @return QueryTagByParamResponse QueryTagByParamResponse
     */
    public function queryTagByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagByParamWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskByParamRequest $request QueryTaskByParamRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTaskByParamResponse QueryTaskByParamResponse
     */
    public function queryTaskByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskByParam',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTaskByParamRequest $request QueryTaskByParamRequest
     *
     * @return QueryTaskByParamResponse QueryTaskByParamResponse
     */
    public function queryTaskByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskByParamWithOptions($request, $runtime);
    }

    /**
     * @summary 删除用户无效地址
     *  *
     * @param RemoveUserSuppressionRequest $request RemoveUserSuppressionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserSuppressionResponse RemoveUserSuppressionResponse
     */
    public function removeUserSuppressionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->suppressionIds)) {
            $query['SuppressionIds'] = $request->suppressionIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserSuppression',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUserSuppressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除用户无效地址
     *  *
     * @param RemoveUserSuppressionRequest $request RemoveUserSuppressionRequest
     *
     * @return RemoveUserSuppressionResponse RemoveUserSuppressionResponse
     */
    public function removeUserSuppression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserSuppressionWithOptions($request, $runtime);
    }

    /**
     * @summary 建单个收件人
     *  *
     * @param SaveReceiverDetailRequest $request SaveReceiverDetailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveReceiverDetailResponse SaveReceiverDetailResponse
     */
    public function saveReceiverDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->detail)) {
            $query['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->receiverId)) {
            $query['ReceiverId'] = $request->receiverId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveReceiverDetail',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveReceiverDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 建单个收件人
     *  *
     * @param SaveReceiverDetailRequest $request SaveReceiverDetailRequest
     *
     * @return SaveReceiverDetailResponse SaveReceiverDetailResponse
     */
    public function saveReceiverDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveReceiverDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 发送模板测试邮件
     *  *
     * @param SendTestByTemplateRequest $request SendTestByTemplateRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SendTestByTemplateResponse SendTestByTemplateResponse
     */
    public function sendTestByTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->birthday)) {
            $query['Birthday'] = $request->birthday;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->gender)) {
            $query['Gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->nickName)) {
            $query['NickName'] = $request->nickName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendTestByTemplate',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendTestByTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发送模板测试邮件
     *  *
     * @param SendTestByTemplateRequest $request SendTestByTemplateRequest
     *
     * @return SendTestByTemplateResponse SendTestByTemplateResponse
     */
    public function sendTestByTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTestByTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取指定条件下的发送数据
     *  *
     * @param SenderStatisticsByTagNameAndBatchIDRequest $request SenderStatisticsByTagNameAndBatchIDRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SenderStatisticsByTagNameAndBatchIDResponse SenderStatisticsByTagNameAndBatchIDResponse
     */
    public function senderStatisticsByTagNameAndBatchIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SenderStatisticsByTagNameAndBatchID',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SenderStatisticsByTagNameAndBatchIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定条件下的发送数据
     *  *
     * @param SenderStatisticsByTagNameAndBatchIDRequest $request SenderStatisticsByTagNameAndBatchIDRequest
     *
     * @return SenderStatisticsByTagNameAndBatchIDResponse SenderStatisticsByTagNameAndBatchIDResponse
     */
    public function senderStatisticsByTagNameAndBatchID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->senderStatisticsByTagNameAndBatchIDWithOptions($request, $runtime);
    }

    /**
     * @summary 查询投递结果详情
     *  *
     * @param SenderStatisticsDetailByParamRequest $request SenderStatisticsDetailByParamRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SenderStatisticsDetailByParamResponse SenderStatisticsDetailByParamResponse
     */
    public function senderStatisticsDetailByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->nextStart)) {
            $query['NextStart'] = $request->nextStart;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->toAddress)) {
            $query['ToAddress'] = $request->toAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SenderStatisticsDetailByParam',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SenderStatisticsDetailByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询投递结果详情
     *  *
     * @param SenderStatisticsDetailByParamRequest $request SenderStatisticsDetailByParamRequest
     *
     * @return SenderStatisticsDetailByParamResponse SenderStatisticsDetailByParamResponse
     */
    public function senderStatisticsDetailByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->senderStatisticsDetailByParamWithOptions($request, $runtime);
    }

    /**
     * @summary 设置用户无效地址级别配置
     *  *
     * @param SetSuppressionListLevelRequest $request SetSuppressionListLevelRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSuppressionListLevelResponse SetSuppressionListLevelResponse
     */
    public function setSuppressionListLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->suppressionListLevel)) {
            $query['SuppressionListLevel'] = $request->suppressionListLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSuppressionListLevel',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSuppressionListLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置用户无效地址级别配置
     *  *
     * @param SetSuppressionListLevelRequest $request SetSuppressionListLevelRequest
     *
     * @return SetSuppressionListLevelResponse SetSuppressionListLevelResponse
     */
    public function setSuppressionListLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSuppressionListLevelWithOptions($request, $runtime);
    }

    /**
     * @summary API发信
     *  *
     * @param SingleSendMailRequest $request SingleSendMailRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SingleSendMailResponse SingleSendMailResponse
     */
    public function singleSendMailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->clickTrace)) {
            $query['ClickTrace'] = $request->clickTrace;
        }
        if (!Utils::isUnset($request->fromAlias)) {
            $query['FromAlias'] = $request->fromAlias;
        }
        if (!Utils::isUnset($request->htmlBody)) {
            $query['HtmlBody'] = $request->htmlBody;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->replyAddress)) {
            $query['ReplyAddress'] = $request->replyAddress;
        }
        if (!Utils::isUnset($request->replyAddressAlias)) {
            $query['ReplyAddressAlias'] = $request->replyAddressAlias;
        }
        if (!Utils::isUnset($request->replyToAddress)) {
            $query['ReplyToAddress'] = $request->replyToAddress;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->textBody)) {
            $query['TextBody'] = $request->textBody;
        }
        if (!Utils::isUnset($request->toAddress)) {
            $query['ToAddress'] = $request->toAddress;
        }
        if (!Utils::isUnset($request->unSubscribeFilterLevel)) {
            $query['UnSubscribeFilterLevel'] = $request->unSubscribeFilterLevel;
        }
        if (!Utils::isUnset($request->unSubscribeLinkType)) {
            $query['UnSubscribeLinkType'] = $request->unSubscribeLinkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SingleSendMail',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SingleSendMailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary API发信
     *  *
     * @param SingleSendMailRequest $request SingleSendMailRequest
     *
     * @return SingleSendMailResponse SingleSendMailResponse
     */
    public function singleSendMail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleSendMailWithOptions($request, $runtime);
    }

    /**
     * @summary 更新IP防护API
     *  *
     * @param UpdateIpProtectionRequest $request UpdateIpProtectionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIpProtectionResponse UpdateIpProtectionResponse
     */
    public function updateIpProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipProtection)) {
            $query['IpProtection'] = $request->ipProtection;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIpProtection',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIpProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新IP防护API
     *  *
     * @param UpdateIpProtectionRequest $request UpdateIpProtectionRequest
     *
     * @return UpdateIpProtectionResponse UpdateIpProtectionResponse
     */
    public function updateIpProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新帐号信息
     *  *
     * @param UpdateUserRequest $tmpReq  UpdateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->userShrink)) {
            $body['User'] = $request->userShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2015-11-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新帐号信息
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}
