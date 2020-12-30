<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\AbortChangeRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\AbortChangeResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateConfigTemplateRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateConfigTemplateResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateOrderRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateOrderResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreatePkgVersionRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreatePkgVersionResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateStorageResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeleteAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeleteAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeleteChangeRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeleteChangeResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeleteConfigTemplateRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeleteConfigTemplateResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeletePkgVersionRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeletePkgVersionResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeployAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DeployAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvInstanceHealthRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvInstanceHealthResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvsRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvsResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvStatusRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvStatusResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeApplicationsRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeApplicationsResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeCategoriesResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeChangeRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeChangeResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeChangesRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeChangesResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigOptionsRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigOptionsResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigSettingsRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigSettingsResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigTemplatesRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigTemplatesResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherLogResultRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherLogResultResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherStatsResultRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherStatsResultResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeInstanceHealthRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeInstanceHealthResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePkgVersionsRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePkgVersionsResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePublicConfigTemplatesRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePublicConfigTemplatesResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeStacksRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeStacksResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeStorageRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeStorageResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\GatherAppEnvLogRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\GatherAppEnvLogResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\GatherAppEnvStatsRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\GatherAppEnvStatsResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\PauseChangeRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\PauseChangeResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\RebuildAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\RebuildAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\RestartAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\RestartAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\ResumeChangeRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\ResumeChangeResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\StartAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\StartAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\StopAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\StopAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\TerminateAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\TerminateAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\UpdateAppEnvRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\UpdateAppEnvResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\UpdateConfigTemplateRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\UpdateConfigTemplateResponse;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\ValidateConfigSettingRequest;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\ValidateConfigSettingResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class WebPlus extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'            => 'webplus.cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou'        => 'webplus.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'webplus.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'           => 'webplus.cn-hangzhou.aliyuncs.com',
            'ap-northeast-1'        => 'webplus.aliyuncs.com',
            'ap-south-1'            => 'webplus.aliyuncs.com',
            'ap-southeast-1'        => 'webplus.aliyuncs.com',
            'ap-southeast-2'        => 'webplus.aliyuncs.com',
            'ap-southeast-3'        => 'webplus.aliyuncs.com',
            'ap-southeast-5'        => 'webplus.aliyuncs.com',
            'cn-chengdu'            => 'webplus.aliyuncs.com',
            'cn-hongkong'           => 'webplus-vpc.cn-hongkong.aliyuncs.com',
            'cn-huhehaote'          => 'webplus.aliyuncs.com',
            'cn-qingdao'            => 'webplus.aliyuncs.com',
            'eu-central-1'          => 'webplus.aliyuncs.com',
            'eu-west-1'             => 'webplus.aliyuncs.com',
            'me-east-1'             => 'webplus.aliyuncs.com',
            'us-east-1'             => 'webplus.aliyuncs.com',
            'us-west-1'             => 'webplus.aliyuncs.com',
            'cn-hangzhou-finance'   => 'webplus.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'webplus.aliyuncs.com',
            'cn-shanghai-finance-1' => 'webplus.aliyuncs.com',
            'cn-north-2-gov-1'      => 'webplus.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('webplus', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AbortChangeRequest $request
     *
     * @return AbortChangeResponse
     */
    public function abortChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->abortChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AbortChangeRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AbortChangeResponse
     */
    public function abortChangeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeId)) {
            @$body['ChangeId'] = $request->changeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return AbortChangeResponse::fromMap($this->doROARequestWithForm('AbortChange', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/change/abort', 'json', $req, $runtime));
    }

    /**
     * @param CreateAppEnvRequest $request
     *
     * @return CreateAppEnvResponse
     */
    public function createAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateAppEnvRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAppEnvResponse
     */
    public function createAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envName)) {
            @$body['EnvName'] = $request->envName;
        }
        if (!Utils::isUnset($request->envDescription)) {
            @$body['EnvDescription'] = $request->envDescription;
        }
        if (!Utils::isUnset($request->stackId)) {
            @$body['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->appId)) {
            @$body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pkgVersionId)) {
            @$body['PkgVersionId'] = $request->pkgVersionId;
        }
        if (!Utils::isUnset($request->optionSettings)) {
            @$body['OptionSettings'] = $request->optionSettings;
        }
        if (!Utils::isUnset($request->profileName)) {
            @$body['ProfileName'] = $request->profileName;
        }
        if (!Utils::isUnset($request->sourceEnvId)) {
            @$body['SourceEnvId'] = $request->sourceEnvId;
        }
        if (!Utils::isUnset($request->templateId)) {
            @$body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            @$body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->extraProperties)) {
            @$body['ExtraProperties'] = $request->extraProperties;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateAppEnvResponse::fromMap($this->doROARequestWithForm('CreateAppEnv', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv', 'json', $req, $runtime));
    }

    /**
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            @$body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appDescription)) {
            @$body['AppDescription'] = $request->appDescription;
        }
        if (!Utils::isUnset($request->categoryName)) {
            @$body['CategoryName'] = $request->categoryName;
        }
        if (!Utils::isUnset($request->usingSharedStorage)) {
            @$body['UsingSharedStorage'] = $request->usingSharedStorage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateApplicationResponse::fromMap($this->doROARequestWithForm('CreateApplication', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/application', 'json', $req, $runtime));
    }

    /**
     * @param CreateConfigTemplateRequest $request
     *
     * @return CreateConfigTemplateResponse
     */
    public function createConfigTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateConfigTemplateResponse
     */
    public function createConfigTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateName)) {
            @$body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateDescription)) {
            @$body['TemplateDescription'] = $request->templateDescription;
        }
        if (!Utils::isUnset($request->appId)) {
            @$body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->stackId)) {
            @$body['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->sourceTemplateId)) {
            @$body['SourceTemplateId'] = $request->sourceTemplateId;
        }
        if (!Utils::isUnset($request->sourceEnvId)) {
            @$body['SourceEnvId'] = $request->sourceEnvId;
        }
        if (!Utils::isUnset($request->profileName)) {
            @$body['ProfileName'] = $request->profileName;
        }
        if (!Utils::isUnset($request->pkgVersionId)) {
            @$body['PkgVersionId'] = $request->pkgVersionId;
        }
        if (!Utils::isUnset($request->optionSettings)) {
            @$body['OptionSettings'] = $request->optionSettings;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateConfigTemplateResponse::fromMap($this->doROARequestWithForm('CreateConfigTemplate', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/configTemplate', 'json', $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateOrderRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productName)) {
            @$body['ProductName'] = $request->productName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateOrderResponse::fromMap($this->doROARequestWithForm('CreateOrder', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/paas/createOrder', 'json', $req, $runtime));
    }

    /**
     * @param CreatePkgVersionRequest $request
     *
     * @return CreatePkgVersionResponse
     */
    public function createPkgVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPkgVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreatePkgVersionRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePkgVersionResponse
     */
    public function createPkgVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pkgVersionLabel)) {
            @$body['PkgVersionLabel'] = $request->pkgVersionLabel;
        }
        if (!Utils::isUnset($request->pkgVersionDescription)) {
            @$body['PkgVersionDescription'] = $request->pkgVersionDescription;
        }
        if (!Utils::isUnset($request->appId)) {
            @$body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->packageSource)) {
            @$body['PackageSource'] = $request->packageSource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreatePkgVersionResponse::fromMap($this->doROARequestWithForm('CreatePkgVersion', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/pkgVersion', 'json', $req, $runtime));
    }

    /**
     * @return CreateStorageResponse
     */
    public function createStorage()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createStorageWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateStorageResponse
     */
    public function createStorageWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateStorageResponse::fromMap($this->doROARequest('CreateStorage', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/storage', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAppEnvRequest $request
     *
     * @return DeleteAppEnvResponse
     */
    public function deleteAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteAppEnvRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteAppEnvResponse
     */
    public function deleteAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteAppEnvResponse::fromMap($this->doROARequest('DeleteAppEnv', '2019-03-20', 'HTTPS', 'DELETE', 'AK', '/pop/v1/wam/appEnv', 'json', $req, $runtime));
    }

    /**
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteApplicationResponse::fromMap($this->doROARequest('DeleteApplication', '2019-03-20', 'HTTPS', 'DELETE', 'AK', '/pop/v1/wam/application', 'json', $req, $runtime));
    }

    /**
     * @param DeleteChangeRequest $request
     *
     * @return DeleteChangeResponse
     */
    public function deleteChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteChangeRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteChangeResponse
     */
    public function deleteChangeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeId)) {
            @$query['ChangeId'] = $request->changeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteChangeResponse::fromMap($this->doROARequest('DeleteChange', '2019-03-20', 'HTTPS', 'DELETE', 'AK', '/pop/v1/wam/change', 'json', $req, $runtime));
    }

    /**
     * @param DeleteConfigTemplateRequest $request
     *
     * @return DeleteConfigTemplateResponse
     */
    public function deleteConfigTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteConfigTemplateResponse
     */
    public function deleteConfigTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            @$query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteConfigTemplateResponse::fromMap($this->doROARequest('DeleteConfigTemplate', '2019-03-20', 'HTTPS', 'DELETE', 'AK', '/pop/v1/wam/configTemplate', 'json', $req, $runtime));
    }

    /**
     * @param DeletePkgVersionRequest $request
     *
     * @return DeletePkgVersionResponse
     */
    public function deletePkgVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePkgVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeletePkgVersionRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeletePkgVersionResponse
     */
    public function deletePkgVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pkgVersionId)) {
            @$query['PkgVersionId'] = $request->pkgVersionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeletePkgVersionResponse::fromMap($this->doROARequest('DeletePkgVersion', '2019-03-20', 'HTTPS', 'DELETE', 'AK', '/pop/v1/wam/pkgVersion', 'json', $req, $runtime));
    }

    /**
     * @param DeployAppEnvRequest $request
     *
     * @return DeployAppEnvResponse
     */
    public function deployAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeployAppEnvRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeployAppEnvResponse
     */
    public function deployAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->batchSize)) {
            @$body['BatchSize'] = $request->batchSize;
        }
        if (!Utils::isUnset($request->batchPercent)) {
            @$body['BatchPercent'] = $request->batchPercent;
        }
        if (!Utils::isUnset($request->batchInterval)) {
            @$body['BatchInterval'] = $request->batchInterval;
        }
        if (!Utils::isUnset($request->pauseBetweenBatches)) {
            @$body['PauseBetweenBatches'] = $request->pauseBetweenBatches;
        }
        if (!Utils::isUnset($request->pkgVersionId)) {
            @$body['PkgVersionId'] = $request->pkgVersionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeployAppEnvResponse::fromMap($this->doROARequestWithForm('DeployAppEnv', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv/deploy', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppEnvInstanceHealthRequest $request
     *
     * @return DescribeAppEnvInstanceHealthResponse
     */
    public function describeAppEnvInstanceHealth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppEnvInstanceHealthWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeAppEnvInstanceHealthRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAppEnvInstanceHealthResponse
     */
    public function describeAppEnvInstanceHealthWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAppEnvInstanceHealthResponse::fromMap($this->doROARequest('DescribeAppEnvInstanceHealth', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/appEnv/instanceHealth', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppEnvsRequest $request
     *
     * @return DescribeAppEnvsResponse
     */
    public function describeAppEnvs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppEnvsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeAppEnvsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAppEnvsResponse
     */
    public function describeAppEnvsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->includeTerminated)) {
            @$query['IncludeTerminated'] = $request->includeTerminated;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->envName)) {
            @$query['EnvName'] = $request->envName;
        }
        if (!Utils::isUnset($request->envSearch)) {
            @$query['EnvSearch'] = $request->envSearch;
        }
        if (!Utils::isUnset($request->recentUpdated)) {
            @$query['RecentUpdated'] = $request->recentUpdated;
        }
        if (!Utils::isUnset($request->stackSearch)) {
            @$query['StackSearch'] = $request->stackSearch;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAppEnvsResponse::fromMap($this->doROARequest('DescribeAppEnvs', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/appEnv', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppEnvStatusRequest $request
     *
     * @return DescribeAppEnvStatusResponse
     */
    public function describeAppEnvStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppEnvStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeAppEnvStatusRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAppEnvStatusResponse
     */
    public function describeAppEnvStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAppEnvStatusResponse::fromMap($this->doROARequest('DescribeAppEnvStatus', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/appEnv/status', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApplicationsRequest $request
     *
     * @return DescribeApplicationsResponse
     */
    public function describeApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeApplicationsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeApplicationsResponse
     */
    public function describeApplicationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->appName)) {
            @$query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appSearch)) {
            @$query['AppSearch'] = $request->appSearch;
        }
        if (!Utils::isUnset($request->envSearch)) {
            @$query['EnvSearch'] = $request->envSearch;
        }
        if (!Utils::isUnset($request->stackSearch)) {
            @$query['StackSearch'] = $request->stackSearch;
        }
        if (!Utils::isUnset($request->categorySearch)) {
            @$query['CategorySearch'] = $request->categorySearch;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeApplicationsResponse::fromMap($this->doROARequest('DescribeApplications', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/application', 'json', $req, $runtime));
    }

    /**
     * @return DescribeCategoriesResponse
     */
    public function describeCategories()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCategoriesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCategoriesResponse
     */
    public function describeCategoriesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeCategoriesResponse::fromMap($this->doROARequest('DescribeCategories', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/category', 'json', $req, $runtime));
    }

    /**
     * @param DescribeChangeRequest $request
     *
     * @return DescribeChangeResponse
     */
    public function describeChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChangeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeChangeResponse
     */
    public function describeChangeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->changeId)) {
            @$query['ChangeId'] = $request->changeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeChangeResponse::fromMap($this->doROARequest('DescribeChange', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/changeInfo', 'json', $req, $runtime));
    }

    /**
     * @param DescribeChangesRequest $request
     *
     * @return DescribeChangesResponse
     */
    public function describeChanges($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeChangesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeChangesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeChangesResponse
     */
    public function describeChangesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->actionName)) {
            @$query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeChangesResponse::fromMap($this->doROARequest('DescribeChanges', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/change', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConfigIndexRequest $request
     *
     * @return DescribeConfigIndexResponse
     */
    public function describeConfigIndex($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigIndexWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigIndexRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeConfigIndexResponse
     */
    public function describeConfigIndexWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->stackId)) {
            @$query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->profileName)) {
            @$query['ProfileName'] = $request->profileName;
        }
        if (!Utils::isUnset($request->templateId)) {
            @$query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeConfigIndexResponse::fromMap($this->doROARequest('DescribeConfigIndex', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/config/configIndex', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConfigOptionsRequest $request
     *
     * @return DescribeConfigOptionsResponse
     */
    public function describeConfigOptions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigOptionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigOptionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeConfigOptionsResponse
     */
    public function describeConfigOptionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->stackId)) {
            @$query['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->profileName)) {
            @$query['ProfileName'] = $request->profileName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeConfigOptionsResponse::fromMap($this->doROARequest('DescribeConfigOptions', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/config/configOption', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConfigSettingsRequest $request
     *
     * @return DescribeConfigSettingsResponse
     */
    public function describeConfigSettings($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigSettingsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigSettingsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeConfigSettingsResponse
     */
    public function describeConfigSettingsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->templateId)) {
            @$query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->pathName)) {
            @$query['PathName'] = $request->pathName;
        }
        if (!Utils::isUnset($request->optionName)) {
            @$query['OptionName'] = $request->optionName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeConfigSettingsResponse::fromMap($this->doROARequest('DescribeConfigSettings', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/config/configSetting', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConfigTemplatesRequest $request
     *
     * @return DescribeConfigTemplatesResponse
     */
    public function describeConfigTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeConfigTemplatesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeConfigTemplatesResponse
     */
    public function describeConfigTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->templateName)) {
            @$query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateSearch)) {
            @$query['TemplateSearch'] = $request->templateSearch;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeConfigTemplatesResponse::fromMap($this->doROARequest('DescribeConfigTemplates', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/configTemplate', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEnvResourceRequest $request
     *
     * @return DescribeEnvResourceResponse
     */
    public function describeEnvResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEnvResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeEnvResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEnvResourceResponse
     */
    public function describeEnvResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeEnvResourceResponse::fromMap($this->doROARequest('DescribeEnvResource', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/envResource', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEventsRequest $request
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeEventsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            @$query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->changeId)) {
            @$query['ChangeId'] = $request->changeId;
        }
        if (!Utils::isUnset($request->lastChangeEvents)) {
            @$query['LastChangeEvents'] = $request->lastChangeEvents;
        }
        if (!Utils::isUnset($request->reverseByTimestamp)) {
            @$query['ReverseByTimestamp'] = $request->reverseByTimestamp;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeEventsResponse::fromMap($this->doROARequest('DescribeEvents', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/event', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGatherLogResultRequest $request
     *
     * @return DescribeGatherLogResultResponse
     */
    public function describeGatherLogResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGatherLogResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeGatherLogResultRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGatherLogResultResponse
     */
    public function describeGatherLogResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeId)) {
            @$query['ChangeId'] = $request->changeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeGatherLogResultResponse::fromMap($this->doROARequest('DescribeGatherLogResult', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/appEnv/gatherLog', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGatherStatsResultRequest $request
     *
     * @return DescribeGatherStatsResultResponse
     */
    public function describeGatherStatsResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGatherStatsResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeGatherStatsResultRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGatherStatsResultResponse
     */
    public function describeGatherStatsResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeId)) {
            @$query['ChangeId'] = $request->changeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeGatherStatsResultResponse::fromMap($this->doROARequest('DescribeGatherStatsResult', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/appEnv/gatherStats', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceHealthRequest $request
     *
     * @return DescribeInstanceHealthResponse
     */
    public function describeInstanceHealth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceHealthWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeInstanceHealthRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceHealthResponse
     */
    public function describeInstanceHealthWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            @$query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeInstanceHealthResponse::fromMap($this->doROARequest('DescribeInstanceHealth', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/instance/health', 'json', $req, $runtime));
    }

    /**
     * @param DescribePkgVersionsRequest $request
     *
     * @return DescribePkgVersionsResponse
     */
    public function describePkgVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePkgVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribePkgVersionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePkgVersionsResponse
     */
    public function describePkgVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            @$query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pkgVersionLabel)) {
            @$query['PkgVersionLabel'] = $request->pkgVersionLabel;
        }
        if (!Utils::isUnset($request->pkgVersionSearch)) {
            @$query['PkgVersionSearch'] = $request->pkgVersionSearch;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribePkgVersionsResponse::fromMap($this->doROARequest('DescribePkgVersions', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/pkgVersion', 'json', $req, $runtime));
    }

    /**
     * @param DescribePublicConfigTemplatesRequest $request
     *
     * @return DescribePublicConfigTemplatesResponse
     */
    public function describePublicConfigTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePublicConfigTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribePublicConfigTemplatesRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePublicConfigTemplatesResponse
     */
    public function describePublicConfigTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryName)) {
            @$query['CategoryName'] = $request->categoryName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribePublicConfigTemplatesResponse::fromMap($this->doROARequest('DescribePublicConfigTemplates', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/publicConfigTemplate', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStacksRequest $request
     *
     * @return DescribeStacksResponse
     */
    public function describeStacks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeStacksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeStacksRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeStacksResponse
     */
    public function describeStacksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recommendedOnly)) {
            @$query['RecommendedOnly'] = $request->recommendedOnly;
        }
        if (!Utils::isUnset($request->categoryName)) {
            @$query['CategoryName'] = $request->categoryName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeStacksResponse::fromMap($this->doROARequest('DescribeStacks', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/stack', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStorageRequest $request
     *
     * @return DescribeStorageResponse
     */
    public function describeStorage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeStorageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeStorageRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeStorageResponse
     */
    public function describeStorageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->usingSharedStorage)) {
            @$query['UsingSharedStorage'] = $request->usingSharedStorage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeStorageResponse::fromMap($this->doROARequest('DescribeStorage', '2019-03-20', 'HTTPS', 'GET', 'AK', '/pop/v1/wam/storage', 'json', $req, $runtime));
    }

    /**
     * @param GatherAppEnvLogRequest $request
     *
     * @return GatherAppEnvLogResponse
     */
    public function gatherAppEnvLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->gatherAppEnvLogWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GatherAppEnvLogRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GatherAppEnvLogResponse
     */
    public function gatherAppEnvLogWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->targetInstances)) {
            @$body['TargetInstances'] = $request->targetInstances;
        }
        if (!Utils::isUnset($request->logPath)) {
            @$body['LogPath'] = $request->logPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GatherAppEnvLogResponse::fromMap($this->doROARequestWithForm('GatherAppEnvLog', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv/gatherLog', 'json', $req, $runtime));
    }

    /**
     * @param GatherAppEnvStatsRequest $request
     *
     * @return GatherAppEnvStatsResponse
     */
    public function gatherAppEnvStats($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->gatherAppEnvStatsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GatherAppEnvStatsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GatherAppEnvStatsResponse
     */
    public function gatherAppEnvStatsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->targetInstances)) {
            @$body['TargetInstances'] = $request->targetInstances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return GatherAppEnvStatsResponse::fromMap($this->doROARequestWithForm('GatherAppEnvStats', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv/gatherStats', 'json', $req, $runtime));
    }

    /**
     * @param PauseChangeRequest $request
     *
     * @return PauseChangeResponse
     */
    public function pauseChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PauseChangeRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PauseChangeResponse
     */
    public function pauseChangeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeId)) {
            @$body['ChangeId'] = $request->changeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return PauseChangeResponse::fromMap($this->doROARequestWithForm('PauseChange', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/change/pause', 'json', $req, $runtime));
    }

    /**
     * @param RebuildAppEnvRequest $request
     *
     * @return RebuildAppEnvResponse
     */
    public function rebuildAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebuildAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RebuildAppEnvRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RebuildAppEnvResponse
     */
    public function rebuildAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            @$body['DryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return RebuildAppEnvResponse::fromMap($this->doROARequestWithForm('RebuildAppEnv', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv/rebuild', 'json', $req, $runtime));
    }

    /**
     * @param RestartAppEnvRequest $request
     *
     * @return RestartAppEnvResponse
     */
    public function restartAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RestartAppEnvRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RestartAppEnvResponse
     */
    public function restartAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->batchSize)) {
            @$body['BatchSize'] = $request->batchSize;
        }
        if (!Utils::isUnset($request->batchPercent)) {
            @$body['BatchPercent'] = $request->batchPercent;
        }
        if (!Utils::isUnset($request->batchInterval)) {
            @$body['BatchInterval'] = $request->batchInterval;
        }
        if (!Utils::isUnset($request->pauseBetweenBatches)) {
            @$body['PauseBetweenBatches'] = $request->pauseBetweenBatches;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return RestartAppEnvResponse::fromMap($this->doROARequestWithForm('RestartAppEnv', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv/restart', 'json', $req, $runtime));
    }

    /**
     * @param ResumeChangeRequest $request
     *
     * @return ResumeChangeResponse
     */
    public function resumeChange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeChangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ResumeChangeRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ResumeChangeResponse
     */
    public function resumeChangeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->changeId)) {
            @$body['ChangeId'] = $request->changeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ResumeChangeResponse::fromMap($this->doROARequestWithForm('ResumeChange', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/change/resume', 'json', $req, $runtime));
    }

    /**
     * @param StartAppEnvRequest $request
     *
     * @return StartAppEnvResponse
     */
    public function startAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StartAppEnvRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return StartAppEnvResponse
     */
    public function startAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return StartAppEnvResponse::fromMap($this->doROARequestWithForm('StartAppEnv', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv/start', 'json', $req, $runtime));
    }

    /**
     * @param StopAppEnvRequest $request
     *
     * @return StopAppEnvResponse
     */
    public function stopAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StopAppEnvRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return StopAppEnvResponse
     */
    public function stopAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return StopAppEnvResponse::fromMap($this->doROARequestWithForm('StopAppEnv', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv/stop', 'json', $req, $runtime));
    }

    /**
     * @param TerminateAppEnvRequest $request
     *
     * @return TerminateAppEnvResponse
     */
    public function terminateAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->terminateAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TerminateAppEnvRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return TerminateAppEnvResponse
     */
    public function terminateAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            @$body['DryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return TerminateAppEnvResponse::fromMap($this->doROARequestWithForm('TerminateAppEnv', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/appEnv/terminate', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppEnvRequest $request
     *
     * @return UpdateAppEnvResponse
     */
    public function updateAppEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppEnvWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateAppEnvRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateAppEnvResponse
     */
    public function updateAppEnvWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envDescription)) {
            @$body['EnvDescription'] = $request->envDescription;
        }
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->pkgVersionId)) {
            @$body['PkgVersionId'] = $request->pkgVersionId;
        }
        if (!Utils::isUnset($request->optionSettings)) {
            @$body['OptionSettings'] = $request->optionSettings;
        }
        if (!Utils::isUnset($request->stackId)) {
            @$body['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            @$body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->extraProperties)) {
            @$body['ExtraProperties'] = $request->extraProperties;
        }
        if (!Utils::isUnset($request->batchSize)) {
            @$body['BatchSize'] = $request->batchSize;
        }
        if (!Utils::isUnset($request->batchPercent)) {
            @$body['BatchPercent'] = $request->batchPercent;
        }
        if (!Utils::isUnset($request->batchInterval)) {
            @$body['BatchInterval'] = $request->batchInterval;
        }
        if (!Utils::isUnset($request->pauseBetweenBatches)) {
            @$body['PauseBetweenBatches'] = $request->pauseBetweenBatches;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateAppEnvResponse::fromMap($this->doROARequestWithForm('UpdateAppEnv', '2019-03-20', 'HTTPS', 'PUT', 'AK', '/pop/v1/wam/appEnv', 'json', $req, $runtime));
    }

    /**
     * @param UpdateApplicationRequest $request
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            @$body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appDescription)) {
            @$body['AppDescription'] = $request->appDescription;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateApplicationResponse::fromMap($this->doROARequestWithForm('UpdateApplication', '2019-03-20', 'HTTPS', 'PUT', 'AK', '/pop/v1/wam/application', 'json', $req, $runtime));
    }

    /**
     * @param UpdateConfigTemplateRequest $request
     *
     * @return UpdateConfigTemplateResponse
     */
    public function updateConfigTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConfigTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateConfigTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateConfigTemplateResponse
     */
    public function updateConfigTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateDescription)) {
            @$body['TemplateDescription'] = $request->templateDescription;
        }
        if (!Utils::isUnset($request->templateId)) {
            @$body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->optionSettings)) {
            @$body['OptionSettings'] = $request->optionSettings;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateConfigTemplateResponse::fromMap($this->doROARequestWithForm('UpdateConfigTemplate', '2019-03-20', 'HTTPS', 'PUT', 'AK', '/pop/v1/wam/configTemplate', 'json', $req, $runtime));
    }

    /**
     * @param ValidateConfigSettingRequest $request
     *
     * @return ValidateConfigSettingResponse
     */
    public function validateConfigSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateConfigSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ValidateConfigSettingRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ValidateConfigSettingResponse
     */
    public function validateConfigSettingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->envId)) {
            @$body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->templateId)) {
            @$body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->stackId)) {
            @$body['StackId'] = $request->stackId;
        }
        if (!Utils::isUnset($request->optionSettings)) {
            @$body['OptionSettings'] = $request->optionSettings;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ValidateConfigSettingResponse::fromMap($this->doROARequestWithForm('ValidateConfigSetting', '2019-03-20', 'HTTPS', 'POST', 'AK', '/pop/v1/wam/config/configSetting/validate', 'json', $req, $runtime));
    }
}
