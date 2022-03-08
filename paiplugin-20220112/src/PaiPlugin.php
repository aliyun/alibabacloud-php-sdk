<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateSignatureRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetMessageConfigResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetUserResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessageMetricsRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessageMetricsResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessagesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessagesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSignaturesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSignaturesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SendMessageRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SendMessageResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsReportRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsReportResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsUpRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsUpResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\UpdateReportUrlRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\UpdateReportUrlResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\UpdateUploadUrlRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\UpdateUploadUrlResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class PaiPlugin extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paiplugin', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 注册签名。
     *
     * @param CreateSignatureRequest $request
     *
     * @return CreateSignatureResponse
     */
    public function createSignature($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSignatureWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSignatureRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSignatureResponse
     */
    public function createSignatureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSignature',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/signatures',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册模板。
     *
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->signature)) {
            $body['Signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $body['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/templates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除签名。
     *
     * @param string $Id
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignature($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSignatureWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignatureWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSignature',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/signatures/' . $Id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模板
     *
     * @param string $Id
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/templates/' . $Id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取短信配置。
     *
     * @return GetMessageConfigResponse
     */
    public function getMessageConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMessageConfigWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMessageConfigResponse
     */
    public function getMessageConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetMessageConfig',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/users/messageConfig',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMessageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取签名详情。
     *
     * @param string $Id
     *
     * @return GetSignatureResponse
     */
    public function getSignature($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSignatureWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSignatureResponse
     */
    public function getSignatureWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSignature',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/signatures/' . $Id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取模板详情。
     *
     * @param string $Id
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/templates/' . $Id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取账号状态。
     *
     * @return GetUserResponse
     */
    public function getUser()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/users',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取短信发送统计列表。
     *
     * @param ListMessageMetricsRequest $request
     *
     * @return ListMessageMetricsResponse
     */
    public function listMessageMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMessageMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMessageMetricsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMessageMetricsResponse
     */
    public function listMessageMetricsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scheduleId)) {
            $query['ScheduleId'] = $request->scheduleId;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['Signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $query['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMessageMetrics',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/messages/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMessageMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询短信发送详情列表。
     *
     * @param ListMessagesRequest $request
     *
     * @return ListMessagesResponse
     */
    public function listMessages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMessagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMessagesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMessagesResponse
     */
    public function listMessagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datetime)) {
            $query['Datetime'] = $request->datetime;
        }
        if (!Utils::isUnset($request->errorCode)) {
            $query['ErrorCode'] = $request->errorCode;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->scheduleId)) {
            $query['ScheduleId'] = $request->scheduleId;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['Signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $query['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMessages',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/messages',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取签名列表。
     *
     * @param ListSignaturesRequest $request
     *
     * @return ListSignaturesResponse
     */
    public function listSignatures($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSignaturesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSignaturesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSignaturesResponse
     */
    public function listSignaturesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSignatures',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/signatures',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSignaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取模板列表。
     *
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送短信。
     *
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SendMessageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->outIds)) {
            $body['OutIds'] = $request->outIds;
        }
        if (!Utils::isUnset($request->phoneNumbers)) {
            $body['PhoneNumbers'] = $request->phoneNumbers;
        }
        if (!Utils::isUnset($request->scheduleId)) {
            $body['ScheduleId'] = $request->scheduleId;
        }
        if (!Utils::isUnset($request->signName)) {
            $body['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $body['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->smsUpExtendCodes)) {
            $body['SmsUpExtendCodes'] = $request->smsUpExtendCodes;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateParams)) {
            $body['TemplateParams'] = $request->templateParams;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendMessage',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/messages',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 短信回执。
     *
     * @param SmsReportRequest $request
     *
     * @return SmsReportResponse
     */
    public function smsReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->smsReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SmsReportRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return SmsReportResponse
     */
    public function smsReportWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'SmsReport',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/recall/report',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SmsReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 短信上行。
     *
     * @param SmsUpRequest $request
     *
     * @return SmsUpResponse
     */
    public function smsUp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->smsUpWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SmsUpRequest   $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SmsUpResponse
     */
    public function smsUpWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'SmsUp',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/recall/up',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SmsUpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新回执Url。
     *
     * @param UpdateReportUrlRequest $request
     *
     * @return UpdateReportUrlResponse
     */
    public function updateReportUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateReportUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateReportUrlRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateReportUrlResponse
     */
    public function updateReportUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateReportUrl',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/users/reportUrl',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateReportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新上行Url。
     *
     * @param UpdateUploadUrlRequest $request
     *
     * @return UpdateUploadUrlResponse
     */
    public function updateUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUploadUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateUploadUrlRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUploadUrlResponse
     */
    public function updateUploadUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUploadUrl',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/users/uploadUrl',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
