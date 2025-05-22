<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\AyncTradeDocumentPackageExtractSmartAppRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\AyncTradeDocumentPackageExtractSmartAppResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\AyncTradeDocumentPackageExtractSmartAppShrinkRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocParserResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocParserResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocStructureResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocStructureResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentCompareResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentCompareResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentConvertResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentConvertResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentExtractResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentExtractResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetPageNumRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetPageNumResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetTableUnderstandingResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetTableUnderstandingResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToExcelJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToExcelJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToExcelJobShrinkRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToMarkdownJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToMarkdownJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToMarkdownJobShrinkRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToPdfJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToPdfJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToPdfJobShrinkRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToWordJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToWordJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToWordJobShrinkRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToExcelJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToExcelJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToExcelJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToImageJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToImageJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToImageJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToMarkdownJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToMarkdownJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToMarkdownJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToWordJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToWordJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToWordJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDigitalDocStructureJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDigitalDocStructureJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDigitalDocStructureJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocStructureJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocStructureJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocStructureJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocumentExtractJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocumentExtractJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocumentExtractJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitTableUnderstandingJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitTableUnderstandingJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitTableUnderstandingJobResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Docmindapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'docmind-api.aliyuncs.com',
            'ap-northeast-2-pop' => 'docmind-api.aliyuncs.com',
            'ap-south-1' => 'docmind-api.aliyuncs.com',
            'ap-southeast-1' => 'docmind-api.aliyuncs.com',
            'ap-southeast-2' => 'docmind-api.aliyuncs.com',
            'ap-southeast-3' => 'docmind-api.aliyuncs.com',
            'ap-southeast-5' => 'docmind-api.aliyuncs.com',
            'cn-beijing' => 'docmind-api.aliyuncs.com',
            'cn-beijing-finance-1' => 'docmind-api.aliyuncs.com',
            'cn-beijing-finance-pop' => 'docmind-api.aliyuncs.com',
            'cn-beijing-gov-1' => 'docmind-api.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'docmind-api.aliyuncs.com',
            'cn-chengdu' => 'docmind-api.aliyuncs.com',
            'cn-edge-1' => 'docmind-api.aliyuncs.com',
            'cn-fujian' => 'docmind-api.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-finance' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-test-306' => 'docmind-api.aliyuncs.com',
            'cn-hongkong' => 'docmind-api.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'docmind-api.aliyuncs.com',
            'cn-huhehaote' => 'docmind-api.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'docmind-api.aliyuncs.com',
            'cn-north-2-gov-1' => 'docmind-api.aliyuncs.com',
            'cn-qingdao' => 'docmind-api.aliyuncs.com',
            'cn-qingdao-nebula' => 'docmind-api.aliyuncs.com',
            'cn-shanghai' => 'docmind-api.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'docmind-api.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'docmind-api.aliyuncs.com',
            'cn-shanghai-finance-1' => 'docmind-api.aliyuncs.com',
            'cn-shanghai-inner' => 'docmind-api.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'docmind-api.aliyuncs.com',
            'cn-shenzhen' => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-inner' => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'docmind-api.aliyuncs.com',
            'cn-wuhan' => 'docmind-api.aliyuncs.com',
            'cn-wulanchabu' => 'docmind-api.aliyuncs.com',
            'cn-yushanfang' => 'docmind-api.aliyuncs.com',
            'cn-zhangbei' => 'docmind-api.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'docmind-api.aliyuncs.com',
            'cn-zhangjiakou' => 'docmind-api.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'docmind-api.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'docmind-api.aliyuncs.com',
            'eu-central-1' => 'docmind-api.aliyuncs.com',
            'eu-west-1' => 'docmind-api.aliyuncs.com',
            'eu-west-1-oxs' => 'docmind-api.aliyuncs.com',
            'me-east-1' => 'docmind-api.aliyuncs.com',
            'rus-west-1-pop' => 'docmind-api.aliyuncs.com',
            'us-east-1' => 'docmind-api.aliyuncs.com',
            'us-west-1' => 'docmind-api.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('docmind-api', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 整票识别.
     *
     * @param tmpReq - AyncTradeDocumentPackageExtractSmartAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AyncTradeDocumentPackageExtractSmartAppResponse
     *
     * @param AyncTradeDocumentPackageExtractSmartAppRequest $tmpReq
     * @param RuntimeOptions                                 $runtime
     *
     * @return AyncTradeDocumentPackageExtractSmartAppResponse
     */
    public function ayncTradeDocumentPackageExtractSmartAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AyncTradeDocumentPackageExtractSmartAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customExtractionRange) {
            $request->customExtractionRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customExtractionRange, 'CustomExtractionRange', 'json');
        }

        $query = [];
        if (null !== $request->customExtractionRangeShrink) {
            @$query['CustomExtractionRange'] = $request->customExtractionRangeShrink;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AyncTradeDocumentPackageExtractSmartApp',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AyncTradeDocumentPackageExtractSmartAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 整票识别.
     *
     * @param request - AyncTradeDocumentPackageExtractSmartAppRequest
     *
     * @returns AyncTradeDocumentPackageExtractSmartAppResponse
     *
     * @param AyncTradeDocumentPackageExtractSmartAppRequest $request
     *
     * @return AyncTradeDocumentPackageExtractSmartAppResponse
     */
    public function ayncTradeDocumentPackageExtractSmartApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ayncTradeDocumentPackageExtractSmartAppWithOptions($request, $runtime);
    }

    /**
     * 文档结构化流式接口.
     *
     * @param request - GetDocParserResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocParserResultResponse
     *
     * @param GetDocParserResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDocParserResultResponse
     */
    public function getDocParserResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->layoutNum) {
            @$query['LayoutNum'] = $request->layoutNum;
        }

        if (null !== $request->layoutStepSize) {
            @$query['LayoutStepSize'] = $request->layoutStepSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDocParserResult',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocParserResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档结构化流式接口.
     *
     * @param request - GetDocParserResultRequest
     *
     * @returns GetDocParserResultResponse
     *
     * @param GetDocParserResultRequest $request
     *
     * @return GetDocParserResultResponse
     */
    public function getDocParserResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocParserResultWithOptions($request, $runtime);
    }

    /**
     * 文档智能解析结果查询.
     *
     * @param request - GetDocStructureResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocStructureResultResponse
     *
     * @param GetDocStructureResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDocStructureResultResponse
     */
    public function getDocStructureResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->imageStrategy) {
            @$query['ImageStrategy'] = $request->imageStrategy;
        }

        if (null !== $request->revealMarkdown) {
            @$query['RevealMarkdown'] = $request->revealMarkdown;
        }

        if (null !== $request->useUrlResponseBody) {
            @$query['UseUrlResponseBody'] = $request->useUrlResponseBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDocStructureResult',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocStructureResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档智能解析结果查询.
     *
     * @param request - GetDocStructureResultRequest
     *
     * @returns GetDocStructureResultResponse
     *
     * @param GetDocStructureResultRequest $request
     *
     * @return GetDocStructureResultResponse
     */
    public function getDocStructureResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocStructureResultWithOptions($request, $runtime);
    }

    /**
     * 文档对比结果查询.
     *
     * @param request - GetDocumentCompareResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentCompareResultResponse
     *
     * @param GetDocumentCompareResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDocumentCompareResultResponse
     */
    public function getDocumentCompareResultWithOptions($request, $runtime)
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
            'action' => 'GetDocumentCompareResult',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocumentCompareResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档对比结果查询.
     *
     * @param request - GetDocumentCompareResultRequest
     *
     * @returns GetDocumentCompareResultResponse
     *
     * @param GetDocumentCompareResultRequest $request
     *
     * @return GetDocumentCompareResultResponse
     */
    public function getDocumentCompareResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentCompareResultWithOptions($request, $runtime);
    }

    /**
     * 文档转换结果查询.
     *
     * @param request - GetDocumentConvertResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentConvertResultResponse
     *
     * @param GetDocumentConvertResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDocumentConvertResultResponse
     */
    public function getDocumentConvertResultWithOptions($request, $runtime)
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
            'action' => 'GetDocumentConvertResult',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocumentConvertResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档转换结果查询.
     *
     * @param request - GetDocumentConvertResultRequest
     *
     * @returns GetDocumentConvertResultResponse
     *
     * @param GetDocumentConvertResultRequest $request
     *
     * @return GetDocumentConvertResultResponse
     */
    public function getDocumentConvertResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentConvertResultWithOptions($request, $runtime);
    }

    /**
     * 文档抽取结果查询.
     *
     * @param request - GetDocumentExtractResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentExtractResultResponse
     *
     * @param GetDocumentExtractResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDocumentExtractResultResponse
     */
    public function getDocumentExtractResultWithOptions($request, $runtime)
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
            'action' => 'GetDocumentExtractResult',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocumentExtractResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档抽取结果查询.
     *
     * @param request - GetDocumentExtractResultRequest
     *
     * @returns GetDocumentExtractResultResponse
     *
     * @param GetDocumentExtractResultRequest $request
     *
     * @return GetDocumentExtractResultResponse
     */
    public function getDocumentExtractResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentExtractResultWithOptions($request, $runtime);
    }

    /**
     * openmind.
     *
     * @param request - GetPageNumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPageNumResponse
     *
     * @param GetPageNumRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetPageNumResponse
     */
    public function getPageNumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPageNum',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPageNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * openmind.
     *
     * @param request - GetPageNumRequest
     *
     * @returns GetPageNumResponse
     *
     * @param GetPageNumRequest $request
     *
     * @return GetPageNumResponse
     */
    public function getPageNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPageNumWithOptions($request, $runtime);
    }

    /**
     * 表格智能解析结果查询.
     *
     * @param request - GetTableUnderstandingResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableUnderstandingResultResponse
     *
     * @param GetTableUnderstandingResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetTableUnderstandingResultResponse
     */
    public function getTableUnderstandingResultWithOptions($request, $runtime)
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
            'action' => 'GetTableUnderstandingResult',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTableUnderstandingResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 表格智能解析结果查询.
     *
     * @param request - GetTableUnderstandingResultRequest
     *
     * @returns GetTableUnderstandingResultResponse
     *
     * @param GetTableUnderstandingResultRequest $request
     *
     * @return GetTableUnderstandingResultResponse
     */
    public function getTableUnderstandingResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableUnderstandingResultWithOptions($request, $runtime);
    }

    /**
     * 获取文档智能解析处理状态
     *
     * @param request - QueryDocParserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDocParserStatusResponse
     *
     * @param QueryDocParserStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryDocParserStatusResponse
     */
    public function queryDocParserStatusWithOptions($request, $runtime)
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
            'action' => 'QueryDocParserStatus',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDocParserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取文档智能解析处理状态
     *
     * @param request - QueryDocParserStatusRequest
     *
     * @returns QueryDocParserStatusResponse
     *
     * @param QueryDocParserStatusRequest $request
     *
     * @return QueryDocParserStatusResponse
     */
    public function queryDocParserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDocParserStatusWithOptions($request, $runtime);
    }

    /**
     * 图片转excel.
     *
     * @param tmpReq - SubmitConvertImageToExcelJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitConvertImageToExcelJobResponse
     *
     * @param SubmitConvertImageToExcelJobRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitConvertImageToExcelJobResponse
     */
    public function submitConvertImageToExcelJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitConvertImageToExcelJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->imageNames) {
            $request->imageNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'simple');
        }

        if (null !== $tmpReq->imageUrls) {
            $request->imageUrlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageUrls, 'ImageUrls', 'simple');
        }

        $query = [];
        if (null !== $request->forceMergeExcel) {
            @$query['ForceMergeExcel'] = $request->forceMergeExcel;
        }

        if (null !== $request->imageNameExtension) {
            @$query['ImageNameExtension'] = $request->imageNameExtension;
        }

        if (null !== $request->imageNamesShrink) {
            @$query['ImageNames'] = $request->imageNamesShrink;
        }

        if (null !== $request->imageUrlsShrink) {
            @$query['ImageUrls'] = $request->imageUrlsShrink;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitConvertImageToExcelJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitConvertImageToExcelJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片转excel.
     *
     * @param request - SubmitConvertImageToExcelJobRequest
     *
     * @returns SubmitConvertImageToExcelJobResponse
     *
     * @param SubmitConvertImageToExcelJobRequest $request
     *
     * @return SubmitConvertImageToExcelJobResponse
     */
    public function submitConvertImageToExcelJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertImageToExcelJobWithOptions($request, $runtime);
    }

    /**
     * 图片转markdown.
     *
     * @param tmpReq - SubmitConvertImageToMarkdownJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitConvertImageToMarkdownJobResponse
     *
     * @param SubmitConvertImageToMarkdownJobRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitConvertImageToMarkdownJobResponse
     */
    public function submitConvertImageToMarkdownJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitConvertImageToMarkdownJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->imageNames) {
            $request->imageNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'simple');
        }

        if (null !== $tmpReq->imageUrls) {
            $request->imageUrlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageUrls, 'ImageUrls', 'simple');
        }

        $query = [];
        if (null !== $request->imageNameExtension) {
            @$query['ImageNameExtension'] = $request->imageNameExtension;
        }

        if (null !== $request->imageNamesShrink) {
            @$query['ImageNames'] = $request->imageNamesShrink;
        }

        if (null !== $request->imageUrlsShrink) {
            @$query['ImageUrls'] = $request->imageUrlsShrink;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitConvertImageToMarkdownJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitConvertImageToMarkdownJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片转markdown.
     *
     * @param request - SubmitConvertImageToMarkdownJobRequest
     *
     * @returns SubmitConvertImageToMarkdownJobResponse
     *
     * @param SubmitConvertImageToMarkdownJobRequest $request
     *
     * @return SubmitConvertImageToMarkdownJobResponse
     */
    public function submitConvertImageToMarkdownJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertImageToMarkdownJobWithOptions($request, $runtime);
    }

    /**
     * 图片转pdf.
     *
     * @param tmpReq - SubmitConvertImageToPdfJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitConvertImageToPdfJobResponse
     *
     * @param SubmitConvertImageToPdfJobRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitConvertImageToPdfJobResponse
     */
    public function submitConvertImageToPdfJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitConvertImageToPdfJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->imageNames) {
            $request->imageNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'simple');
        }

        if (null !== $tmpReq->imageUrls) {
            $request->imageUrlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageUrls, 'ImageUrls', 'simple');
        }

        $query = [];
        if (null !== $request->imageNameExtension) {
            @$query['ImageNameExtension'] = $request->imageNameExtension;
        }

        if (null !== $request->imageNamesShrink) {
            @$query['ImageNames'] = $request->imageNamesShrink;
        }

        if (null !== $request->imageUrlsShrink) {
            @$query['ImageUrls'] = $request->imageUrlsShrink;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitConvertImageToPdfJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitConvertImageToPdfJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片转pdf.
     *
     * @param request - SubmitConvertImageToPdfJobRequest
     *
     * @returns SubmitConvertImageToPdfJobResponse
     *
     * @param SubmitConvertImageToPdfJobRequest $request
     *
     * @return SubmitConvertImageToPdfJobResponse
     */
    public function submitConvertImageToPdfJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertImageToPdfJobWithOptions($request, $runtime);
    }

    /**
     * 图片转word.
     *
     * @param tmpReq - SubmitConvertImageToWordJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitConvertImageToWordJobResponse
     *
     * @param SubmitConvertImageToWordJobRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitConvertImageToWordJobResponse
     */
    public function submitConvertImageToWordJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitConvertImageToWordJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->imageNames) {
            $request->imageNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'simple');
        }

        if (null !== $tmpReq->imageUrls) {
            $request->imageUrlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageUrls, 'ImageUrls', 'simple');
        }

        $query = [];
        if (null !== $request->imageNameExtension) {
            @$query['ImageNameExtension'] = $request->imageNameExtension;
        }

        if (null !== $request->imageNamesShrink) {
            @$query['ImageNames'] = $request->imageNamesShrink;
        }

        if (null !== $request->imageUrlsShrink) {
            @$query['ImageUrls'] = $request->imageUrlsShrink;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitConvertImageToWordJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitConvertImageToWordJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片转word.
     *
     * @param request - SubmitConvertImageToWordJobRequest
     *
     * @returns SubmitConvertImageToWordJobResponse
     *
     * @param SubmitConvertImageToWordJobRequest $request
     *
     * @return SubmitConvertImageToWordJobResponse
     */
    public function submitConvertImageToWordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertImageToWordJobWithOptions($request, $runtime);
    }

    /**
     * pdf转excel.
     *
     * @param request - SubmitConvertPdfToExcelJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitConvertPdfToExcelJobResponse
     *
     * @param SubmitConvertPdfToExcelJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitConvertPdfToExcelJobResponse
     */
    public function submitConvertPdfToExcelJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->forceExportInnerImage) {
            @$query['ForceExportInnerImage'] = $request->forceExportInnerImage;
        }

        if (null !== $request->forceMergeExcel) {
            @$query['ForceMergeExcel'] = $request->forceMergeExcel;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitConvertPdfToExcelJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitConvertPdfToExcelJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * pdf转excel.
     *
     * @param request - SubmitConvertPdfToExcelJobRequest
     *
     * @returns SubmitConvertPdfToExcelJobResponse
     *
     * @param SubmitConvertPdfToExcelJobRequest $request
     *
     * @return SubmitConvertPdfToExcelJobResponse
     */
    public function submitConvertPdfToExcelJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertPdfToExcelJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitConvertPdfToExcelJobAdvanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SubmitConvertPdfToExcelJobResponse
     */
    public function submitConvertPdfToExcelJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitConvertPdfToExcelJobReq = new SubmitConvertPdfToExcelJobRequest([]);
        Utils::convert($request, $submitConvertPdfToExcelJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitConvertPdfToExcelJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitConvertPdfToExcelJobWithOptions($submitConvertPdfToExcelJobReq, $runtime);
    }

    /**
     * pdf转图片.
     *
     * @param request - SubmitConvertPdfToImageJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitConvertPdfToImageJobResponse
     *
     * @param SubmitConvertPdfToImageJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitConvertPdfToImageJobResponse
     */
    public function submitConvertPdfToImageJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitConvertPdfToImageJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitConvertPdfToImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * pdf转图片.
     *
     * @param request - SubmitConvertPdfToImageJobRequest
     *
     * @returns SubmitConvertPdfToImageJobResponse
     *
     * @param SubmitConvertPdfToImageJobRequest $request
     *
     * @return SubmitConvertPdfToImageJobResponse
     */
    public function submitConvertPdfToImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertPdfToImageJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitConvertPdfToImageJobAdvanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SubmitConvertPdfToImageJobResponse
     */
    public function submitConvertPdfToImageJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitConvertPdfToImageJobReq = new SubmitConvertPdfToImageJobRequest([]);
        Utils::convert($request, $submitConvertPdfToImageJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitConvertPdfToImageJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitConvertPdfToImageJobWithOptions($submitConvertPdfToImageJobReq, $runtime);
    }

    /**
     * pdf转markdown.
     *
     * @param request - SubmitConvertPdfToMarkdownJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitConvertPdfToMarkdownJobResponse
     *
     * @param SubmitConvertPdfToMarkdownJobRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SubmitConvertPdfToMarkdownJobResponse
     */
    public function submitConvertPdfToMarkdownJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitConvertPdfToMarkdownJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitConvertPdfToMarkdownJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * pdf转markdown.
     *
     * @param request - SubmitConvertPdfToMarkdownJobRequest
     *
     * @returns SubmitConvertPdfToMarkdownJobResponse
     *
     * @param SubmitConvertPdfToMarkdownJobRequest $request
     *
     * @return SubmitConvertPdfToMarkdownJobResponse
     */
    public function submitConvertPdfToMarkdownJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertPdfToMarkdownJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitConvertPdfToMarkdownJobAdvanceRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SubmitConvertPdfToMarkdownJobResponse
     */
    public function submitConvertPdfToMarkdownJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitConvertPdfToMarkdownJobReq = new SubmitConvertPdfToMarkdownJobRequest([]);
        Utils::convert($request, $submitConvertPdfToMarkdownJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitConvertPdfToMarkdownJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitConvertPdfToMarkdownJobWithOptions($submitConvertPdfToMarkdownJobReq, $runtime);
    }

    /**
     * pdf转word.
     *
     * @param request - SubmitConvertPdfToWordJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitConvertPdfToWordJobResponse
     *
     * @param SubmitConvertPdfToWordJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitConvertPdfToWordJobResponse
     */
    public function submitConvertPdfToWordJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->forceExportInnerImage) {
            @$query['ForceExportInnerImage'] = $request->forceExportInnerImage;
        }

        if (null !== $request->formulaEnhancement) {
            @$query['FormulaEnhancement'] = $request->formulaEnhancement;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitConvertPdfToWordJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitConvertPdfToWordJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * pdf转word.
     *
     * @param request - SubmitConvertPdfToWordJobRequest
     *
     * @returns SubmitConvertPdfToWordJobResponse
     *
     * @param SubmitConvertPdfToWordJobRequest $request
     *
     * @return SubmitConvertPdfToWordJobResponse
     */
    public function submitConvertPdfToWordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertPdfToWordJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitConvertPdfToWordJobAdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SubmitConvertPdfToWordJobResponse
     */
    public function submitConvertPdfToWordJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitConvertPdfToWordJobReq = new SubmitConvertPdfToWordJobRequest([]);
        Utils::convert($request, $submitConvertPdfToWordJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitConvertPdfToWordJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitConvertPdfToWordJobWithOptions($submitConvertPdfToWordJobReq, $runtime);
    }

    /**
     * 电子解析.
     *
     * @param request - SubmitDigitalDocStructureJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDigitalDocStructureJobResponse
     *
     * @param SubmitDigitalDocStructureJobRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitDigitalDocStructureJobResponse
     */
    public function submitDigitalDocStructureJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileNameExtension) {
            @$query['FileNameExtension'] = $request->fileNameExtension;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->imageStrategy) {
            @$query['ImageStrategy'] = $request->imageStrategy;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        if (null !== $request->revealMarkdown) {
            @$query['RevealMarkdown'] = $request->revealMarkdown;
        }

        if (null !== $request->useUrlResponseBody) {
            @$query['UseUrlResponseBody'] = $request->useUrlResponseBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDigitalDocStructureJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDigitalDocStructureJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 电子解析.
     *
     * @param request - SubmitDigitalDocStructureJobRequest
     *
     * @returns SubmitDigitalDocStructureJobResponse
     *
     * @param SubmitDigitalDocStructureJobRequest $request
     *
     * @return SubmitDigitalDocStructureJobResponse
     */
    public function submitDigitalDocStructureJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDigitalDocStructureJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDigitalDocStructureJobAdvanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SubmitDigitalDocStructureJobResponse
     */
    public function submitDigitalDocStructureJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitDigitalDocStructureJobReq = new SubmitDigitalDocStructureJobRequest([]);
        Utils::convert($request, $submitDigitalDocStructureJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDigitalDocStructureJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDigitalDocStructureJobWithOptions($submitDigitalDocStructureJobReq, $runtime);
    }

    /**
     * 文档智能解析流式输出.
     *
     * @param request - SubmitDocParserJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDocParserJobResponse
     *
     * @param SubmitDocParserJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitDocParserJobResponse
     */
    public function submitDocParserJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileNameExtension) {
            @$query['FileNameExtension'] = $request->fileNameExtension;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->formulaEnhancement) {
            @$query['FormulaEnhancement'] = $request->formulaEnhancement;
        }

        if (null !== $request->llmEnhancement) {
            @$query['LlmEnhancement'] = $request->llmEnhancement;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDocParserJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDocParserJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档智能解析流式输出.
     *
     * @param request - SubmitDocParserJobRequest
     *
     * @returns SubmitDocParserJobResponse
     *
     * @param SubmitDocParserJobRequest $request
     *
     * @return SubmitDocParserJobResponse
     */
    public function submitDocParserJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDocParserJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDocParserJobAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitDocParserJobResponse
     */
    public function submitDocParserJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitDocParserJobReq = new SubmitDocParserJobRequest([]);
        Utils::convert($request, $submitDocParserJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocParserJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocParserJobWithOptions($submitDocParserJobReq, $runtime);
    }

    /**
     * 文档智能解析.
     *
     * @param request - SubmitDocStructureJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDocStructureJobResponse
     *
     * @param SubmitDocStructureJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDocStructureJobResponse
     */
    public function submitDocStructureJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowPptFormat) {
            @$query['AllowPptFormat'] = $request->allowPptFormat;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileNameExtension) {
            @$query['FileNameExtension'] = $request->fileNameExtension;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->formulaEnhancement) {
            @$query['FormulaEnhancement'] = $request->formulaEnhancement;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->structureType) {
            @$query['StructureType'] = $request->structureType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDocStructureJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDocStructureJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档智能解析.
     *
     * @param request - SubmitDocStructureJobRequest
     *
     * @returns SubmitDocStructureJobResponse
     *
     * @param SubmitDocStructureJobRequest $request
     *
     * @return SubmitDocStructureJobResponse
     */
    public function submitDocStructureJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDocStructureJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDocStructureJobAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitDocStructureJobResponse
     */
    public function submitDocStructureJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitDocStructureJobReq = new SubmitDocStructureJobRequest([]);
        Utils::convert($request, $submitDocStructureJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocStructureJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocStructureJobWithOptions($submitDocStructureJobReq, $runtime);
    }

    /**
     * 文档抽取.
     *
     * @param request - SubmitDocumentExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDocumentExtractJobResponse
     *
     * @param SubmitDocumentExtractJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitDocumentExtractJobResponse
     */
    public function submitDocumentExtractJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileNameExtension) {
            @$query['FileNameExtension'] = $request->fileNameExtension;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDocumentExtractJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDocumentExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档抽取.
     *
     * @param request - SubmitDocumentExtractJobRequest
     *
     * @returns SubmitDocumentExtractJobResponse
     *
     * @param SubmitDocumentExtractJobRequest $request
     *
     * @return SubmitDocumentExtractJobResponse
     */
    public function submitDocumentExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDocumentExtractJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDocumentExtractJobAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitDocumentExtractJobResponse
     */
    public function submitDocumentExtractJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitDocumentExtractJobReq = new SubmitDocumentExtractJobRequest([]);
        Utils::convert($request, $submitDocumentExtractJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocumentExtractJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocumentExtractJobWithOptions($submitDocumentExtractJobReq, $runtime);
    }

    /**
     * 表格智能解析.
     *
     * @param request - SubmitTableUnderstandingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTableUnderstandingJobResponse
     *
     * @param SubmitTableUnderstandingJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitTableUnderstandingJobResponse
     */
    public function submitTableUnderstandingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileNameExtension) {
            @$query['FileNameExtension'] = $request->fileNameExtension;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitTableUnderstandingJob',
            'version' => '2022-07-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTableUnderstandingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 表格智能解析.
     *
     * @param request - SubmitTableUnderstandingJobRequest
     *
     * @returns SubmitTableUnderstandingJobResponse
     *
     * @param SubmitTableUnderstandingJobRequest $request
     *
     * @return SubmitTableUnderstandingJobResponse
     */
    public function submitTableUnderstandingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTableUnderstandingJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTableUnderstandingJobAdvanceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SubmitTableUnderstandingJobResponse
     */
    public function submitTableUnderstandingJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitTableUnderstandingJobReq = new SubmitTableUnderstandingJobRequest([]);
        Utils::convert($request, $submitTableUnderstandingJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitTableUnderstandingJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitTableUnderstandingJobWithOptions($submitTableUnderstandingJobReq, $runtime);
    }
}
