<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Dm\V20151123\Models\AddIpfilterRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\AddIpfilterResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveReplyMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveReplyMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\BatchSendMailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\BatchSendMailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ChangeDomainDkimRecordRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ChangeDomainDkimRecordResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckDisposableRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckDisposableResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckReplyToMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckReplyToMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetCancelRelationFromAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetCancelRelationFromAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetCreateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetCreateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDeleteRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDeleteResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDetailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetDetailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetRelationFromAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetRelationFromAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetUpdateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetUpdateResponse;
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
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteValidateFileRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteValidateFileResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescAccountSummaryRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescAccountSummaryResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetDedicatedIpWarmUpDetailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetDedicatedIpWarmUpDetailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetDedicatedIpWarmUpInfoRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetDedicatedIpWarmUpInfoResponse;
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
use AlibabaCloud\SDK\Dm\V20151123\Models\GetValidateFileRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetValidateFileResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetValidateFileStatusRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetValidateFileStatusResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetValidationQuotaResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListBlockSendingRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListBlockSendingResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListValidateFileRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ListValidateFileResponse;
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
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTemplateByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTemplateByParamResponse;
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
use AlibabaCloud\SDK\Dm\V20151123\Models\SendValidateFileAdvanceRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SendValidateFileRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SendValidateFileResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SetSuppressionListLevelRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SetSuppressionListLevelResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailAdvanceRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailShrinkRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UnblockSendingRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UnblockSendingResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateIpProtectionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateIpProtectionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserShrinkRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ValidateEmailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ValidateEmailResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
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
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => '' . @$form['host'],
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     * @param Request - AddIpfilterRequest
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
     * @param Request - AddIpfilterRequest
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
     * @param Request - ApproveReplyMailAddressRequest
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
     * @param Request - ApproveReplyMailAddressRequest
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
     * @param Request - BatchSendMailRequest
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
     * @param Request - BatchSendMailRequest
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
     * 修改域名DKIM记录.
     *
     * @param Request - ChangeDomainDkimRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeDomainDkimRecordResponse
     *
     * @param ChangeDomainDkimRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChangeDomainDkimRecordResponse
     */
    public function changeDomainDkimRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dkimRsaLength) {
            @$query['DkimRsaLength'] = $request->dkimRsaLength;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
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
     * 修改域名DKIM记录.
     *
     * @param Request - ChangeDomainDkimRecordRequest
     *
     * @returns ChangeDomainDkimRecordResponse
     *
     * @param ChangeDomainDkimRecordRequest $request
     *
     * @return ChangeDomainDkimRecordResponse
     */
    public function changeDomainDkimRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeDomainDkimRecordWithOptions($request, $runtime);
    }

    /**
     * 检查地址是否为一次性邮箱.
     *
     * @param Request - CheckDisposableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDisposableResponse
     *
     * @param CheckDisposableRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckDisposableResponse
     */
    public function checkDisposableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDisposable',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDisposableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查地址是否为一次性邮箱.
     *
     * @param Request - CheckDisposableRequest
     *
     * @returns CheckDisposableResponse
     *
     * @param CheckDisposableRequest $request
     *
     * @return CheckDisposableResponse
     */
    public function checkDisposable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDisposableWithOptions($request, $runtime);
    }

    /**
     * Check Domain Status.
     *
     * @param Request - CheckDomainRequest
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
     * @param Request - CheckDomainRequest
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
     * @param Request - CheckReplyToMailAddressRequest
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
     * @param Request - CheckReplyToMailAddressRequest
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
     * 配置集取消关联发信地址
     *
     * @param Request - ConfigSetCancelRelationFromAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigSetCancelRelationFromAddressResponse
     *
     * @param ConfigSetCancelRelationFromAddressRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ConfigSetCancelRelationFromAddressResponse
     */
    public function configSetCancelRelationFromAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromAddress) {
            @$query['FromAddress'] = $request->fromAddress;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigSetCancelRelationFromAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigSetCancelRelationFromAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置集取消关联发信地址
     *
     * @param Request - ConfigSetCancelRelationFromAddressRequest
     *
     * @returns ConfigSetCancelRelationFromAddressResponse
     *
     * @param ConfigSetCancelRelationFromAddressRequest $request
     *
     * @return ConfigSetCancelRelationFromAddressResponse
     */
    public function configSetCancelRelationFromAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSetCancelRelationFromAddressWithOptions($request, $runtime);
    }

    /**
     * 配置集创建.
     *
     * @param Request - ConfigSetCreateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigSetCreateResponse
     *
     * @param ConfigSetCreateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfigSetCreateResponse
     */
    public function configSetCreateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ipPoolId) {
            @$query['IpPoolId'] = $request->ipPoolId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigSetCreate',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigSetCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置集创建.
     *
     * @param Request - ConfigSetCreateRequest
     *
     * @returns ConfigSetCreateResponse
     *
     * @param ConfigSetCreateRequest $request
     *
     * @return ConfigSetCreateResponse
     */
    public function configSetCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSetCreateWithOptions($request, $runtime);
    }

    /**
     * 删除配置集.
     *
     * @param Request - ConfigSetDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigSetDeleteResponse
     *
     * @param ConfigSetDeleteRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfigSetDeleteResponse
     */
    public function configSetDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->isForce) {
            @$query['IsForce'] = $request->isForce;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigSetDelete',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigSetDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除配置集.
     *
     * @param Request - ConfigSetDeleteRequest
     *
     * @returns ConfigSetDeleteResponse
     *
     * @param ConfigSetDeleteRequest $request
     *
     * @return ConfigSetDeleteResponse
     */
    public function configSetDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSetDeleteWithOptions($request, $runtime);
    }

    /**
     * 配置集详情.
     *
     * @param Request - ConfigSetDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigSetDetailResponse
     *
     * @param ConfigSetDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfigSetDetailResponse
     */
    public function configSetDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigSetDetail',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigSetDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置集详情.
     *
     * @param Request - ConfigSetDetailRequest
     *
     * @returns ConfigSetDetailResponse
     *
     * @param ConfigSetDetailRequest $request
     *
     * @return ConfigSetDetailResponse
     */
    public function configSetDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSetDetailWithOptions($request, $runtime);
    }

    /**
     * 配置集列表.
     *
     * @param Request - ConfigSetListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigSetListResponse
     *
     * @param ConfigSetListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ConfigSetListResponse
     */
    public function configSetListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigSetList',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigSetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置集列表.
     *
     * @param Request - ConfigSetListRequest
     *
     * @returns ConfigSetListResponse
     *
     * @param ConfigSetListRequest $request
     *
     * @return ConfigSetListResponse
     */
    public function configSetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSetListWithOptions($request, $runtime);
    }

    /**
     * 配置集关联发信地址
     *
     * @param Request - ConfigSetRelationFromAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigSetRelationFromAddressResponse
     *
     * @param ConfigSetRelationFromAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ConfigSetRelationFromAddressResponse
     */
    public function configSetRelationFromAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromAddress) {
            @$query['FromAddress'] = $request->fromAddress;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigSetRelationFromAddress',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigSetRelationFromAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置集关联发信地址
     *
     * @param Request - ConfigSetRelationFromAddressRequest
     *
     * @returns ConfigSetRelationFromAddressResponse
     *
     * @param ConfigSetRelationFromAddressRequest $request
     *
     * @return ConfigSetRelationFromAddressResponse
     */
    public function configSetRelationFromAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSetRelationFromAddressWithOptions($request, $runtime);
    }

    /**
     * 配置集更新.
     *
     * @param Request - ConfigSetUpdateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigSetUpdateResponse
     *
     * @param ConfigSetUpdateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfigSetUpdateResponse
     */
    public function configSetUpdateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ipPoolId) {
            @$query['IpPoolId'] = $request->ipPoolId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigSetUpdate',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigSetUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置集更新.
     *
     * @param Request - ConfigSetUpdateRequest
     *
     * @returns ConfigSetUpdateResponse
     *
     * @param ConfigSetUpdateRequest $request
     *
     * @return ConfigSetUpdateResponse
     */
    public function configSetUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSetUpdateWithOptions($request, $runtime);
    }

    /**
     * Create Domain.
     *
     * @param Request - CreateDomainRequest
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
     * @param Request - CreateDomainRequest
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
     * @param Request - CreateMailAddressRequest
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
     * @param Request - CreateMailAddressRequest
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
     * @param Request - CreateReceiverRequest
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
     * @param Request - CreateReceiverRequest
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
     * @param Request - CreateTagRequest
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
     * @param Request - CreateTagRequest
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
     * @param Request - CreateUserSuppressionRequest
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
     * @param Request - CreateUserSuppressionRequest
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
     * Set Dedicated IP Auto Renewal.
     *
     * @param Request - DedicatedIpAutoRenewalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DedicatedIpAutoRenewalResponse
     *
     * @param DedicatedIpAutoRenewalRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DedicatedIpAutoRenewalResponse
     */
    public function dedicatedIpAutoRenewalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenewal) {
            @$query['AutoRenewal'] = $request->autoRenewal;
        }

        if (null !== $request->buyResourceIds) {
            @$query['BuyResourceIds'] = $request->buyResourceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Set Dedicated IP Auto Renewal.
     *
     * @param Request - DedicatedIpAutoRenewalRequest
     *
     * @returns DedicatedIpAutoRenewalResponse
     *
     * @param DedicatedIpAutoRenewalRequest $request
     *
     * @return DedicatedIpAutoRenewalResponse
     */
    public function dedicatedIpAutoRenewal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpAutoRenewalWithOptions($request, $runtime);
    }

    /**
     * Change the warmup method for a dedicated IP.
     *
     * @param Request - DedicatedIpChangeWarmupTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DedicatedIpChangeWarmupTypeResponse
     *
     * @param DedicatedIpChangeWarmupTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DedicatedIpChangeWarmupTypeResponse
     */
    public function dedicatedIpChangeWarmupTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->warmupType) {
            @$query['WarmupType'] = $request->warmupType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Change the warmup method for a dedicated IP.
     *
     * @param Request - DedicatedIpChangeWarmupTypeRequest
     *
     * @returns DedicatedIpChangeWarmupTypeResponse
     *
     * @param DedicatedIpChangeWarmupTypeRequest $request
     *
     * @return DedicatedIpChangeWarmupTypeResponse
     */
    public function dedicatedIpChangeWarmupType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpChangeWarmupTypeWithOptions($request, $runtime);
    }

    /**
     * Dedicated IP User IP List.
     *
     * @param Request - DedicatedIpListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DedicatedIpListResponse
     *
     * @param DedicatedIpListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DedicatedIpListResponse
     */
    public function dedicatedIpListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Dedicated IP User IP List.
     *
     * @param Request - DedicatedIpListRequest
     *
     * @returns DedicatedIpListResponse
     *
     * @param DedicatedIpListRequest $request
     *
     * @return DedicatedIpListResponse
     */
    public function dedicatedIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpListWithOptions($request, $runtime);
    }

    /**
     * Purchased Independent IPs Not Added to Pool.
     *
     * @param Request - DedicatedIpNonePoolListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DedicatedIpNonePoolListResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DedicatedIpNonePoolListResponse
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
     * Purchased Independent IPs Not Added to Pool.
     *
     * @returns DedicatedIpNonePoolListResponse
     *
     * @return DedicatedIpNonePoolListResponse
     */
    public function dedicatedIpNonePoolList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpNonePoolListWithOptions($runtime);
    }

    /**
     * Creation of Independent IP Pool.
     *
     * @param Request - DedicatedIpPoolCreateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DedicatedIpPoolCreateResponse
     *
     * @param DedicatedIpPoolCreateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DedicatedIpPoolCreateResponse
     */
    public function dedicatedIpPoolCreateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buyResourceIds) {
            @$query['BuyResourceIds'] = $request->buyResourceIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Creation of Independent IP Pool.
     *
     * @param Request - DedicatedIpPoolCreateRequest
     *
     * @returns DedicatedIpPoolCreateResponse
     *
     * @param DedicatedIpPoolCreateRequest $request
     *
     * @return DedicatedIpPoolCreateResponse
     */
    public function dedicatedIpPoolCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpPoolCreateWithOptions($request, $runtime);
    }

    /**
     * 独立IP池删除.
     *
     * @param Request - DedicatedIpPoolDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DedicatedIpPoolDeleteResponse
     *
     * @param DedicatedIpPoolDeleteRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DedicatedIpPoolDeleteResponse
     */
    public function dedicatedIpPoolDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 独立IP池删除.
     *
     * @param Request - DedicatedIpPoolDeleteRequest
     *
     * @returns DedicatedIpPoolDeleteResponse
     *
     * @param DedicatedIpPoolDeleteRequest $request
     *
     * @return DedicatedIpPoolDeleteResponse
     */
    public function dedicatedIpPoolDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpPoolDeleteWithOptions($request, $runtime);
    }

    /**
     * Dedicated IP Pool List.
     *
     * @param Request - DedicatedIpPoolListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DedicatedIpPoolListResponse
     *
     * @param DedicatedIpPoolListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DedicatedIpPoolListResponse
     */
    public function dedicatedIpPoolListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Dedicated IP Pool List.
     *
     * @param Request - DedicatedIpPoolListRequest
     *
     * @returns DedicatedIpPoolListResponse
     *
     * @param DedicatedIpPoolListRequest $request
     *
     * @return DedicatedIpPoolListResponse
     */
    public function dedicatedIpPoolList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpPoolListWithOptions($request, $runtime);
    }

    /**
     * Update of dedicated IP Pool.
     *
     * @param Request - DedicatedIpPoolUpdateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DedicatedIpPoolUpdateResponse
     *
     * @param DedicatedIpPoolUpdateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DedicatedIpPoolUpdateResponse
     */
    public function dedicatedIpPoolUpdateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buyResourceIds) {
            @$query['BuyResourceIds'] = $request->buyResourceIds;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->updateResource) {
            @$query['UpdateResource'] = $request->updateResource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Update of dedicated IP Pool.
     *
     * @param Request - DedicatedIpPoolUpdateRequest
     *
     * @returns DedicatedIpPoolUpdateResponse
     *
     * @param DedicatedIpPoolUpdateRequest $request
     *
     * @return DedicatedIpPoolUpdateResponse
     */
    public function dedicatedIpPoolUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dedicatedIpPoolUpdateWithOptions($request, $runtime);
    }

    /**
     * Delete Domain.
     *
     * @param Request - DeleteDomainRequest
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
     * @param Request - DeleteDomainRequest
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
     * @param Request - DeleteInvalidAddressRequest
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
     * @param Request - DeleteInvalidAddressRequest
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
     * @param Request - DeleteIpfilterByEdmIdRequest
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
     * @param Request - DeleteIpfilterByEdmIdRequest
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
     * @param Request - DeleteMailAddressRequest
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
     * @param Request - DeleteMailAddressRequest
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
     * @param Request - DeleteReceiverRequest
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
     * @param Request - DeleteReceiverRequest
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
     * @param Request - DeleteReceiverDetailRequest
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
     * @param Request - DeleteReceiverDetailRequest
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
     * @param Request - DeleteTagRequest
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
     * @param Request - DeleteTagRequest
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
     * 删除批量校验任务的结果文件.
     *
     * @param Request - DeleteValidateFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteValidateFileResponse
     *
     * @param DeleteValidateFileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteValidateFileResponse
     */
    public function deleteValidateFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteValidateFile',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteValidateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除批量校验任务的结果文件.
     *
     * @param Request - DeleteValidateFileRequest
     *
     * @returns DeleteValidateFileResponse
     *
     * @param DeleteValidateFileRequest $request
     *
     * @return DeleteValidateFileResponse
     */
    public function deleteValidateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteValidateFileWithOptions($request, $runtime);
    }

    /**
     * Retrieve account information.
     *
     * @param Request - DescAccountSummaryRequest
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
     * @param Request - DescAccountSummaryRequest
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
     * @param Request - DescDomainRequest
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
     * @param Request - DescDomainRequest
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
     * 查看模板信息.
     *
     * @param Request - DescTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescTemplateResponse
     *
     * @param DescTemplateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescTemplateResponse
     */
    public function descTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromType) {
            @$query['FromType'] = $request->fromType;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescTemplate',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看模板信息.
     *
     * @param Request - DescTemplateRequest
     *
     * @returns DescTemplateResponse
     *
     * @param DescTemplateRequest $request
     *
     * @return DescTemplateResponse
     */
    public function descTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descTemplateWithOptions($request, $runtime);
    }

    /**
     * 获取专属ip的预热详情信息.
     *
     * @param Request - GetDedicatedIpWarmUpDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDedicatedIpWarmUpDetailResponse
     *
     * @param GetDedicatedIpWarmUpDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDedicatedIpWarmUpDetailResponse
     */
    public function getDedicatedIpWarmUpDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedIp) {
            @$query['DedicatedIp'] = $request->dedicatedIp;
        }

        if (null !== $request->endDayMark) {
            @$query['EndDayMark'] = $request->endDayMark;
        }

        if (null !== $request->esp) {
            @$query['Esp'] = $request->esp;
        }

        if (null !== $request->startDayMark) {
            @$query['StartDayMark'] = $request->startDayMark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDedicatedIpWarmUpDetail',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDedicatedIpWarmUpDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取专属ip的预热详情信息.
     *
     * @param Request - GetDedicatedIpWarmUpDetailRequest
     *
     * @returns GetDedicatedIpWarmUpDetailResponse
     *
     * @param GetDedicatedIpWarmUpDetailRequest $request
     *
     * @return GetDedicatedIpWarmUpDetailResponse
     */
    public function getDedicatedIpWarmUpDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDedicatedIpWarmUpDetailWithOptions($request, $runtime);
    }

    /**
     * 获取专属ip的预热信息.
     *
     * @param Request - GetDedicatedIpWarmUpInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDedicatedIpWarmUpInfoResponse
     *
     * @param GetDedicatedIpWarmUpInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDedicatedIpWarmUpInfoResponse
     */
    public function getDedicatedIpWarmUpInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedIp) {
            @$query['DedicatedIp'] = $request->dedicatedIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDedicatedIpWarmUpInfo',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDedicatedIpWarmUpInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取专属ip的预热信息.
     *
     * @param Request - GetDedicatedIpWarmUpInfoRequest
     *
     * @returns GetDedicatedIpWarmUpInfoResponse
     *
     * @param GetDedicatedIpWarmUpInfoRequest $request
     *
     * @return GetDedicatedIpWarmUpInfoResponse
     */
    public function getDedicatedIpWarmUpInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDedicatedIpWarmUpInfoWithOptions($request, $runtime);
    }

    /**
     * Get IP Protection Information.
     *
     * @param Request - GetIpProtectionRequest
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
     * @param Request - GetIpProtectionRequest
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
     * @param Request - GetIpfilterListRequest
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
     * @param Request - GetIpfilterListRequest
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
     * @param Request - GetSuppressionListLevelRequest
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
     * @param Request - GetSuppressionListLevelRequest
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
     * @param Request - GetTrackListRequest
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

        if (null !== $request->configSetId) {
            @$query['ConfigSetId'] = $request->configSetId;
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
     * @param Request - GetTrackListRequest
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
     * @param Request - GetTrackListByMailFromAndTagNameRequest
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

        if (null !== $request->configSetId) {
            @$query['ConfigSetId'] = $request->configSetId;
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
     * @param Request - GetTrackListByMailFromAndTagNameRequest
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
     * @param Request - GetUserRequest
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
     * 获取批量校验任务的结果文件.
     *
     * @param Request - GetValidateFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetValidateFileResponse
     *
     * @param GetValidateFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetValidateFileResponse
     */
    public function getValidateFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetValidateFile',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetValidateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取批量校验任务的结果文件.
     *
     * @param Request - GetValidateFileRequest
     *
     * @returns GetValidateFileResponse
     *
     * @param GetValidateFileRequest $request
     *
     * @return GetValidateFileResponse
     */
    public function getValidateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getValidateFileWithOptions($request, $runtime);
    }

    /**
     * 获取批量校验任务的状态
     *
     * @param Request - GetValidateFileStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetValidateFileStatusResponse
     *
     * @param GetValidateFileStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetValidateFileStatusResponse
     */
    public function getValidateFileStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetValidateFileStatus',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetValidateFileStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取批量校验任务的状态
     *
     * @param Request - GetValidateFileStatusRequest
     *
     * @returns GetValidateFileStatusResponse
     *
     * @param GetValidateFileStatusRequest $request
     *
     * @return GetValidateFileStatusResponse
     */
    public function getValidateFileStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getValidateFileStatusWithOptions($request, $runtime);
    }

    /**
     * 获取电子邮件校验额度.
     *
     * @param Request - GetValidationQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetValidationQuotaResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetValidationQuotaResponse
     */
    public function getValidationQuotaWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetValidationQuota',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetValidationQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取电子邮件校验额度.
     *
     * @returns GetValidationQuotaResponse
     *
     * @return GetValidationQuotaResponse
     */
    public function getValidationQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getValidationQuotaWithOptions($runtime);
    }

    /**
     * 获取发信的黑名单列表.
     *
     * @param Request - ListBlockSendingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBlockSendingResponse
     *
     * @param ListBlockSendingRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListBlockSendingResponse
     */
    public function listBlockSendingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->blockEmail) {
            @$query['BlockEmail'] = $request->blockEmail;
        }

        if (null !== $request->blockType) {
            @$query['BlockType'] = $request->blockType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->senderEmail) {
            @$query['SenderEmail'] = $request->senderEmail;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBlockSending',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBlockSendingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取发信的黑名单列表.
     *
     * @param Request - ListBlockSendingRequest
     *
     * @returns ListBlockSendingResponse
     *
     * @param ListBlockSendingRequest $request
     *
     * @return ListBlockSendingResponse
     */
    public function listBlockSending($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBlockSendingWithOptions($request, $runtime);
    }

    /**
     * List User Invalid Addresses.
     *
     * @param Request - ListUserSuppressionRequest
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
     * @param Request - ListUserSuppressionRequest
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
     * 获取上传的校验文件的列表.
     *
     * @param Request - ListValidateFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListValidateFileResponse
     *
     * @param ListValidateFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListValidateFileResponse
     */
    public function listValidateFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fileKeyword) {
            @$query['FileKeyword'] = $request->fileKeyword;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListValidateFile',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListValidateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取上传的校验文件的列表.
     *
     * @param Request - ListValidateFileRequest
     *
     * @returns ListValidateFileResponse
     *
     * @param ListValidateFileRequest $request
     *
     * @return ListValidateFileResponse
     */
    public function listValidateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listValidateFileWithOptions($request, $runtime);
    }

    /**
     * Modify the sending address.
     *
     * @param Request - ModifyMailAddressRequest
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
     * @param Request - ModifyMailAddressRequest
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
     * @param Request - ModifyPWByDomainRequest
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
     * @param Request - ModifyPWByDomainRequest
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
     * @param Request - ModifyTagRequest
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
     * @param Request - ModifyTagRequest
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
     * @param Request - QueryDomainByParamRequest
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
     * @param Request - QueryDomainByParamRequest
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
     * @param Request - QueryInvalidAddressRequest
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
     * @param Request - QueryInvalidAddressRequest
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
     * Query the list of sending addresses.
     *
     * @param Request - QueryMailAddressByParamRequest
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
     * Query the list of sending addresses.
     *
     * @param Request - QueryMailAddressByParamRequest
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
     * @param Request - QueryReceiverByParamRequest
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
     * @param Request - QueryReceiverByParamRequest
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
     * @param Request - QueryReceiverDetailRequest
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
     * @param Request - QueryReceiverDetailRequest
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
     * @param Request - QueryTagByParamRequest
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
     * @param Request - QueryTagByParamRequest
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
     * Query task list.
     *
     * @param Request - QueryTaskByParamRequest
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
     * Query task list.
     *
     * @param Request - QueryTaskByParamRequest
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
     * 查询模板信息.
     *
     * @param Request - QueryTemplateByParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTemplateByParamResponse
     *
     * @param QueryTemplateByParamRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTemplateByParamResponse
     */
    public function queryTemplateByParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromType) {
            @$query['FromType'] = $request->fromType;
        }

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
            'action' => 'QueryTemplateByParam',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTemplateByParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询模板信息.
     *
     * @param Request - QueryTemplateByParamRequest
     *
     * @returns QueryTemplateByParamResponse
     *
     * @param QueryTemplateByParamRequest $request
     *
     * @return QueryTemplateByParamResponse
     */
    public function queryTemplateByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTemplateByParamWithOptions($request, $runtime);
    }

    /**
     * 删除用户无效地址
     *
     * @param Request - RemoveUserSuppressionRequest
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
     * @param Request - RemoveUserSuppressionRequest
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
     * @param Request - SaveReceiverDetailRequest
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
        if (null !== $request->customDetail) {
            @$query['CustomDetail'] = $request->customDetail;
        }

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
     * @param Request - SaveReceiverDetailRequest
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
     * @param Request - SendTestByTemplateRequest
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

        if (null !== $request->templateParams) {
            @$query['TemplateParams'] = $request->templateParams;
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
     * @param Request - SendTestByTemplateRequest
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
     * 提交批量校验任务
     *
     * @param Request - SendValidateFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendValidateFileResponse
     *
     * @param SendValidateFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendValidateFileResponse
     */
    public function sendValidateFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressColumn) {
            @$query['AddressColumn'] = $request->addressColumn;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->hasHeaderRow) {
            @$query['HasHeaderRow'] = $request->hasHeaderRow;
        }

        if (null !== $request->removeDuplicate) {
            @$query['RemoveDuplicate'] = $request->removeDuplicate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendValidateFile',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendValidateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交批量校验任务
     *
     * @param Request - SendValidateFileRequest
     *
     * @returns SendValidateFileResponse
     *
     * @param SendValidateFileRequest $request
     *
     * @return SendValidateFileResponse
     */
    public function sendValidateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendValidateFileWithOptions($request, $runtime);
    }

    /**
     * @param SendValidateFileAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SendValidateFileResponse
     */
    public function sendValidateFileAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
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
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
            'query' => Utils::query($authRequest),
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
        $sendValidateFileReq = new SendValidateFileRequest([]);
        Utils::convert($request, $sendValidateFileReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $sendValidateFileReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->sendValidateFileWithOptions($sendValidateFileReq, $runtime);
    }

    /**
     * Retrieve Sending Data under Specified Conditions.
     *
     * @param Request - SenderStatisticsByTagNameAndBatchIDRequest
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
     * @param Request - SenderStatisticsByTagNameAndBatchIDRequest
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
     * @param Request - SenderStatisticsDetailByParamRequest
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

        if (null !== $request->configSetId) {
            @$query['ConfigSetId'] = $request->configSetId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ipPoolId) {
            @$query['IpPoolId'] = $request->ipPoolId;
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
     * @param Request - SenderStatisticsDetailByParamRequest
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
     * @param Request - SetSuppressionListLevelRequest
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
     * @param Request - SetSuppressionListLevelRequest
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
     * @param tmpReq - SingleSendMailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SingleSendMailResponse
     *
     * @param SingleSendMailRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return SingleSendMailResponse
     */
    public function singleSendMailWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SingleSendMailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->template) {
            $request->templateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }

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

        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->addressType) {
            @$body['AddressType'] = $request->addressType;
        }

        if (null !== $request->attachments) {
            @$body['Attachments'] = $request->attachments;
        }

        if (null !== $request->clickTrace) {
            @$body['ClickTrace'] = $request->clickTrace;
        }

        if (null !== $request->fromAlias) {
            @$body['FromAlias'] = $request->fromAlias;
        }

        if (null !== $request->headers) {
            @$body['Headers'] = $request->headers;
        }

        if (null !== $request->htmlBody) {
            @$body['HtmlBody'] = $request->htmlBody;
        }

        if (null !== $request->ipPoolId) {
            @$body['IpPoolId'] = $request->ipPoolId;
        }

        if (null !== $request->replyAddress) {
            @$body['ReplyAddress'] = $request->replyAddress;
        }

        if (null !== $request->replyAddressAlias) {
            @$body['ReplyAddressAlias'] = $request->replyAddressAlias;
        }

        if (null !== $request->replyToAddress) {
            @$body['ReplyToAddress'] = $request->replyToAddress;
        }

        if (null !== $request->subject) {
            @$body['Subject'] = $request->subject;
        }

        if (null !== $request->tagName) {
            @$body['TagName'] = $request->tagName;
        }

        if (null !== $request->templateShrink) {
            @$body['Template'] = $request->templateShrink;
        }

        if (null !== $request->textBody) {
            @$body['TextBody'] = $request->textBody;
        }

        if (null !== $request->toAddress) {
            @$body['ToAddress'] = $request->toAddress;
        }

        if (null !== $request->unSubscribeFilterLevel) {
            @$body['UnSubscribeFilterLevel'] = $request->unSubscribeFilterLevel;
        }

        if (null !== $request->unSubscribeLinkType) {
            @$body['UnSubscribeLinkType'] = $request->unSubscribeLinkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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
     * @param Request - SingleSendMailRequest
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
     * @param SingleSendMailAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SingleSendMailResponse
     */
    public function singleSendMailAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
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
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
            'query' => Utils::query($authRequest),
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
        Utils::convert($request, $singleSendMailReq);
        if (null !== $request->attachments) {
            $i0 = 0;

            foreach ($request->attachments as $item0) {
                if (null !== $item0->attachmentUrlObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->attachmentUrlObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = [
                        'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                        'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                        'policy' => @$authResponseBody['EncodedPolicy'],
                        'Signature' => @$authResponseBody['Signature'],
                        'key' => @$authResponseBody['ObjectKey'],
                        'file' => $fileObj,
                        'success_action_status' => '201',
                    ];
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
                    $tmpObj = @$singleSendMailReq->attachments[$i0];
                    $tmpObj->attachmentUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->singleSendMailWithOptions($singleSendMailReq, $runtime);
    }

    /**
     * Lift sending restrictions due to unsubscription, reporting, etc.
     *
     * @param Request - UnblockSendingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnblockSendingResponse
     *
     * @param UnblockSendingRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnblockSendingResponse
     */
    public function unblockSendingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blockEmail) {
            @$query['BlockEmail'] = $request->blockEmail;
        }

        if (null !== $request->blockType) {
            @$query['BlockType'] = $request->blockType;
        }

        if (null !== $request->senderEmail) {
            @$query['SenderEmail'] = $request->senderEmail;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * Lift sending restrictions due to unsubscription, reporting, etc.
     *
     * @param Request - UnblockSendingRequest
     *
     * @returns UnblockSendingResponse
     *
     * @param UnblockSendingRequest $request
     *
     * @return UnblockSendingResponse
     */
    public function unblockSending($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unblockSendingWithOptions($request, $runtime);
    }

    /**
     * Update IP Protection API.
     *
     * @param Request - UpdateIpProtectionRequest
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
     * @param Request - UpdateIpProtectionRequest
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
     * @param Request - UpdateUserRequest
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

    /**
     * 校验电子邮件地址
     *
     * @param Request - ValidateEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateEmailResponse
     *
     * @param ValidateEmailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ValidateEmailResponse
     */
    public function validateEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkGraylist) {
            @$query['CheckGraylist'] = $request->checkGraylist;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateEmail',
            'version' => '2015-11-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验电子邮件地址
     *
     * @param Request - ValidateEmailRequest
     *
     * @returns ValidateEmailResponse
     *
     * @param ValidateEmailRequest $request
     *
     * @return ValidateEmailResponse
     */
    public function validateEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateEmailWithOptions($request, $runtime);
    }
}
