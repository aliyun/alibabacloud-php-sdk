<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dm\V20170622\Models\AddIpfilterRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\AddIpfilterResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\BatchSendMailRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\BatchSendMailResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\CheckDomainDnsRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\CheckDomainDnsResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\CheckDomainRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\CheckDomainResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateReceiverRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateReceiverResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateTagRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateTagResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteReceiverDetailRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteReceiverDetailResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteReceiverRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteReceiverResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteTagRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteTagResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DescAccountSummaryRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DescAccountSummaryResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DescDomainRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DescDomainResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\DescTemplateRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\DescTemplateResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\GetAccountListRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\GetAccountListResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\GetMailAddressMsgCallBackUrlRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\GetMailAddressMsgCallBackUrlResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\GetTrackListRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\GetTrackListResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\ModifyMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\ModifyMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\ModifyPWByDomainRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\ModifyPWByDomainResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\ModifyTagRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\ModifyTagResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\ModifyTemplateRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\ModifyTemplateResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryDomainByParamRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryDomainByParamResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryInvalidAddressRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryInvalidAddressResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryMailAddressByParamRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryMailAddressByParamResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryReceiverByParamRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryReceiverByParamResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryReceiverDetailRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryReceiverDetailResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryTagByParamRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryTagByParamResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryTaskByParamRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryTaskByParamResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryTemplateByParamRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\QueryTemplateByParamResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\SaveReceiverDetailRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\SaveReceiverDetailResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\SenderStatisticsByTagNameAndBatchIDRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\SenderStatisticsByTagNameAndBatchIDResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\SenderStatisticsDetailByParamRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\SenderStatisticsDetailByParamResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\SingleSendMailRequest;
use AlibabaCloud\SDK\Dm\V20170622\Models\SingleSendMailResponse;
use AlibabaCloud\SDK\Dm\V20170622\Models\SingleSendMailV2Request;
use AlibabaCloud\SDK\Dm\V20170622\Models\SingleSendMailV2Response;
use AlibabaCloud\SDK\Dm\V20170622\Models\SingleSendMailV2ShrinkRequest;
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
     * @summary 添加IP白名单
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
            'version'     => '2017-06-22',
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
     * @summary 添加IP白名单
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
     * @summary 校验域名Dns状态
     *  *
     * @param CheckDomainDnsRequest $request CheckDomainDnsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDomainDnsResponse CheckDomainDnsResponse
     */
    public function checkDomainDnsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDomainDns',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDomainDnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验域名Dns状态
     *  *
     * @param CheckDomainDnsRequest $request CheckDomainDnsRequest
     *
     * @return CheckDomainDnsResponse CheckDomainDnsResponse
     */
    public function checkDomainDns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainDnsWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
     * @param CreateTemplateRequest $request CreateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromType)) {
            $query['FromType'] = $request->fromType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->smsContent)) {
            $query['SmsContent'] = $request->smsContent;
        }
        if (!Utils::isUnset($request->smsType)) {
            $query['SmsType'] = $request->smsType;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateNickName)) {
            $query['TemplateNickName'] = $request->templateNickName;
        }
        if (!Utils::isUnset($request->templateSubject)) {
            $query['TemplateSubject'] = $request->templateSubject;
        }
        if (!Utils::isUnset($request->templateText)) {
            $query['TemplateText'] = $request->templateText;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request CreateTemplateRequest
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromType)) {
            $query['FromType'] = $request->fromType;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
     * @param DescTemplateRequest $request DescTemplateRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescTemplateResponse DescTemplateResponse
     */
    public function descTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromType)) {
            $query['FromType'] = $request->fromType;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescTemplate',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescTemplateRequest $request DescTemplateRequest
     *
     * @return DescTemplateResponse DescTemplateResponse
     */
    public function descTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountListRequest $request GetAccountListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountListResponse GetAccountListResponse
     */
    public function getAccountListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->total)) {
            $query['Total'] = $request->total;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountList',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAccountListRequest $request GetAccountListRequest
     *
     * @return GetAccountListResponse GetAccountListResponse
     */
    public function getAccountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountListWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI GetMailAddressMsgCallBackUrl is deprecated
     *  *
     * @summary 查询发信地址消息回调地址信息
     *  *
     * Deprecated
     *
     * @param GetMailAddressMsgCallBackUrlRequest $request GetMailAddressMsgCallBackUrlRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMailAddressMsgCallBackUrlResponse GetMailAddressMsgCallBackUrlResponse
     */
    public function getMailAddressMsgCallBackUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mailFrom)) {
            $query['MailFrom'] = $request->mailFrom;
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
            'action'      => 'GetMailAddressMsgCallBackUrl',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMailAddressMsgCallBackUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetMailAddressMsgCallBackUrl is deprecated
     *  *
     * @summary 查询发信地址消息回调地址信息
     *  *
     * Deprecated
     *
     * @param GetMailAddressMsgCallBackUrlRequest $request GetMailAddressMsgCallBackUrlRequest
     *
     * @return GetMailAddressMsgCallBackUrlResponse GetMailAddressMsgCallBackUrlResponse
     */
    public function getMailAddressMsgCallBackUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMailAddressMsgCallBackUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取打开、点击等跟踪行为的统计结果
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
            'action'      => 'GetTrackList',
            'version'     => '2017-06-22',
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
     * @summary 获取打开、点击等跟踪行为的统计结果
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
            'version'     => '2017-06-22',
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
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPWByDomain',
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
     * @summary 修改模板信息
     *  *
     * @param ModifyTemplateRequest $request ModifyTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTemplateResponse ModifyTemplateResponse
     */
    public function modifyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromType)) {
            $query['FromType'] = $request->fromType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->smsContent)) {
            $query['SmsContent'] = $request->smsContent;
        }
        if (!Utils::isUnset($request->smsType)) {
            $query['SmsType'] = $request->smsType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateNickName)) {
            $query['TemplateNickName'] = $request->templateNickName;
        }
        if (!Utils::isUnset($request->templateSubject)) {
            $query['TemplateSubject'] = $request->templateSubject;
        }
        if (!Utils::isUnset($request->templateText)) {
            $query['TemplateText'] = $request->templateText;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTemplate',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改模板信息
     *  *
     * @param ModifyTemplateRequest $request ModifyTemplateRequest
     *
     * @return ModifyTemplateResponse ModifyTemplateResponse
     */
    public function modifyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
     * @param QueryTemplateByParamRequest $request QueryTemplateByParamRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTemplateByParamResponse QueryTemplateByParamResponse
     */
    public function queryTemplateByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromType)) {
            $query['FromType'] = $request->fromType;
        }
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
            'action'      => 'QueryTemplateByParam',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTemplateByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTemplateByParamRequest $request QueryTemplateByParamRequest
     *
     * @return QueryTemplateByParamResponse QueryTemplateByParamResponse
     */
    public function queryTemplateByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTemplateByParamWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
            'version'     => '2017-06-22',
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
     * @summary 极高发信专用API
     *  *
     * @param SingleSendMailV2Request $tmpReq  SingleSendMailV2Request
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SingleSendMailV2Response SingleSendMailV2Response
     */
    public function singleSendMailV2WithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SingleSendMailV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->htmlBodyPlaceHolders)) {
            $request->htmlBodyPlaceHoldersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->htmlBodyPlaceHolders, 'HtmlBodyPlaceHolders', 'json');
        }
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
        if (!Utils::isUnset($request->htmlBodyPlaceHoldersShrink)) {
            $query['HtmlBodyPlaceHolders'] = $request->htmlBodyPlaceHoldersShrink;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SingleSendMailV2',
            'version'     => '2017-06-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SingleSendMailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 极高发信专用API
     *  *
     * @param SingleSendMailV2Request $request SingleSendMailV2Request
     *
     * @return SingleSendMailV2Response SingleSendMailV2Response
     */
    public function singleSendMailV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleSendMailV2WithOptions($request, $runtime);
    }
}
