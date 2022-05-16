<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateCampaignRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateCampaignResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateGroupRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateGroupResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateInferenceJobRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateInferenceJobResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateScheduleRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateScheduleResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateSignatureRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateTrainingJobRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateTrainingJobResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteCampaignResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteInferenceJobResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteScheduleResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\DeleteTrainingJobResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetAlgorithmResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetCampaignResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetGroupResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetInferenceJobResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetMessageConfigResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetScheduleResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetTrainingJobResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetUserResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListAlgorithmsRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListAlgorithmsResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListCampaignsRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListCampaignsResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListGroupsRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListGroupsResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListInferenceJobsRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListInferenceJobsResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessageMetricsRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessageMetricsResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessagesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListMessagesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSchedulesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSchedulesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSignaturesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSignaturesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTrainingJobsRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTrainingJobsResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SendMessageRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SendMessageResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsReportRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsReportResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsUpRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\SmsUpResponse;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\UpdateCampaignRequest;
use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\UpdateCampaignResponse;
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
     * 注册运营活动。
     *
     * @param CreateCampaignRequest $request
     *
     * @return CreateCampaignResponse
     */
    public function createCampaign($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCampaignWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateCampaignRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCampaignResponse
     */
    public function createCampaignWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCampaign',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/campaigns',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册人群。
     *
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->algorithm)) {
            $body['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->inferenceJobId)) {
            $body['InferenceJobId'] = $request->inferenceJobId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->project)) {
            $body['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->table)) {
            $body['Table'] = $request->table;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册预测任务。
     *
     * @param CreateInferenceJobRequest $request
     *
     * @return CreateInferenceJobResponse
     */
    public function createInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInferenceJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateInferenceJobRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateInferenceJobResponse
     */
    public function createInferenceJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->algorithm)) {
            $body['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->campaignId)) {
            $body['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->dataPath)) {
            $body['DataPath'] = $request->dataPath;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->targetPath)) {
            $body['TargetPath'] = $request->targetPath;
        }
        if (!Utils::isUnset($request->trainingJobId)) {
            $body['TrainingJobId'] = $request->trainingJobId;
        }
        if (!Utils::isUnset($request->userConfig)) {
            $body['UserConfig'] = $request->userConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInferenceJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/inference/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册触达计划。
     *
     * @param CreateScheduleRequest $request
     *
     * @return CreateScheduleResponse
     */
    public function createSchedule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateScheduleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScheduleResponse
     */
    public function createScheduleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeTime)) {
            $body['ExecuteTime'] = $request->executeTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->repeatCycle)) {
            $body['RepeatCycle'] = $request->repeatCycle;
        }
        if (!Utils::isUnset($request->repeatCycleUnit)) {
            $body['RepeatCycleUnit'] = $request->repeatCycleUnit;
        }
        if (!Utils::isUnset($request->repeatTimes)) {
            $body['RepeatTimes'] = $request->repeatTimes;
        }
        if (!Utils::isUnset($request->signName)) {
            $body['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $body['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSchedule',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/schedules',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 注册训练任务。
     *
     * @param CreateTrainingJobRequest $request
     *
     * @return CreateTrainingJobResponse
     */
    public function createTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrainingJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTrainingJobRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTrainingJobResponse
     */
    public function createTrainingJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->algorithm)) {
            $body['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->campaignId)) {
            $body['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->dataPath)) {
            $body['DataPath'] = $request->dataPath;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->userConfig)) {
            $body['UserConfig'] = $request->userConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrainingJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/training/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除运营活动.
     *
     * @param string $Id
     *
     * @return DeleteCampaignResponse
     */
    public function deleteCampaign($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCampaignWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCampaignResponse
     */
    public function deleteCampaignWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteCampaign',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/campaigns/' . $Id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除人群.
     *
     * @param string $Id
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/groups/' . $Id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除预测任务。
     *
     * @param string $Id
     *
     * @return DeleteInferenceJobResponse
     */
    public function deleteInferenceJob($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInferenceJobWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInferenceJobResponse
     */
    public function deleteInferenceJobWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInferenceJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/inference/jobs/' . $Id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除触达计划。
     *
     * @param string $Id
     *
     * @return DeleteScheduleResponse
     */
    public function deleteSchedule($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteScheduleWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteScheduleResponse
     */
    public function deleteScheduleWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSchedule',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/schedules/' . $Id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 删除训练任务。
     *
     * @param string $Id
     *
     * @return DeleteTrainingJobResponse
     */
    public function deleteTrainingJob($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrainingJobWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTrainingJobResponse
     */
    public function deleteTrainingJobWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTrainingJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/training/jobs/' . $Id . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取算法详情。
     *
     * @param string $Id
     *
     * @return GetAlgorithmResponse
     */
    public function getAlgorithm($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAlgorithmResponse
     */
    public function getAlgorithmWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAlgorithm',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/algorithms/' . $Id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取运营活动详情。
     *
     * @param string $Id
     *
     * @return GetCampaignResponse
     */
    public function getCampaign($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCampaignWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCampaignResponse
     */
    public function getCampaignWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetCampaign',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/campaigns/' . $Id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取人群详情。
     *
     * @param string $Id
     *
     * @return GetGroupResponse
     */
    public function getGroup($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/groups/' . $Id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测任务详情。
     *
     * @param string $Id
     *
     * @return GetInferenceJobResponse
     */
    public function getInferenceJob($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInferenceJobWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInferenceJobResponse
     */
    public function getInferenceJobWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInferenceJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/inference/jobs/' . $Id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 获取触达计划详情。
     *
     * @param string $Id
     *
     * @return GetScheduleResponse
     */
    public function getSchedule($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScheduleWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetScheduleResponse
     */
    public function getScheduleWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSchedule',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/schedules/' . $Id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 获取训练任务详情。
     *
     * @param string $Id
     *
     * @return GetTrainingJobResponse
     */
    public function getTrainingJob($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrainingJobWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTrainingJobResponse
     */
    public function getTrainingJobWithOptions($Id, $headers, $runtime)
    {
        $Id  = OpenApiUtilClient::getEncodeParam($Id);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTrainingJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/training/jobs/' . $Id . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 获取算法列表。
     *
     * @param ListAlgorithmsRequest $request
     *
     * @return ListAlgorithmsResponse
     */
    public function listAlgorithms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlgorithmsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAlgorithmsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAlgorithmsResponse
     */
    public function listAlgorithmsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlgorithms',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/algorithms',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlgorithmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取运营活动列表。
     *
     * @param ListCampaignsRequest $request
     *
     * @return ListCampaignsResponse
     */
    public function listCampaigns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCampaignsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCampaignsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListCampaignsResponse
     */
    public function listCampaignsWithOptions($request, $headers, $runtime)
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
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCampaigns',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/campaigns',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCampaignsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取人群列表。
     *
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListGroupsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $headers, $runtime)
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
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/groups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测任务列表。
     *
     * @param ListInferenceJobsRequest $request
     *
     * @return ListInferenceJobsResponse
     */
    public function listInferenceJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInferenceJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInferenceJobsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListInferenceJobsResponse
     */
    public function listInferenceJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
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
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInferenceJobs',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/inference/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInferenceJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取短信发送统计列表。
     * 获取短信发送统计数据，可按指定条件获取分类别详细数据，返回数据按日期顺序排列，发送统计为空的日期默认不返回。
     * 发送数据在48小时内会随实际短信发送状态不断更新，最终数据以48小时后数据为准。
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
     * 获取触达计划列表。
     *
     * @param ListSchedulesRequest $request
     *
     * @return ListSchedulesResponse
     */
    public function listSchedules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSchedulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSchedulesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSchedulesResponse
     */
    public function listSchedulesWithOptions($request, $headers, $runtime)
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
            'action'      => 'ListSchedules',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/schedules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 获取训练任务列表。
     *
     * @param ListTrainingJobsRequest $request
     *
     * @return ListTrainingJobsResponse
     */
    public function listTrainingJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTrainingJobsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTrainingJobsResponse
     */
    public function listTrainingJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
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
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrainingJobs',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/training/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTrainingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 更新运营活动.
     *
     * @param string                $Id
     * @param UpdateCampaignRequest $request
     *
     * @return UpdateCampaignResponse
     */
    public function updateCampaign($Id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCampaignWithOptions($Id, $request, $headers, $runtime);
    }

    /**
     * @param string                $Id
     * @param UpdateCampaignRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCampaignResponse
     */
    public function updateCampaignWithOptions($Id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $Id   = OpenApiUtilClient::getEncodeParam($Id);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCampaign',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/campaigns/' . $Id . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
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
