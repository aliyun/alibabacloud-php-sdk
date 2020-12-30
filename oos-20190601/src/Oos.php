<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Oos\V20190601\Models\CancelExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CancelExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateSecretParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateSecretParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateTemplateShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteExecutionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteExecutionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteSecretParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteSecretParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteTemplatesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DeleteTemplatesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GenerateExecutionPolicyRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GenerateExecutionPolicyResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetExecutionTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetExecutionTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersByPathRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersByPathResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersByPathRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersByPathResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetServiceSettingsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListActionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListActionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInventoryEntriesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInventoryEntriesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParametersRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParametersResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParameterVersionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListParameterVersionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListResourceExecutionStatusRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListResourceExecutionStatusResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParametersRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParametersResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParameterVersionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParameterVersionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplatesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplateVersionsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplateVersionsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\NotifyExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\NotifyExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\SearchInventoryRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\SearchInventoryResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\SetServiceSettingsRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\SetServiceSettingsResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\TagResourcesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\TriggerExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\TriggerExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateExecutionRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateExecutionResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateInstanceInformationRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateInstanceInformationResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateSecretParameterRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateSecretParameterResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateTemplateShrinkRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ValidateTemplateContentRequest;
use AlibabaCloud\SDK\Oos\V20190601\Models\ValidateTemplateContentResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Oos extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('oos', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelExecutionResponse
     */
    public function cancelExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelExecutionResponse::fromMap($this->doRPCRequest('CancelExecution', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelExecutionRequest $request
     *
     * @return CancelExecutionResponse
     */
    public function cancelExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelExecutionWithOptions($request, $runtime);
    }

    /**
     * @param CreateParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateParameterResponse
     */
    public function createParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateParameterResponse::fromMap($this->doRPCRequest('CreateParameter', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateParameterRequest $request
     *
     * @return CreateParameterResponse
     */
    public function createParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParameterWithOptions($request, $runtime);
    }

    /**
     * @param CreateSecretParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSecretParameterResponse
     */
    public function createSecretParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSecretParameterResponse::fromMap($this->doRPCRequest('CreateSecretParameter', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSecretParameterRequest $request
     *
     * @return CreateSecretParameterResponse
     */
    public function createSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecretParameterWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTemplateResponse::fromMap($this->doRPCRequest('CreateTemplate', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteExecutionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteExecutionsResponse
     */
    public function deleteExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteExecutionsResponse::fromMap($this->doRPCRequest('DeleteExecutions', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteExecutionsRequest $request
     *
     * @return DeleteExecutionsResponse
     */
    public function deleteExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteParameterResponse
     */
    public function deleteParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteParameterResponse::fromMap($this->doRPCRequest('DeleteParameter', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteParameterRequest $request
     *
     * @return DeleteParameterResponse
     */
    public function deleteParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParameterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecretParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecretParameterResponse
     */
    public function deleteSecretParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSecretParameterResponse::fromMap($this->doRPCRequest('DeleteSecretParameter', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSecretParameterRequest $request
     *
     * @return DeleteSecretParameterResponse
     */
    public function deleteSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretParameterWithOptions($request, $runtime);
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

        return DeleteTemplateResponse::fromMap($this->doRPCRequest('DeleteTemplate', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteTemplatesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTemplatesResponse
     */
    public function deleteTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTemplatesResponse::fromMap($this->doRPCRequest('DeleteTemplates', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTemplatesRequest $request
     *
     * @return DeleteTemplatesResponse
     */
    public function deleteTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplatesWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GenerateExecutionPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateExecutionPolicyResponse
     */
    public function generateExecutionPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateExecutionPolicyResponse::fromMap($this->doRPCRequest('GenerateExecutionPolicy', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateExecutionPolicyRequest $request
     *
     * @return GenerateExecutionPolicyResponse
     */
    public function generateExecutionPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateExecutionPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetExecutionTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetExecutionTemplateResponse
     */
    public function getExecutionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetExecutionTemplateResponse::fromMap($this->doRPCRequest('GetExecutionTemplate', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetExecutionTemplateRequest $request
     *
     * @return GetExecutionTemplateResponse
     */
    public function getExecutionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecutionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetInventorySchemaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInventorySchemaResponse
     */
    public function getInventorySchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInventorySchemaResponse::fromMap($this->doRPCRequest('GetInventorySchema', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInventorySchemaRequest $request
     *
     * @return GetInventorySchemaResponse
     */
    public function getInventorySchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInventorySchemaWithOptions($request, $runtime);
    }

    /**
     * @param GetParameterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetParameterResponse
     */
    public function getParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetParameterResponse::fromMap($this->doRPCRequest('GetParameter', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetParameterRequest $request
     *
     * @return GetParameterResponse
     */
    public function getParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParameterWithOptions($request, $runtime);
    }

    /**
     * @param GetParametersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetParametersResponse
     */
    public function getParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetParametersResponse::fromMap($this->doRPCRequest('GetParameters', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetParametersRequest $request
     *
     * @return GetParametersResponse
     */
    public function getParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParametersWithOptions($request, $runtime);
    }

    /**
     * @param GetParametersByPathRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetParametersByPathResponse
     */
    public function getParametersByPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetParametersByPathResponse::fromMap($this->doRPCRequest('GetParametersByPath', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetParametersByPathRequest $request
     *
     * @return GetParametersByPathResponse
     */
    public function getParametersByPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParametersByPathWithOptions($request, $runtime);
    }

    /**
     * @param GetSecretParameterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSecretParameterResponse
     */
    public function getSecretParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSecretParameterResponse::fromMap($this->doRPCRequest('GetSecretParameter', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSecretParameterRequest $request
     *
     * @return GetSecretParameterResponse
     */
    public function getSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParameterWithOptions($request, $runtime);
    }

    /**
     * @param GetSecretParametersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSecretParametersResponse
     */
    public function getSecretParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSecretParametersResponse::fromMap($this->doRPCRequest('GetSecretParameters', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSecretParametersRequest $request
     *
     * @return GetSecretParametersResponse
     */
    public function getSecretParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParametersWithOptions($request, $runtime);
    }

    /**
     * @param GetSecretParametersByPathRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSecretParametersByPathResponse
     */
    public function getSecretParametersByPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSecretParametersByPathResponse::fromMap($this->doRPCRequest('GetSecretParametersByPath', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSecretParametersByPathRequest $request
     *
     * @return GetSecretParametersByPathResponse
     */
    public function getSecretParametersByPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretParametersByPathWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceSettingsResponse
     */
    public function getServiceSettingsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetServiceSettingsResponse::fromMap($this->doRPCRequest('GetServiceSettings', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetServiceSettingsResponse
     */
    public function getServiceSettings()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceSettingsWithOptions($runtime);
    }

    /**
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTemplateResponse::fromMap($this->doRPCRequest('GetTemplate', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListActionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListActionsResponse
     */
    public function listActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListActionsResponse::fromMap($this->doRPCRequest('ListActions', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListActionsRequest $request
     *
     * @return ListActionsResponse
     */
    public function listActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActionsWithOptions($request, $runtime);
    }

    /**
     * @param ListExecutionLogsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListExecutionLogsResponse
     */
    public function listExecutionLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListExecutionLogsResponse::fromMap($this->doRPCRequest('ListExecutionLogs', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListExecutionLogsRequest $request
     *
     * @return ListExecutionLogsResponse
     */
    public function listExecutionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListExecutionRiskyTasksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListExecutionRiskyTasksResponse
     */
    public function listExecutionRiskyTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListExecutionRiskyTasksResponse::fromMap($this->doRPCRequest('ListExecutionRiskyTasks', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListExecutionRiskyTasksRequest $request
     *
     * @return ListExecutionRiskyTasksResponse
     */
    public function listExecutionRiskyTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionRiskyTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListExecutionsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListExecutionsResponse
     */
    public function listExecutionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListExecutionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListExecutionsResponse::fromMap($this->doRPCRequest('ListExecutions', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListExecutionsRequest $request
     *
     * @return ListExecutionsResponse
     */
    public function listExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param ListInventoryEntriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInventoryEntriesResponse
     */
    public function listInventoryEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInventoryEntriesResponse::fromMap($this->doRPCRequest('ListInventoryEntries', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInventoryEntriesRequest $request
     *
     * @return ListInventoryEntriesResponse
     */
    public function listInventoryEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInventoryEntriesWithOptions($request, $runtime);
    }

    /**
     * @param ListParametersRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListParametersResponse
     */
    public function listParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListParametersResponse::fromMap($this->doRPCRequest('ListParameters', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListParametersRequest $request
     *
     * @return ListParametersResponse
     */
    public function listParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParametersWithOptions($request, $runtime);
    }

    /**
     * @param ListParameterVersionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListParameterVersionsResponse
     */
    public function listParameterVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListParameterVersionsResponse::fromMap($this->doRPCRequest('ListParameterVersions', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListParameterVersionsRequest $request
     *
     * @return ListParameterVersionsResponse
     */
    public function listParameterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParameterVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceExecutionStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListResourceExecutionStatusResponse
     */
    public function listResourceExecutionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListResourceExecutionStatusResponse::fromMap($this->doRPCRequest('ListResourceExecutionStatus', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListResourceExecutionStatusRequest $request
     *
     * @return ListResourceExecutionStatusResponse
     */
    public function listResourceExecutionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceExecutionStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListSecretParametersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretParametersResponse
     */
    public function listSecretParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSecretParametersResponse::fromMap($this->doRPCRequest('ListSecretParameters', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSecretParametersRequest $request
     *
     * @return ListSecretParametersResponse
     */
    public function listSecretParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretParametersWithOptions($request, $runtime);
    }

    /**
     * @param ListSecretParameterVersionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListSecretParameterVersionsResponse
     */
    public function listSecretParameterVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSecretParameterVersionsResponse::fromMap($this->doRPCRequest('ListSecretParameterVersions', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSecretParameterVersionsRequest $request
     *
     * @return ListSecretParameterVersionsResponse
     */
    public function listSecretParameterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretParameterVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagValuesResponse::fromMap($this->doRPCRequest('ListTagValues', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskExecutionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListTaskExecutionsResponse
     */
    public function listTaskExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskExecutionsResponse::fromMap($this->doRPCRequest('ListTaskExecutions', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTaskExecutionsRequest $request
     *
     * @return ListTaskExecutionsResponse
     */
    public function listTaskExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplatesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTemplatesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTemplatesResponse::fromMap($this->doRPCRequest('ListTemplates', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplateVersionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListTemplateVersionsResponse
     */
    public function listTemplateVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTemplateVersionsResponse::fromMap($this->doRPCRequest('ListTemplateVersions', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTemplateVersionsRequest $request
     *
     * @return ListTemplateVersionsResponse
     */
    public function listTemplateVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateVersionsWithOptions($request, $runtime);
    }

    /**
     * @param NotifyExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return NotifyExecutionResponse
     */
    public function notifyExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return NotifyExecutionResponse::fromMap($this->doRPCRequest('NotifyExecution', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param NotifyExecutionRequest $request
     *
     * @return NotifyExecutionResponse
     */
    public function notifyExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyExecutionWithOptions($request, $runtime);
    }

    /**
     * @param SearchInventoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SearchInventoryResponse
     */
    public function searchInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchInventoryResponse::fromMap($this->doRPCRequest('SearchInventory', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchInventoryRequest $request
     *
     * @return SearchInventoryResponse
     */
    public function searchInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchInventoryWithOptions($request, $runtime);
    }

    /**
     * @param SetServiceSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetServiceSettingsResponse
     */
    public function setServiceSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetServiceSettingsResponse::fromMap($this->doRPCRequest('SetServiceSettings', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetServiceSettingsRequest $request
     *
     * @return SetServiceSettingsResponse
     */
    public function setServiceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setServiceSettingsWithOptions($request, $runtime);
    }

    /**
     * @param StartExecutionRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StartExecutionResponse
     */
    public function startExecutionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartExecutionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartExecutionResponse::fromMap($this->doRPCRequest('StartExecution', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartExecutionRequest $request
     *
     * @return StartExecutionResponse
     */
    public function startExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startExecutionWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TriggerExecutionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TriggerExecutionResponse
     */
    public function triggerExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TriggerExecutionResponse::fromMap($this->doRPCRequest('TriggerExecution', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TriggerExecutionRequest $request
     *
     * @return TriggerExecutionResponse
     */
    public function triggerExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerExecutionWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UntagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagKeys)) {
            $request->tagKeysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'TagKeys', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateExecutionResponse
     */
    public function updateExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateExecutionResponse::fromMap($this->doRPCRequest('UpdateExecution', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateExecutionRequest $request
     *
     * @return UpdateExecutionResponse
     */
    public function updateExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExecutionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceInformationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInstanceInformationResponse
     */
    public function updateInstanceInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateInstanceInformationResponse::fromMap($this->doRPCRequest('UpdateInstanceInformation', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInstanceInformationRequest $request
     *
     * @return UpdateInstanceInformationResponse
     */
    public function updateInstanceInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceInformationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateParameterResponse
     */
    public function updateParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateParameterResponse::fromMap($this->doRPCRequest('UpdateParameter', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateParameterRequest $request
     *
     * @return UpdateParameterResponse
     */
    public function updateParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateParameterWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSecretParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSecretParameterResponse
     */
    public function updateSecretParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSecretParameterResponse::fromMap($this->doRPCRequest('UpdateSecretParameter', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSecretParameterRequest $request
     *
     * @return UpdateSecretParameterResponse
     */
    public function updateSecretParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretParameterWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTemplateResponse::fromMap($this->doRPCRequest('UpdateTemplate', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ValidateTemplateContentRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ValidateTemplateContentResponse
     */
    public function validateTemplateContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ValidateTemplateContentResponse::fromMap($this->doRPCRequest('ValidateTemplateContent', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ValidateTemplateContentRequest $request
     *
     * @return ValidateTemplateContentResponse
     */
    public function validateTemplateContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTemplateContentWithOptions($request, $runtime);
    }
}
