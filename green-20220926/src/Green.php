<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Green\V20220926\Models\AddImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddImageLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddImages2LibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddImages2LibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsToLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsToLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CancelStockOssCheckTaskRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CancelStockOssCheckTaskResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CopyServiceConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CopyServiceConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreatePreCheckRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreatePreCheckResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreatStockOssCheckTaskRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreatStockOssCheckTaskResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteImagesFromLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteImagesFromLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteKeywordRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteKeywordResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportCipStatsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportCipStatsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportKeywordRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportKeywordResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportOssCheckStatRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportOssCheckStatResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportScanResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportScanResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportScanResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportTextScanResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportTextScanResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportTextScanResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupBucketsListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupBucketsListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBucketsListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBucketsListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetExecuteTimeRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetExecuteTimeResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetImageSceneLabelListConfRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetImageSceneLabelListConfResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetJobNameListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetJobNameListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetJobNameListShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetKeywordImportResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetKeywordImportResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanNumRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanNumResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceLabelConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceLabelConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetStockOssCheckTasksListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetStockOssCheckTasksListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetStockOssCheckTasksListShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadInfoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUserBuyStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUserBuyStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImageLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImagesFromLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImagesFromLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImagesFromLibShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordLibsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordLibsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordsShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListOssCheckResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListOssCheckResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListOssCheckResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyServiceInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyServiceInfoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateBackupConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateBackupConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateScanResultFeedbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateScanResultFeedbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateServiceConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateServiceConfigResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Green extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'green.ap-southeast-1.aliyuncs.com',
            'cn-chengdu'            => 'green.aliyuncs.com',
            'cn-hongkong'           => 'green.aliyuncs.com',
            'cn-huhehaote'          => 'green.aliyuncs.com',
            'cn-qingdao'            => 'green.aliyuncs.com',
            'cn-zhangjiakou'        => 'green.aliyuncs.com',
            'eu-central-1'          => 'green.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'green.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'green.aliyuncs.com',
            'cn-shanghai-finance-1' => 'green.aliyuncs.com',
            'cn-north-2-gov-1'      => 'green.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('green', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建图库
     *  *
     * @param AddImageLibRequest $request AddImageLibRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImageLibResponse AddImageLibResponse
     */
    public function addImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImageLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建图库
     *  *
     * @param AddImageLibRequest $request AddImageLibRequest
     *
     * @return AddImageLibResponse AddImageLibResponse
     */
    public function addImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageLibWithOptions($request, $runtime);
    }

    /**
     * @summary 批量添加图片
     *  *
     * @param AddImages2LibRequest $request AddImages2LibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImages2LibResponse AddImages2LibResponse
     */
    public function addImages2LibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->imgUrl)) {
            $body['ImgUrl'] = $request->imgUrl;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImages2Lib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddImages2LibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量添加图片
     *  *
     * @param AddImages2LibRequest $request AddImages2LibRequest
     *
     * @return AddImages2LibResponse AddImages2LibResponse
     */
    public function addImages2Lib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImages2LibWithOptions($request, $runtime);
    }

    /**
     * @summary 创建关键词库
     *  *
     * @param AddKeywordLibRequest $request AddKeywordLibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddKeywordLibResponse AddKeywordLibResponse
     */
    public function addKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->keywords)) {
            $body['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->keywordsObject)) {
            $body['KeywordsObject'] = $request->keywordsObject;
        }
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddKeywordLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建关键词库
     *  *
     * @param AddKeywordLibRequest $request AddKeywordLibRequest
     *
     * @return AddKeywordLibResponse AddKeywordLibResponse
     */
    public function addKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @summary 添加关键词
     *  *
     * @param AddKeywordsRequest $request AddKeywordsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddKeywordsResponse AddKeywordsResponse
     */
    public function addKeywordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->keywords)) {
            $body['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->keywordsObject)) {
            $body['KeywordsObject'] = $request->keywordsObject;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddKeywords',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加关键词
     *  *
     * @param AddKeywordsRequest $request AddKeywordsRequest
     *
     * @return AddKeywordsResponse AddKeywordsResponse
     */
    public function addKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordsWithOptions($request, $runtime);
    }

    /**
     * @summary 添加关键词
     *  *
     * @param AddKeywordsToLibRequest $request AddKeywordsToLibRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddKeywordsToLibResponse AddKeywordsToLibResponse
     */
    public function addKeywordsToLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->keywords)) {
            $body['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->keywordsObject)) {
            $body['KeywordsObject'] = $request->keywordsObject;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddKeywordsToLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddKeywordsToLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加关键词
     *  *
     * @param AddKeywordsToLibRequest $request AddKeywordsToLibRequest
     *
     * @return AddKeywordsToLibResponse AddKeywordsToLibResponse
     */
    public function addKeywordsToLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordsToLibWithOptions($request, $runtime);
    }

    /**
     * @summary 取消oss扫描任务
     *  *
     * @param CancelStockOssCheckTaskRequest $request CancelStockOssCheckTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelStockOssCheckTaskResponse CancelStockOssCheckTaskResponse
     */
    public function cancelStockOssCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelStockOssCheckTask',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelStockOssCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消oss扫描任务
     *  *
     * @param CancelStockOssCheckTaskRequest $request CancelStockOssCheckTaskRequest
     *
     * @return CancelStockOssCheckTaskResponse CancelStockOssCheckTaskResponse
     */
    public function cancelStockOssCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelStockOssCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 复制服务
     *  *
     * @param CopyServiceConfigRequest $request CopyServiceConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyServiceConfigResponse CopyServiceConfigResponse
     */
    public function copyServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->serviceDesc)) {
            $body['ServiceDesc'] = $request->serviceDesc;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CopyServiceConfig',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 复制服务
     *  *
     * @param CopyServiceConfigRequest $request CopyServiceConfigRequest
     *
     * @return CopyServiceConfigResponse CopyServiceConfigResponse
     */
    public function copyServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 创建oss扫描任务
     *  *
     * @param CreatStockOssCheckTaskRequest $request CreatStockOssCheckTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatStockOssCheckTaskResponse CreatStockOssCheckTaskResponse
     */
    public function creatStockOssCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buckets)) {
            $query['Buckets'] = $request->buckets;
        }
        if (!Utils::isUnset($request->callbackId)) {
            $query['CallbackId'] = $request->callbackId;
        }
        if (!Utils::isUnset($request->distinctHistoryTasks)) {
            $query['DistinctHistoryTasks'] = $request->distinctHistoryTasks;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeDate)) {
            $query['ExecuteDate'] = $request->executeDate;
        }
        if (!Utils::isUnset($request->executeTime)) {
            $query['ExecuteTime'] = $request->executeTime;
        }
        if (!Utils::isUnset($request->freeze)) {
            $query['Freeze'] = $request->freeze;
        }
        if (!Utils::isUnset($request->freezeHighRisk1)) {
            $query['FreezeHighRisk1'] = $request->freezeHighRisk1;
        }
        if (!Utils::isUnset($request->freezeHighRisk2)) {
            $query['FreezeHighRisk2'] = $request->freezeHighRisk2;
        }
        if (!Utils::isUnset($request->freezeMediumRisk1)) {
            $query['FreezeMediumRisk1'] = $request->freezeMediumRisk1;
        }
        if (!Utils::isUnset($request->freezeMediumRisk2)) {
            $query['FreezeMediumRisk2'] = $request->freezeMediumRisk2;
        }
        if (!Utils::isUnset($request->freezeType)) {
            $query['FreezeType'] = $request->freezeType;
        }
        if (!Utils::isUnset($request->isInc)) {
            $query['IsInc'] = $request->isInc;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->prefixFilterType)) {
            $query['PrefixFilterType'] = $request->prefixFilterType;
        }
        if (!Utils::isUnset($request->prefixFilters)) {
            $query['PrefixFilters'] = $request->prefixFilters;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scanLimit)) {
            $query['ScanLimit'] = $request->scanLimit;
        }
        if (!Utils::isUnset($request->scanNoFileType)) {
            $query['ScanNoFileType'] = $request->scanNoFileType;
        }
        if (!Utils::isUnset($request->scanResourceType)) {
            $query['ScanResourceType'] = $request->scanResourceType;
        }
        if (!Utils::isUnset($request->scanService)) {
            $query['ScanService'] = $request->scanService;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskCycle)) {
            $query['TaskCycle'] = $request->taskCycle;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatStockOssCheckTask',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatStockOssCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建oss扫描任务
     *  *
     * @param CreatStockOssCheckTaskRequest $request CreatStockOssCheckTaskRequest
     *
     * @return CreatStockOssCheckTaskResponse CreatStockOssCheckTaskResponse
     */
    public function creatStockOssCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->creatStockOssCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建oss扫描任务前检查
     *  *
     * @param CreatePreCheckRequest $request CreatePreCheckRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePreCheckResponse CreatePreCheckResponse
     */
    public function createPreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->buckets)) {
            $body['Buckets'] = $request->buckets;
        }
        if (!Utils::isUnset($request->distinctHistoryTasks)) {
            $body['DistinctHistoryTasks'] = $request->distinctHistoryTasks;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isInc)) {
            $body['IsInc'] = $request->isInc;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $body['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->prefixFilterType)) {
            $body['PrefixFilterType'] = $request->prefixFilterType;
        }
        if (!Utils::isUnset($request->prefixFilters)) {
            $body['PrefixFilters'] = $request->prefixFilters;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->scanLimit)) {
            $body['ScanLimit'] = $request->scanLimit;
        }
        if (!Utils::isUnset($request->scanNoFileType)) {
            $body['ScanNoFileType'] = $request->scanNoFileType;
        }
        if (!Utils::isUnset($request->scanService)) {
            $body['ScanService'] = $request->scanService;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePreCheck',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建oss扫描任务前检查
     *  *
     * @param CreatePreCheckRequest $request CreatePreCheckRequest
     *
     * @return CreatePreCheckResponse CreatePreCheckResponse
     */
    public function createPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPreCheckWithOptions($request, $runtime);
    }

    /**
     * @summary 批量删除
     *  *
     * @param DeleteImagesFromLibRequest $request DeleteImagesFromLibRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteImagesFromLibResponse DeleteImagesFromLibResponse
     */
    public function deleteImagesFromLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->imageIds)) {
            $body['ImageIds'] = $request->imageIds;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteImagesFromLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImagesFromLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除
     *  *
     * @param DeleteImagesFromLibRequest $request DeleteImagesFromLibRequest
     *
     * @return DeleteImagesFromLibResponse DeleteImagesFromLibResponse
     */
    public function deleteImagesFromLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagesFromLibWithOptions($request, $runtime);
    }

    /**
     * @summary 删除关键词
     *  *
     * @param DeleteKeywordRequest $request DeleteKeywordRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKeywordResponse DeleteKeywordResponse
     */
    public function deleteKeywordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->keywordIds)) {
            $body['KeywordIds'] = $request->keywordIds;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteKeyword',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除关键词
     *  *
     * @param DeleteKeywordRequest $request DeleteKeywordRequest
     *
     * @return DeleteKeywordResponse DeleteKeywordResponse
     */
    public function deleteKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeywordWithOptions($request, $runtime);
    }

    /**
     * @summary 删除关键词库
     *  *
     * @param DeleteKeywordLibRequest $request DeleteKeywordLibRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKeywordLibResponse DeleteKeywordLibResponse
     */
    public function deleteKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteKeywordLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除关键词库
     *  *
     * @param DeleteKeywordLibRequest $request DeleteKeywordLibRequest
     *
     * @return DeleteKeywordLibResponse DeleteKeywordLibResponse
     */
    public function deleteKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @summary 导出调用量
     *  *
     * @param ExportCipStatsRequest $request ExportCipStatsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportCipStatsResponse ExportCipStatsResponse
     */
    public function exportCipStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byMonth)) {
            $body['ByMonth'] = $request->byMonth;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subUid)) {
            $body['SubUid'] = $request->subUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportCipStats',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportCipStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出调用量
     *  *
     * @param ExportCipStatsRequest $request ExportCipStatsRequest
     *
     * @return ExportCipStatsResponse ExportCipStatsResponse
     */
    public function exportCipStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCipStatsWithOptions($request, $runtime);
    }

    /**
     * @summary 导出关键词
     *  *
     * @param ExportKeywordRequest $request ExportKeywordRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportKeywordResponse ExportKeywordResponse
     */
    public function exportKeywordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportKeyword',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出关键词
     *  *
     * @param ExportKeywordRequest $request ExportKeywordRequest
     *
     * @return ExportKeywordResponse ExportKeywordResponse
     */
    public function exportKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportKeywordWithOptions($request, $runtime);
    }

    /**
     * @summary oss用量统计导出
     *  *
     * @param ExportOssCheckStatRequest $request ExportOssCheckStatRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportOssCheckStatResponse ExportOssCheckStatResponse
     */
    public function exportOssCheckStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byMonth)) {
            $body['ByMonth'] = $request->byMonth;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentTaskId)) {
            $body['ParentTaskId'] = $request->parentTaskId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportOssCheckStat',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportOssCheckStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary oss用量统计导出
     *  *
     * @param ExportOssCheckStatRequest $request ExportOssCheckStatRequest
     *
     * @return ExportOssCheckStatResponse ExportOssCheckStatResponse
     */
    public function exportOssCheckStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportOssCheckStatWithOptions($request, $runtime);
    }

    /**
     * @summary 导出oss扫描结果
     *  *
     * @param ExportResultRequest $tmpReq  ExportResultRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportResultResponse ExportResultResponse
     */
    public function exportResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportResult',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出oss扫描结果
     *  *
     * @param ExportResultRequest $request ExportResultRequest
     *
     * @return ExportResultResponse ExportResultResponse
     */
    public function exportResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportResultWithOptions($request, $runtime);
    }

    /**
     * @summary 导出调用结果，excel文件
     *  *
     * @param ExportScanResultRequest $tmpReq  ExportScanResultRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportScanResultResponse ExportScanResultResponse
     */
    public function exportScanResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportScanResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $body['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportScanResult',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出调用结果，excel文件
     *  *
     * @param ExportScanResultRequest $request ExportScanResultRequest
     *
     * @return ExportScanResultResponse ExportScanResultResponse
     */
    public function exportScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportScanResultWithOptions($request, $runtime);
    }

    /**
     * @summary 导出调用结果，excel文件
     *  *
     * @param ExportTextScanResultRequest $tmpReq  ExportTextScanResultRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportTextScanResultResponse ExportTextScanResultResponse
     */
    public function exportTextScanResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportTextScanResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $body['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportTextScanResult',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportTextScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出调用结果，excel文件
     *  *
     * @param ExportTextScanResultRequest $request ExportTextScanResultRequest
     *
     * @return ExportTextScanResultResponse ExportTextScanResultResponse
     */
    public function exportTextScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportTextScanResultWithOptions($request, $runtime);
    }

    /**
     * @summary 证据转存获取用户bucket列表
     *  *
     * @param GetBackupBucketsListRequest $request GetBackupBucketsListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBackupBucketsListResponse GetBackupBucketsListResponse
     */
    public function getBackupBucketsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBackupBucketsList',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBackupBucketsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 证据转存获取用户bucket列表
     *  *
     * @param GetBackupBucketsListRequest $request GetBackupBucketsListRequest
     *
     * @return GetBackupBucketsListResponse GetBackupBucketsListResponse
     */
    public function getBackupBucketsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupBucketsListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取证据转存配置
     *  *
     * @param GetBackupConfigRequest $request GetBackupConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBackupConfigResponse GetBackupConfigResponse
     */
    public function getBackupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBackupConfig',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBackupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取证据转存配置
     *  *
     * @param GetBackupConfigRequest $request GetBackupConfigRequest
     *
     * @return GetBackupConfigResponse GetBackupConfigResponse
     */
    public function getBackupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 用户授权校验
     *  *
     * @param GetBackupStatusRequest $request GetBackupStatusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBackupStatusResponse GetBackupStatusResponse
     */
    public function getBackupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBackupStatus',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBackupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用户授权校验
     *  *
     * @param GetBackupStatusRequest $request GetBackupStatusRequest
     *
     * @return GetBackupStatusResponse GetBackupStatusResponse
     */
    public function getBackupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupStatusWithOptions($request, $runtime);
    }

    /**
     * @summary bucket列表
     *  *
     * @param GetBucketsListRequest $request GetBucketsListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBucketsListResponse GetBucketsListResponse
     */
    public function getBucketsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBucketsList',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBucketsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary bucket列表
     *  *
     * @param GetBucketsListRequest $request GetBucketsListRequest
     *
     * @return GetBucketsListResponse GetBucketsListResponse
     */
    public function getBucketsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketsListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询调用量
     *  *
     * @param GetCipStatsRequest $request GetCipStatsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCipStatsResponse GetCipStatsResponse
     */
    public function getCipStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byMonth)) {
            $body['ByMonth'] = $request->byMonth;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subUid)) {
            $body['SubUid'] = $request->subUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCipStats',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCipStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询调用量
     *  *
     * @param GetCipStatsRequest $request GetCipStatsRequest
     *
     * @return GetCipStatsResponse GetCipStatsResponse
     */
    public function getCipStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCipStatsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取定时任务预计执行时间
     *  *
     * @param GetExecuteTimeRequest $request GetExecuteTimeRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExecuteTimeResponse GetExecuteTimeResponse
     */
    public function getExecuteTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExecuteTime',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExecuteTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取定时任务预计执行时间
     *  *
     * @param GetExecuteTimeRequest $request GetExecuteTimeRequest
     *
     * @return GetExecuteTimeResponse GetExecuteTimeResponse
     */
    public function getExecuteTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecuteTimeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取图片规则标签信息
     *  *
     * @param GetImageSceneLabelListConfRequest $request GetImageSceneLabelListConfRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageSceneLabelListConfResponse GetImageSceneLabelListConfResponse
     */
    public function getImageSceneLabelListConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageServiceCode)) {
            $query['ImageServiceCode'] = $request->imageServiceCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImageSceneLabelListConf',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageSceneLabelListConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取图片规则标签信息
     *  *
     * @param GetImageSceneLabelListConfRequest $request GetImageSceneLabelListConfRequest
     *
     * @return GetImageSceneLabelListConfResponse GetImageSceneLabelListConfResponse
     */
    public function getImageSceneLabelListConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageSceneLabelListConfWithOptions($request, $runtime);
    }

    /**
     * @summary oss定时扫描检测周期查询
     *  *
     * @param GetJobNameListRequest $tmpReq  GetJobNameListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobNameListResponse GetJobNameListResponse
     */
    public function getJobNameListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetJobNameListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $query['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobNameList',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary oss定时扫描检测周期查询
     *  *
     * @param GetJobNameListRequest $request GetJobNameListRequest
     *
     * @return GetJobNameListResponse GetJobNameListResponse
     */
    public function getJobNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobNameListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询导入关键词结果
     *  *
     * @param GetKeywordImportResultRequest $request GetKeywordImportResultRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKeywordImportResultResponse GetKeywordImportResultResponse
     */
    public function getKeywordImportResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetKeywordImportResult',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKeywordImportResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询导入关键词结果
     *  *
     * @param GetKeywordImportResultRequest $request GetKeywordImportResultRequest
     *
     * @return GetKeywordImportResultResponse GetKeywordImportResultResponse
     */
    public function getKeywordImportResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeywordImportResultWithOptions($request, $runtime);
    }

    /**
     * @summary oss用量统计
     *  *
     * @param GetOssCheckStatRequest $request GetOssCheckStatRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssCheckStatResponse GetOssCheckStatResponse
     */
    public function getOssCheckStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byMonth)) {
            $body['ByMonth'] = $request->byMonth;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentTaskId)) {
            $body['ParentTaskId'] = $request->parentTaskId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOssCheckStat',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssCheckStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary oss用量统计
     *  *
     * @param GetOssCheckStatRequest $request GetOssCheckStatRequest
     *
     * @return GetOssCheckStatResponse GetOssCheckStatResponse
     */
    public function getOssCheckStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckStatWithOptions($request, $runtime);
    }

    /**
     * @summary 获取OSS检测用户状态
     *  *
     * @param GetOssCheckStatusRequest $request GetOssCheckStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssCheckStatusResponse GetOssCheckStatusResponse
     */
    public function getOssCheckStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssCheckStatus',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssCheckStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取OSS检测用户状态
     *  *
     * @param GetOssCheckStatusRequest $request GetOssCheckStatusRequest
     *
     * @return GetOssCheckStatusResponse GetOssCheckStatusResponse
     */
    public function getOssCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 用户待检测信息
     *  *
     * @param GetScanNumRequest $request GetScanNumRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetScanNumResponse GetScanNumResponse
     */
    public function getScanNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buckets)) {
            $query['Buckets'] = $request->buckets;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScanNum',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScanNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用户待检测信息
     *  *
     * @param GetScanNumRequest $request GetScanNumRequest
     *
     * @return GetScanNumResponse GetScanNumResponse
     */
    public function getScanNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScanNumWithOptions($request, $runtime);
    }

    /**
     * @summary 查询调用结果
     *  *
     * @param GetScanResultRequest $tmpReq  GetScanResultRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetScanResultResponse GetScanResultResponse
     */
    public function getScanResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetScanResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $body['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetScanResult',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询调用结果
     *  *
     * @param GetScanResultRequest $request GetScanResultRequest
     *
     * @return GetScanResultResponse GetScanResultResponse
     */
    public function getScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScanResultWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个服务
     *  *
     * @param GetServiceConfRequest $request GetServiceConfRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceConfResponse GetServiceConfResponse
     */
    public function getServiceConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byDefault)) {
            $body['ByDefault'] = $request->byDefault;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceConf',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个服务
     *  *
     * @param GetServiceConfRequest $request GetServiceConfRequest
     *
     * @return GetServiceConfResponse GetServiceConfResponse
     */
    public function getServiceConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceConfWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个服务
     *  *
     * @param GetServiceConfigRequest $request GetServiceConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceConfigResponse GetServiceConfigResponse
     */
    public function getServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceConfig',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个服务
     *  *
     * @param GetServiceConfigRequest $request GetServiceConfigRequest
     *
     * @return GetServiceConfigResponse GetServiceConfigResponse
     */
    public function getServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个服务的标签配置
     *  *
     * @param GetServiceLabelConfigRequest $request GetServiceLabelConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceLabelConfigResponse GetServiceLabelConfigResponse
     */
    public function getServiceLabelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceLabelConfig',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceLabelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个服务的标签配置
     *  *
     * @param GetServiceLabelConfigRequest $request GetServiceLabelConfigRequest
     *
     * @return GetServiceLabelConfigResponse GetServiceLabelConfigResponse
     */
    public function getServiceLabelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceLabelConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查询oss扫描任务列表
     *  *
     * @param GetStockOssCheckTasksListRequest $tmpReq  GetStockOssCheckTasksListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStockOssCheckTasksListResponse GetStockOssCheckTasksListResponse
     */
    public function getStockOssCheckTasksListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetStockOssCheckTasksListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->isInc)) {
            $query['IsInc'] = $request->isInc;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $body['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStockOssCheckTasksList',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStockOssCheckTasksListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询oss扫描任务列表
     *  *
     * @param GetStockOssCheckTasksListRequest $request GetStockOssCheckTasksListRequest
     *
     * @return GetStockOssCheckTasksListResponse GetStockOssCheckTasksListResponse
     */
    public function getStockOssCheckTasksList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStockOssCheckTasksListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询调用结果
     *  *
     * @param GetTextScanResultRequest $tmpReq  GetTextScanResultRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTextScanResultResponse GetTextScanResultResponse
     */
    public function getTextScanResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetTextScanResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $body['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTextScanResult',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTextScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询调用结果
     *  *
     * @param GetTextScanResultRequest $request GetTextScanResultRequest
     *
     * @return GetTextScanResultResponse GetTextScanResultResponse
     */
    public function getTextScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTextScanResultWithOptions($request, $runtime);
    }

    /**
     * @summary 文件上传获取相应信息
     *  *
     * @param GetUploadInfoRequest $request GetUploadInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadInfoResponse GetUploadInfoResponse
     */
    public function getUploadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUploadInfo',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文件上传获取相应信息
     *  *
     * @param GetUploadInfoRequest $request GetUploadInfoRequest
     *
     * @return GetUploadInfoResponse GetUploadInfoResponse
     */
    public function getUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户购买状态
     *  *
     * @param GetUserBuyStatusRequest $request GetUserBuyStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserBuyStatusResponse GetUserBuyStatusResponse
     */
    public function getUserBuyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserBuyStatus',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserBuyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户购买状态
     *  *
     * @param GetUserBuyStatusRequest $request GetUserBuyStatusRequest
     *
     * @return GetUserBuyStatusResponse GetUserBuyStatusResponse
     */
    public function getUserBuyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserBuyStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 图库列表
     *  *
     * @param ListImageLibRequest $request ListImageLibRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImageLibResponse ListImageLibResponse
     */
    public function listImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImageLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图库列表
     *  *
     * @param ListImageLibRequest $request ListImageLibRequest
     *
     * @return ListImageLibResponse ListImageLibResponse
     */
    public function listImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageLibWithOptions($request, $runtime);
    }

    /**
     * @summary 图片列表 分页
     *  *
     * @param ListImagesFromLibRequest $tmpReq  ListImagesFromLibRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImagesFromLibResponse ListImagesFromLibResponse
     */
    public function listImagesFromLibWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListImagesFromLibShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->imgId)) {
            $body['ImgId'] = $request->imgId;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListImagesFromLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImagesFromLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片列表 分页
     *  *
     * @param ListImagesFromLibRequest $request ListImagesFromLibRequest
     *
     * @return ListImagesFromLibResponse ListImagesFromLibResponse
     */
    public function listImagesFromLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesFromLibWithOptions($request, $runtime);
    }

    /**
     * @summary 关键词库列表
     *  *
     * @param ListKeywordLibsRequest $request ListKeywordLibsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListKeywordLibsResponse ListKeywordLibsResponse
     */
    public function listKeywordLibsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListKeywordLibs',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListKeywordLibsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关键词库列表
     *  *
     * @param ListKeywordLibsRequest $request ListKeywordLibsRequest
     *
     * @return ListKeywordLibsResponse ListKeywordLibsResponse
     */
    public function listKeywordLibs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeywordLibsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询关键词列表
     *  *
     * @param ListKeywordsRequest $tmpReq  ListKeywordsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListKeywordsResponse ListKeywordsResponse
     */
    public function listKeywordsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListKeywordsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->word)) {
            $body['Word'] = $request->word;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListKeywords',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询关键词列表
     *  *
     * @param ListKeywordsRequest $request ListKeywordsRequest
     *
     * @return ListKeywordsResponse ListKeywordsResponse
     */
    public function listKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeywordsWithOptions($request, $runtime);
    }

    /**
     * @summary oss扫描结果查询
     *  *
     * @param ListOssCheckResultRequest $tmpReq  ListOssCheckResultRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOssCheckResultResponse ListOssCheckResultResponse
     */
    public function listOssCheckResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListOssCheckResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->finishNum)) {
            $query['FinishNum'] = $request->finishNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $query['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOssCheckResult',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOssCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary oss扫描结果查询
     *  *
     * @param ListOssCheckResultRequest $request ListOssCheckResultRequest
     *
     * @return ListOssCheckResultResponse ListOssCheckResultResponse
     */
    public function listOssCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOssCheckResultWithOptions($request, $runtime);
    }

    /**
     * @summary 获取服务列表
     *  *
     * @param ListServiceConfigsRequest $request ListServiceConfigsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceConfigsResponse ListServiceConfigsResponse
     */
    public function listServiceConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classify)) {
            $query['Classify'] = $request->classify;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->useStatus)) {
            $query['UseStatus'] = $request->useStatus;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServiceConfigs',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务列表
     *  *
     * @param ListServiceConfigsRequest $request ListServiceConfigsRequest
     *
     * @return ListServiceConfigsResponse ListServiceConfigsResponse
     */
    public function listServiceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑服务
     *  *
     * @param ModifyServiceInfoRequest $request ModifyServiceInfoRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyServiceInfoResponse ModifyServiceInfoResponse
     */
    public function modifyServiceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->serviceDesc)) {
            $body['ServiceDesc'] = $request->serviceDesc;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyServiceInfo',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyServiceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑服务
     *  *
     * @param ModifyServiceInfoRequest $request ModifyServiceInfoRequest
     *
     * @return ModifyServiceInfoResponse ModifyServiceInfoResponse
     */
    public function modifyServiceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyServiceInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 更新证据转存配置
     *  *
     * @param UpdateBackupConfigRequest $request UpdateBackupConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBackupConfigResponse UpdateBackupConfigResponse
     */
    public function updateBackupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupConfig)) {
            $query['BackupConfig'] = $request->backupConfig;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBackupConfig',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBackupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新证据转存配置
     *  *
     * @param UpdateBackupConfigRequest $request UpdateBackupConfigRequest
     *
     * @return UpdateBackupConfigResponse UpdateBackupConfigResponse
     */
    public function updateBackupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBackupConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑图库
     *  *
     * @param UpdateImageLibRequest $request UpdateImageLibRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateImageLibResponse UpdateImageLibResponse
     */
    public function updateImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->freeInspection)) {
            $body['FreeInspection'] = $request->freeInspection;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateImageLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑图库
     *  *
     * @param UpdateImageLibRequest $request UpdateImageLibRequest
     *
     * @return UpdateImageLibResponse UpdateImageLibResponse
     */
    public function updateImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageLibWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑图库免检配置
     *  *
     * @param UpdateImageLibFreeInspectionRequest $tmpReq  UpdateImageLibFreeInspectionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateImageLibFreeInspectionResponse UpdateImageLibFreeInspectionResponse
     */
    public function updateImageLibFreeInspectionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateImageLibFreeInspectionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->configShrink)) {
            $body['Config'] = $request->configShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateImageLibFreeInspection',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateImageLibFreeInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑图库免检配置
     *  *
     * @param UpdateImageLibFreeInspectionRequest $request UpdateImageLibFreeInspectionRequest
     *
     * @return UpdateImageLibFreeInspectionResponse UpdateImageLibFreeInspectionResponse
     */
    public function updateImageLibFreeInspection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageLibFreeInspectionWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑关键词库
     *  *
     * @param UpdateKeywordLibRequest $request UpdateKeywordLibRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateKeywordLibResponse UpdateKeywordLibResponse
     */
    public function updateKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateKeywordLib',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑关键词库
     *  *
     * @param UpdateKeywordLibRequest $request UpdateKeywordLibRequest
     *
     * @return UpdateKeywordLibResponse UpdateKeywordLibResponse
     */
    public function updateKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @summary 检测结果反馈
     *  *
     * @param UpdateScanResultFeedbackRequest $request UpdateScanResultFeedbackRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateScanResultFeedbackResponse UpdateScanResultFeedbackResponse
     */
    public function updateScanResultFeedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->feedback)) {
            $body['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->queryRequestId)) {
            $body['QueryRequestId'] = $request->queryRequestId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateScanResultFeedback',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScanResultFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检测结果反馈
     *  *
     * @param UpdateScanResultFeedbackRequest $request UpdateScanResultFeedbackRequest
     *
     * @return UpdateScanResultFeedbackResponse UpdateScanResultFeedbackResponse
     */
    public function updateScanResultFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScanResultFeedbackWithOptions($request, $runtime);
    }

    /**
     * @summary 更新服务
     *  *
     * @param UpdateServiceConfigRequest $request UpdateServiceConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceConfigResponse UpdateServiceConfigResponse
     */
    public function updateServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->fileConfig)) {
            $body['FileConfig'] = $request->fileConfig;
        }
        if (!Utils::isUnset($request->keywordFilterLibs)) {
            $body['KeywordFilterLibs'] = $request->keywordFilterLibs;
        }
        if (!Utils::isUnset($request->keywordHitLibs)) {
            $body['KeywordHitLibs'] = $request->keywordHitLibs;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sceneConfig)) {
            $body['SceneConfig'] = $request->sceneConfig;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->videoConfig)) {
            $body['VideoConfig'] = $request->videoConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceConfig',
            'version'     => '2022-09-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新服务
     *  *
     * @param UpdateServiceConfigRequest $request UpdateServiceConfigRequest
     *
     * @return UpdateServiceConfigResponse UpdateServiceConfigResponse
     */
    public function updateServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceConfigWithOptions($request, $runtime);
    }
}
