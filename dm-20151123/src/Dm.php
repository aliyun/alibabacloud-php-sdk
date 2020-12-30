<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dm\V20151123\Models\AddIpfilterRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\AddIpfilterResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveMailTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveMailTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveReplyMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveReplyMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveSmsTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveSmsTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ApproveTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\BatchSendMailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\BatchSendMailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckInvalidAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckInvalidAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckReplyToMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CheckReplyToMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateDayuRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateDayuResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateReceiverRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateReceiverResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateSignRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateSignResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateTagRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateTagResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\CreateTemplateResponse;
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
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteSignRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteSignResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteTagRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteTagResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescAccountSummary2Request;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescAccountSummary2Response;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescAccountSummaryRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescAccountSummaryResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\DescTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\EnableAccountRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\EnableAccountResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetAccountListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetAccountListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpProtectionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetIpProtectionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetMailAddressMsgCallBackUrlRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetMailAddressMsgCallBackUrlResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetRegionListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetRegionListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetSenderAddressListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetSenderAddressListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListByMailFromAndTagNameRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListByMailFromAndTagNameResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\MigrateMarketRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\MigrateMarketResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyAccountNotificationRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyAccountNotificationResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyMailAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyMailAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyPWByDomainRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyPWByDomainResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifySenderAddressNotificationRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifySenderAddressNotificationResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyTagRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyTagResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\ModifyTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryDomainByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryDomainByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryInvalidAddressRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryInvalidAddressResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverDetailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverDetailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QuerySignByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QuerySignByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QuerySmsStatisticsRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QuerySmsStatisticsResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTagByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTagByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTaskByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTemplateByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTemplateByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SaveReceiverDetailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SaveReceiverDetailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsByTagNameAndBatchIDRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsByTagNameAndBatchIDResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SendTestByTemplateRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SendTestByTemplateResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendSmsRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendSmsResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateDomainTrackNameRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateDomainTrackNameResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateIpProtectionRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateIpProtectionResponse;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateMailAddressMsgCallBackUrlRequest;
use AlibabaCloud\SDK\Dm\V20151123\Models\UpdateMailAddressMsgCallBackUrlResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param AddIpfilterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddIpfilterResponse
     */
    public function addIpfilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddIpfilterResponse::fromMap($this->doRPCRequest('AddIpfilter', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ApproveMailTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ApproveMailTemplateResponse
     */
    public function approveMailTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApproveMailTemplateResponse::fromMap($this->doRPCRequest('ApproveMailTemplate', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApproveMailTemplateRequest $request
     *
     * @return ApproveMailTemplateResponse
     */
    public function approveMailTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveMailTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ApproveReplyMailAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApproveReplyMailAddressResponse
     */
    public function approveReplyMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApproveReplyMailAddressResponse::fromMap($this->doRPCRequest('ApproveReplyMailAddress', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ApproveSmsTemplateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ApproveSmsTemplateResponse
     */
    public function approveSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApproveSmsTemplateResponse::fromMap($this->doRPCRequest('ApproveSmsTemplate', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApproveSmsTemplateRequest $request
     *
     * @return ApproveSmsTemplateResponse
     */
    public function approveSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ApproveTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApproveTemplateResponse
     */
    public function approveTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApproveTemplateResponse::fromMap($this->doRPCRequest('ApproveTemplate', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApproveTemplateRequest $request
     *
     * @return ApproveTemplateResponse
     */
    public function approveTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BatchSendMailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BatchSendMailResponse
     */
    public function batchSendMailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSendMailResponse::fromMap($this->doRPCRequest('BatchSendMail', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CheckDomainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDomainResponse
     */
    public function checkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDomainResponse::fromMap($this->doRPCRequest('CheckDomain', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CheckInvalidAddressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckInvalidAddressResponse
     */
    public function checkInvalidAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckInvalidAddressResponse::fromMap($this->doRPCRequest('CheckInvalidAddress', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckInvalidAddressRequest $request
     *
     * @return CheckInvalidAddressResponse
     */
    public function checkInvalidAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkInvalidAddressWithOptions($request, $runtime);
    }

    /**
     * @param CheckReplyToMailAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckReplyToMailAddressResponse
     */
    public function checkReplyToMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckReplyToMailAddressResponse::fromMap($this->doRPCRequest('CheckReplyToMailAddress', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateDayuRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateDayuResponse
     */
    public function createDayuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDayuResponse::fromMap($this->doRPCRequest('CreateDayu', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDayuRequest $request
     *
     * @return CreateDayuResponse
     */
    public function createDayu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDayuWithOptions($request, $runtime);
    }

    /**
     * @param CreateDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDomainResponse::fromMap($this->doRPCRequest('CreateDomain', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateMailAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMailAddressResponse
     */
    public function createMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMailAddressResponse::fromMap($this->doRPCRequest('CreateMailAddress', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateReceiverRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateReceiverResponse
     */
    public function createReceiverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateReceiverResponse::fromMap($this->doRPCRequest('CreateReceiver', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateSignRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateSignResponse
     */
    public function createSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSignResponse::fromMap($this->doRPCRequest('CreateSign', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSignRequest $request
     *
     * @return CreateSignResponse
     */
    public function createSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSignWithOptions($request, $runtime);
    }

    /**
     * @param CreateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTagResponse::fromMap($this->doRPCRequest('CreateTag', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTemplateResponse::fromMap($this->doRPCRequest('CreateTemplate', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainResponse::fromMap($this->doRPCRequest('DeleteDomain', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteInvalidAddressRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteInvalidAddressResponse
     */
    public function deleteInvalidAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInvalidAddressResponse::fromMap($this->doRPCRequest('DeleteInvalidAddress', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteIpfilterByEdmIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteIpfilterByEdmIdResponse
     */
    public function deleteIpfilterByEdmIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpfilterByEdmIdResponse::fromMap($this->doRPCRequest('DeleteIpfilterByEdmId', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteMailAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMailAddressResponse
     */
    public function deleteMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMailAddressResponse::fromMap($this->doRPCRequest('DeleteMailAddress', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteReceiverRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteReceiverResponse
     */
    public function deleteReceiverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteReceiverResponse::fromMap($this->doRPCRequest('DeleteReceiver', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteReceiverDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteReceiverDetailResponse
     */
    public function deleteReceiverDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteReceiverDetailResponse::fromMap($this->doRPCRequest('DeleteReceiverDetail', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteSignRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteSignResponse
     */
    public function deleteSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSignResponse::fromMap($this->doRPCRequest('DeleteSign', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSignRequest $request
     *
     * @return DeleteSignResponse
     */
    public function deleteSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSignWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTagResponse::fromMap($this->doRPCRequest('DeleteTag', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTemplateResponse::fromMap($this->doRPCRequest('DeleteTemplate', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescAccountSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescAccountSummaryResponse
     */
    public function descAccountSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescAccountSummaryResponse::fromMap($this->doRPCRequest('DescAccountSummary', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescAccountSummary2Request $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescAccountSummary2Response
     */
    public function descAccountSummary2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescAccountSummary2Response::fromMap($this->doRPCRequest('DescAccountSummary2', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescAccountSummary2Request $request
     *
     * @return DescAccountSummary2Response
     */
    public function descAccountSummary2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descAccountSummary2WithOptions($request, $runtime);
    }

    /**
     * @param DescDomainRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DescDomainResponse
     */
    public function descDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescDomainResponse::fromMap($this->doRPCRequest('DescDomain', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescTemplateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescTemplateResponse
     */
    public function descTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescTemplateResponse::fromMap($this->doRPCRequest('DescTemplate', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param EnableAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EnableAccountResponse
     */
    public function enableAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableAccountResponse::fromMap($this->doRPCRequest('EnableAccount', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableAccountRequest $request
     *
     * @return EnableAccountResponse
     */
    public function enableAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAccountWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAccountListResponse
     */
    public function getAccountListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAccountListResponse::fromMap($this->doRPCRequest('GetAccountList', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAccountListRequest $request
     *
     * @return GetAccountListResponse
     */
    public function getAccountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountListWithOptions($request, $runtime);
    }

    /**
     * @param GetIpfilterListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetIpfilterListResponse
     */
    public function getIpfilterListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIpfilterListResponse::fromMap($this->doRPCRequest('GetIpfilterList', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetIpProtectionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetIpProtectionResponse
     */
    public function getIpProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIpProtectionResponse::fromMap($this->doRPCRequest('GetIpProtection', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetMailAddressMsgCallBackUrlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetMailAddressMsgCallBackUrlResponse
     */
    public function getMailAddressMsgCallBackUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMailAddressMsgCallBackUrlResponse::fromMap($this->doRPCRequest('GetMailAddressMsgCallBackUrl', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMailAddressMsgCallBackUrlRequest $request
     *
     * @return GetMailAddressMsgCallBackUrlResponse
     */
    public function getMailAddressMsgCallBackUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMailAddressMsgCallBackUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetRegionListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRegionListResponse
     */
    public function getRegionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRegionListResponse::fromMap($this->doRPCRequest('GetRegionList', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRegionListRequest $request
     *
     * @return GetRegionListResponse
     */
    public function getRegionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegionListWithOptions($request, $runtime);
    }

    /**
     * @param GetSenderAddressListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSenderAddressListResponse
     */
    public function getSenderAddressListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSenderAddressListResponse::fromMap($this->doRPCRequest('GetSenderAddressList', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSenderAddressListRequest $request
     *
     * @return GetSenderAddressListResponse
     */
    public function getSenderAddressList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSenderAddressListWithOptions($request, $runtime);
    }

    /**
     * @param GetTrackListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTrackListResponse
     */
    public function getTrackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTrackListResponse::fromMap($this->doRPCRequest('GetTrackList', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetTrackListByMailFromAndTagNameRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetTrackListByMailFromAndTagNameResponse
     */
    public function getTrackListByMailFromAndTagNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTrackListByMailFromAndTagNameResponse::fromMap($this->doRPCRequest('GetTrackListByMailFromAndTagName', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param MigrateMarketRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return MigrateMarketResponse
     */
    public function migrateMarketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MigrateMarketResponse::fromMap($this->doRPCRequest('MigrateMarket', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MigrateMarketRequest $request
     *
     * @return MigrateMarketResponse
     */
    public function migrateMarket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateMarketWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountNotificationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyAccountNotificationResponse
     */
    public function modifyAccountNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountNotificationResponse::fromMap($this->doRPCRequest('ModifyAccountNotification', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAccountNotificationRequest $request
     *
     * @return ModifyAccountNotificationResponse
     */
    public function modifyAccountNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountNotificationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMailAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyMailAddressResponse
     */
    public function modifyMailAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMailAddressResponse::fromMap($this->doRPCRequest('ModifyMailAddress', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyPWByDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyPWByDomainResponse
     */
    public function modifyPWByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPWByDomainResponse::fromMap($this->doRPCRequest('ModifyPWByDomain', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifySenderAddressNotificationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifySenderAddressNotificationResponse
     */
    public function modifySenderAddressNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySenderAddressNotificationResponse::fromMap($this->doRPCRequest('ModifySenderAddressNotification', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySenderAddressNotificationRequest $request
     *
     * @return ModifySenderAddressNotificationResponse
     */
    public function modifySenderAddressNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySenderAddressNotificationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyTagResponse
     */
    public function modifyTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTagResponse::fromMap($this->doRPCRequest('ModifyTag', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyTemplateResponse
     */
    public function modifyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTemplateResponse::fromMap($this->doRPCRequest('ModifyTemplate', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyTemplateRequest $request
     *
     * @return ModifyTemplateResponse
     */
    public function modifyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainByParamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryDomainByParamResponse
     */
    public function queryDomainByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDomainByParamResponse::fromMap($this->doRPCRequest('QueryDomainByParam', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryInvalidAddressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryInvalidAddressResponse
     */
    public function queryInvalidAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryInvalidAddressResponse::fromMap($this->doRPCRequest('QueryInvalidAddress', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryReceiverByParamRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryReceiverByParamResponse
     */
    public function queryReceiverByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryReceiverByParamResponse::fromMap($this->doRPCRequest('QueryReceiverByParam', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryReceiverDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryReceiverDetailResponse
     */
    public function queryReceiverDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryReceiverDetailResponse::fromMap($this->doRPCRequest('QueryReceiverDetail', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QuerySignByParamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySignByParamResponse
     */
    public function querySignByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySignByParamResponse::fromMap($this->doRPCRequest('QuerySignByParam', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySignByParamRequest $request
     *
     * @return QuerySignByParamResponse
     */
    public function querySignByParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySignByParamWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsStatisticsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySmsStatisticsResponse
     */
    public function querySmsStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySmsStatisticsResponse::fromMap($this->doRPCRequest('QuerySmsStatistics', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySmsStatisticsRequest $request
     *
     * @return QuerySmsStatisticsResponse
     */
    public function querySmsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTagByParamRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTagByParamResponse
     */
    public function queryTagByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTagByParamResponse::fromMap($this->doRPCRequest('QueryTagByParam', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryTaskByParamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryTaskByParamResponse
     */
    public function queryTaskByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskByParamResponse::fromMap($this->doRPCRequest('QueryTaskByParam', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryTemplateByParamRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTemplateByParamResponse
     */
    public function queryTemplateByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTemplateByParamResponse::fromMap($this->doRPCRequest('QueryTemplateByParam', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SaveReceiverDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SaveReceiverDetailResponse
     */
    public function saveReceiverDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveReceiverDetailResponse::fromMap($this->doRPCRequest('SaveReceiverDetail', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SenderStatisticsByTagNameAndBatchIDRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SenderStatisticsByTagNameAndBatchIDResponse
     */
    public function senderStatisticsByTagNameAndBatchIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SenderStatisticsByTagNameAndBatchIDResponse::fromMap($this->doRPCRequest('SenderStatisticsByTagNameAndBatchID', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SenderStatisticsDetailByParamRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SenderStatisticsDetailByParamResponse
     */
    public function senderStatisticsDetailByParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SenderStatisticsDetailByParamResponse::fromMap($this->doRPCRequest('SenderStatisticsDetailByParam', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SendTestByTemplateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SendTestByTemplateResponse
     */
    public function sendTestByTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendTestByTemplateResponse::fromMap($this->doRPCRequest('SendTestByTemplate', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SingleSendMailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SingleSendMailResponse
     */
    public function singleSendMailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SingleSendMailResponse::fromMap($this->doRPCRequest('SingleSendMail', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SingleSendSmsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SingleSendSmsResponse
     */
    public function singleSendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SingleSendSmsResponse::fromMap($this->doRPCRequest('SingleSendSms', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SingleSendSmsRequest $request
     *
     * @return SingleSendSmsResponse
     */
    public function singleSendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleSendSmsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDomainTrackNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDomainTrackNameResponse
     */
    public function updateDomainTrackNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDomainTrackNameResponse::fromMap($this->doRPCRequest('UpdateDomainTrackName', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDomainTrackNameRequest $request
     *
     * @return UpdateDomainTrackNameResponse
     */
    public function updateDomainTrackName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainTrackNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIpProtectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateIpProtectionResponse
     */
    public function updateIpProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateIpProtectionResponse::fromMap($this->doRPCRequest('UpdateIpProtection', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UpdateMailAddressMsgCallBackUrlRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateMailAddressMsgCallBackUrlResponse
     */
    public function updateMailAddressMsgCallBackUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMailAddressMsgCallBackUrlResponse::fromMap($this->doRPCRequest('UpdateMailAddressMsgCallBackUrl', '2015-11-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMailAddressMsgCallBackUrlRequest $request
     *
     * @return UpdateMailAddressMsgCallBackUrlResponse
     */
    public function updateMailAddressMsgCallBackUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMailAddressMsgCallBackUrlWithOptions($request, $runtime);
    }
}
