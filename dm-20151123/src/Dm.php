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
use AlibabaCloud\SDK\Dm\V20151123\Models\ChangeDomainDkimRecordRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ChangeDomainDkimRecordResponse;
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
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpAutoRenewalRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpAutoRenewalResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpChangeWarmupTypeRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpChangeWarmupTypeResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpNonePoolListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolCreateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolCreateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolDeleteRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolDeleteResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolUpdateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolUpdateResponse;
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
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailAdvanceRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UnblockSendingRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UnblockSendingResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateIpProtectionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateIpProtectionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserShrinkRequest;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\FileForm\FileForm;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\Tea\XML\XML;
use Darabonba\OpenApi\Models\Config;
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
     * @param string  $bucketName
     * @param mixed[] $data
     *
     * @return array
     *
     * @throws TeaError
     */
    public function _postOSSObject($bucketName, $data)
    {
        $_request = new Request();
        $form = Utils::assertAsMap($data);
        $boundary = FileForm::getBoundary();
        $host = Utils::assertAsString(@$form['host']);
        $_request->protocol = 'HTTPS';
        $_request->method = 'POST';
        $_request->pathname = '/';
        $_request->headers = [
            'host' => $host,
            'date' => Utils::getDateUTCString(),
            'user-agent' => Utils::getUserAgent(''),
        ];
        $_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
        $_request->body = FileForm::toFileForm($form, $boundary);
        $_lastRequest = $_request;
        $_response = Tea::send($_request);
        $respMap = null;
        $bodyStr = Utils::readAsString($_response->body);
        if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
            $respMap = XML::parseXml($bodyStr, null);
            $err = Utils::assertAsMap(@$respMap['Error']);

            throw new TeaError([
                'code' => @$err['Code'],
                'message' => @$err['Message'],
                'data' => [
                    'httpCode' => $_response->statusCode,
                    'requestId' => @$err['RequestId'],
                    'hostId' => @$err['HostId'],
                ],
            ]);
        }
        $respMap = XML::parseXml($bodyStr, null);

        return Tea::merge($respMap);
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
     * @summary Add IP Protection Information
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
     * @summary Add IP Protection Information
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
     * @summary Verify Reply Address
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
     * @summary Verify Reply Address
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
     * @summary Batch Send Emails
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
        if (!Utils::isUnset($request->headers)) {
            $query['Headers'] = $request->headers;
        }
        if (!Utils::isUnset($request->ipPoolId)) {
            $query['IpPoolId'] = $request->ipPoolId;
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
     * @summary Batch Send Emails
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
     * @summary 修改域名DKIM记录
     *  *
     * @param ChangeDomainDkimRecordRequest $request ChangeDomainDkimRecordRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeDomainDkimRecordResponse ChangeDomainDkimRecordResponse
     */
    public function changeDomainDkimRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dkimRsaLength)) {
            $query['DkimRsaLength'] = $request->dkimRsaLength;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
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
            'action' => 'ChangeDomainDkimRecord',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeDomainDkimRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改域名DKIM记录
     *  *
     * @param ChangeDomainDkimRecordRequest $request ChangeDomainDkimRecordRequest
     *
     * @return ChangeDomainDkimRecordResponse ChangeDomainDkimRecordResponse
     */
    public function changeDomainDkimRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeDomainDkimRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Check Domain Status
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
     * @summary Check Domain Status
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
     * @summary Validate Reply-To Address
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
     * @summary Validate Reply-To Address
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
     * @summary Create Domain
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
        if (!Utils::isUnset($request->dkimSelector)) {
            $query['dkimSelector'] = $request->dkimSelector;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Create Domain
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
     * @summary Create a mail address.
     *  *
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
     * @summary Create a mail address.
     *  *
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
     * @summary Create Receiver List
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
     * @summary Create Receiver List
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
     * @summary Create Tag
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
     * @summary Create Tag
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
     * @summary Create User\\"s Invalid Address
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
     * @summary Create User\\"s Invalid Address
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
     * @summary Set Dedicated IP Auto Renewal
     *  *
     * @param DedicatedIpAutoRenewalRequest $request DedicatedIpAutoRenewalRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DedicatedIpAutoRenewalResponse DedicatedIpAutoRenewalResponse
     */
    public function dedicatedIpAutoRenewalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenewal)) {
            $query['AutoRenewal'] = $request->autoRenewal;
        }
        if (!Utils::isUnset($request->buyResourceIds)) {
            $query['BuyResourceIds'] = $request->buyResourceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DedicatedIpAutoRenewal',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DedicatedIpAutoRenewalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Set Dedicated IP Auto Renewal
     *  *
     * @param DedicatedIpAutoRenewalRequest $request DedicatedIpAutoRenewalRequest
     *
     * @return DedicatedIpAutoRenewalResponse DedicatedIpAutoRenewalResponse
     */
    public function dedicatedIpAutoRenewal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpAutoRenewalWithOptions($request, $runtime);
    }

    /**
     * @summary Change the warmup method for a dedicated IP
     *  *
     * @param DedicatedIpChangeWarmupTypeRequest $request DedicatedIpChangeWarmupTypeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DedicatedIpChangeWarmupTypeResponse DedicatedIpChangeWarmupTypeResponse
     */
    public function dedicatedIpChangeWarmupTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->warmupType)) {
            $query['WarmupType'] = $request->warmupType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DedicatedIpChangeWarmupType',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DedicatedIpChangeWarmupTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Change the warmup method for a dedicated IP
     *  *
     * @param DedicatedIpChangeWarmupTypeRequest $request DedicatedIpChangeWarmupTypeRequest
     *
     * @return DedicatedIpChangeWarmupTypeResponse DedicatedIpChangeWarmupTypeResponse
     */
    public function dedicatedIpChangeWarmupType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpChangeWarmupTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Dedicated IP User IP List
     *  *
     * @param DedicatedIpListRequest $request DedicatedIpListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DedicatedIpListResponse DedicatedIpListResponse
     */
    public function dedicatedIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DedicatedIpList',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DedicatedIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Dedicated IP User IP List
     *  *
     * @param DedicatedIpListRequest $request DedicatedIpListRequest
     *
     * @return DedicatedIpListResponse DedicatedIpListResponse
     */
    public function dedicatedIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpListWithOptions($request, $runtime);
    }

    /**
     * @summary Purchased Independent IPs Not Added to Pool
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DedicatedIpNonePoolListResponse DedicatedIpNonePoolListResponse
     */
    public function dedicatedIpNonePoolListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DedicatedIpNonePoolList',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DedicatedIpNonePoolListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Purchased Independent IPs Not Added to Pool
     *  *
     * @return DedicatedIpNonePoolListResponse DedicatedIpNonePoolListResponse
     */
    public function dedicatedIpNonePoolList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpNonePoolListWithOptions($runtime);
    }

    /**
     * @summary Creation of Independent IP Pool
     *  *
     * @param DedicatedIpPoolCreateRequest $request DedicatedIpPoolCreateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DedicatedIpPoolCreateResponse DedicatedIpPoolCreateResponse
     */
    public function dedicatedIpPoolCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buyResourceIds)) {
            $query['BuyResourceIds'] = $request->buyResourceIds;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DedicatedIpPoolCreate',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DedicatedIpPoolCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creation of Independent IP Pool
     *  *
     * @param DedicatedIpPoolCreateRequest $request DedicatedIpPoolCreateRequest
     *
     * @return DedicatedIpPoolCreateResponse DedicatedIpPoolCreateResponse
     */
    public function dedicatedIpPoolCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpPoolCreateWithOptions($request, $runtime);
    }

    /**
     * @summary 独立IP池删除
     *  *
     * @param DedicatedIpPoolDeleteRequest $request DedicatedIpPoolDeleteRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DedicatedIpPoolDeleteResponse DedicatedIpPoolDeleteResponse
     */
    public function dedicatedIpPoolDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DedicatedIpPoolDelete',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DedicatedIpPoolDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 独立IP池删除
     *  *
     * @param DedicatedIpPoolDeleteRequest $request DedicatedIpPoolDeleteRequest
     *
     * @return DedicatedIpPoolDeleteResponse DedicatedIpPoolDeleteResponse
     */
    public function dedicatedIpPoolDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpPoolDeleteWithOptions($request, $runtime);
    }

    /**
     * @summary Dedicated IP Pool List
     *  *
     * @param DedicatedIpPoolListRequest $request DedicatedIpPoolListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DedicatedIpPoolListResponse DedicatedIpPoolListResponse
     */
    public function dedicatedIpPoolListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DedicatedIpPoolList',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DedicatedIpPoolListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Dedicated IP Pool List
     *  *
     * @param DedicatedIpPoolListRequest $request DedicatedIpPoolListRequest
     *
     * @return DedicatedIpPoolListResponse DedicatedIpPoolListResponse
     */
    public function dedicatedIpPoolList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpPoolListWithOptions($request, $runtime);
    }

    /**
     * @summary Update of dedicated IP Pool
     *  *
     * @param DedicatedIpPoolUpdateRequest $request DedicatedIpPoolUpdateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DedicatedIpPoolUpdateResponse DedicatedIpPoolUpdateResponse
     */
    public function dedicatedIpPoolUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buyResourceIds)) {
            $query['BuyResourceIds'] = $request->buyResourceIds;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->updateResource)) {
            $query['UpdateResource'] = $request->updateResource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DedicatedIpPoolUpdate',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DedicatedIpPoolUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update of dedicated IP Pool
     *  *
     * @param DedicatedIpPoolUpdateRequest $request DedicatedIpPoolUpdateRequest
     *
     * @return DedicatedIpPoolUpdateResponse DedicatedIpPoolUpdateResponse
     */
    public function dedicatedIpPoolUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpPoolUpdateWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Domain
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
     * @summary Delete Domain
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
     * @summary Remove invalid addresses from the invalid address database
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
     * @summary Remove invalid addresses from the invalid address database
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
     * @summary Delete IP Protection Information
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
     * @summary Delete IP Protection Information
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
     * @summary Delete Mail Address
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
     * @summary Delete Mail Address
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
     * @summary Delete Receiver List
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
     * @summary Delete Receiver List
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
     * @summary Delete a Single Recipient
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
     * @summary Delete a Single Recipient
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
     * @summary Delete Tag
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
     * @summary Delete Tag
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
     * @summary Retrieve account information.
     *  *
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
     * @summary Retrieve account information.
     *  *
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
     * @summary Get Domain Details
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
     * @summary Get Domain Details
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
     * @summary Get IP Protection Information
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
     * @summary Get IP Protection Information
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
     * @summary Retrieve IP Protection Information
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
     * @summary Retrieve IP Protection Information
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
     * @summary Get tracking information
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
        if (!Utils::isUnset($request->dedicatedIp)) {
            $query['DedicatedIp'] = $request->dedicatedIp;
        }
        if (!Utils::isUnset($request->dedicatedIpPoolId)) {
            $query['DedicatedIpPoolId'] = $request->dedicatedIpPoolId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->esp)) {
            $query['Esp'] = $request->esp;
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
     * @summary Get tracking information
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
     * @summary Get tracking information based on the sender address and tag name
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
        if (!Utils::isUnset($request->dedicatedIp)) {
            $query['DedicatedIp'] = $request->dedicatedIp;
        }
        if (!Utils::isUnset($request->dedicatedIpPoolId)) {
            $query['DedicatedIpPoolId'] = $request->dedicatedIpPoolId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->esp)) {
            $query['Esp'] = $request->esp;
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
     * @summary Get tracking information based on the sender address and tag name
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
     * @summary Get Account Details
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
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
     * @summary Get Account Details
     *  *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($runtime);
    }

    /**
     * @summary List User Invalid Addresses.
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
     * @summary List User Invalid Addresses.
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
     * @summary Modify the sending address
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
     * @summary Modify the sending address
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
     * @summary Modify the domain-level password
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
     * @summary Modify the domain-level password
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
     * @summary Modify Tag
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
     * @summary Modify Tag
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
     * @summary Query domain information
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
     * @summary Query domain information
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
     * @summary NextStart changed to string
     *  *
     * @description Retrieve deduplicated invalid address information. If an email is sent to the same invalid address multiple times, only the first occurrence will be recorded. The query should be based on the time when the address was first classified as invalid.
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
     * @summary NextStart changed to string
     *  *
     * @description Retrieve deduplicated invalid address information. If an email is sent to the same invalid address multiple times, only the first occurrence will be recorded. The query should be based on the time when the address was first classified as invalid.
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
     * @summary Query the list of sending addresses.
     *  *
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
     * @summary Query the list of sending addresses.
     *  *
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
     * @summary Query the details of the recipient list
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
     * @summary Query the details of the recipient list
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
     * @summary Retrieve detailed information about a recipient list
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
     * @summary Retrieve detailed information about a recipient list
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
     * @summary Call QueryTagByParam to retrieve tags.
     *  *
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
     * @summary Call QueryTagByParam to retrieve tags.
     *  *
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
     * @summary Query task list
     *  *
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
     * @summary Query task list
     *  *
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
     * @summary Create a Single Recipient
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
     * @summary Create a Single Recipient
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
     * @summary Send Template Test Email
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
     * @summary Send Template Test Email
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
     * @summary Retrieve Sending Data under Specified Conditions
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
        if (!Utils::isUnset($request->dedicatedIp)) {
            $query['DedicatedIp'] = $request->dedicatedIp;
        }
        if (!Utils::isUnset($request->dedicatedIpPoolId)) {
            $query['DedicatedIpPoolId'] = $request->dedicatedIpPoolId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->esp)) {
            $query['Esp'] = $request->esp;
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
     * @summary Retrieve Sending Data under Specified Conditions
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
     * @summary Query Delivery Result Details
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
     * @summary Query Delivery Result Details
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
     * @summary API for Sending Emails
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->addressType)) {
            $body['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->attachments)) {
            $body['Attachments'] = $request->attachments;
        }
        if (!Utils::isUnset($request->clickTrace)) {
            $body['ClickTrace'] = $request->clickTrace;
        }
        if (!Utils::isUnset($request->fromAlias)) {
            $body['FromAlias'] = $request->fromAlias;
        }
        if (!Utils::isUnset($request->headers)) {
            $body['Headers'] = $request->headers;
        }
        if (!Utils::isUnset($request->htmlBody)) {
            $body['HtmlBody'] = $request->htmlBody;
        }
        if (!Utils::isUnset($request->ipPoolId)) {
            $body['IpPoolId'] = $request->ipPoolId;
        }
        if (!Utils::isUnset($request->replyAddress)) {
            $body['ReplyAddress'] = $request->replyAddress;
        }
        if (!Utils::isUnset($request->replyAddressAlias)) {
            $body['ReplyAddressAlias'] = $request->replyAddressAlias;
        }
        if (!Utils::isUnset($request->replyToAddress)) {
            $body['ReplyToAddress'] = $request->replyToAddress;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tagName)) {
            $body['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->textBody)) {
            $body['TextBody'] = $request->textBody;
        }
        if (!Utils::isUnset($request->toAddress)) {
            $body['ToAddress'] = $request->toAddress;
        }
        if (!Utils::isUnset($request->unSubscribeFilterLevel)) {
            $body['UnSubscribeFilterLevel'] = $request->unSubscribeFilterLevel;
        }
        if (!Utils::isUnset($request->unSubscribeLinkType)) {
            $body['UnSubscribeLinkType'] = $request->unSubscribeLinkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary API for Sending Emails
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
     * @param SingleSendMailAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SingleSendMailResponse
     *
     * @throws TeaError
     */
    public function singleSendMailAdvance($request, $runtime)
    {
        // Step 0: init client
        $credentialModel = null;
        if (Utils::isUnset($this->_credential)) {
            throw new TeaError([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }
        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'Dm',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $singleSendMailReq = new SingleSendMailRequest([]);
        OpenApiUtilClient::convert($request, $singleSendMailReq);
        if (!Utils::isUnset($request->attachments)) {
            $i0 = 0;
            foreach ($request->attachments as $item0) {
                if (!Utils::isUnset($item0->attachmentUrlObject)) {
                    $tmpResp0 = $authClient->callApi($authParams, $authReq, $runtime);
                    $authResponse = Utils::assertAsMap($tmpResp0);
                    $tmpBody = Utils::assertAsMap(@$authResponse['body']);
                    $useAccelerate = Utils::assertAsBoolean(@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->attachmentUrlObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = [
                        'host' => '' . @$authResponseBody['Bucket'] . '.' . OpenApiUtilClient::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                        'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                        'policy' => @$authResponseBody['EncodedPolicy'],
                        'Signature' => @$authResponseBody['Signature'],
                        'key' => @$authResponseBody['ObjectKey'],
                        'file' => $fileObj,
                        'success_action_status' => '201',
                    ];
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
                    $tmp = @$singleSendMailReq->attachments[$i0];
                    $tmp->attachmentUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->singleSendMailWithOptions($singleSendMailReq, $runtime);
    }

    /**
     * @summary Lift sending restrictions due to unsubscription, reporting, etc.
     *  *
     * @param UnblockSendingRequest $request UnblockSendingRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UnblockSendingResponse UnblockSendingResponse
     */
    public function unblockSendingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockEmail)) {
            $query['BlockEmail'] = $request->blockEmail;
        }
        if (!Utils::isUnset($request->blockType)) {
            $query['BlockType'] = $request->blockType;
        }
        if (!Utils::isUnset($request->senderEmail)) {
            $query['SenderEmail'] = $request->senderEmail;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UnblockSending',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnblockSendingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Lift sending restrictions due to unsubscription, reporting, etc.
     *  *
     * @param UnblockSendingRequest $request UnblockSendingRequest
     *
     * @return UnblockSendingResponse UnblockSendingResponse
     */
    public function unblockSending($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unblockSendingWithOptions($request, $runtime);
    }

    /**
     * @summary Update IP Protection API
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
     * @summary Update IP Protection API
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
     * @summary Update account information
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
     * @summary Update account information
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
