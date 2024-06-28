<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\AyncTradeDocumentPackageExtractSmartAppRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\AyncTradeDocumentPackageExtractSmartAppResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\AyncTradeDocumentPackageExtractSmartAppShrinkRequest;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Docmindapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'docmind-api.aliyuncs.com',
            'ap-northeast-2-pop'          => 'docmind-api.aliyuncs.com',
            'ap-south-1'                  => 'docmind-api.aliyuncs.com',
            'ap-southeast-1'              => 'docmind-api.aliyuncs.com',
            'ap-southeast-2'              => 'docmind-api.aliyuncs.com',
            'ap-southeast-3'              => 'docmind-api.aliyuncs.com',
            'ap-southeast-5'              => 'docmind-api.aliyuncs.com',
            'cn-beijing'                  => 'docmind-api.aliyuncs.com',
            'cn-beijing-finance-1'        => 'docmind-api.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'docmind-api.aliyuncs.com',
            'cn-beijing-gov-1'            => 'docmind-api.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'docmind-api.aliyuncs.com',
            'cn-chengdu'                  => 'docmind-api.aliyuncs.com',
            'cn-edge-1'                   => 'docmind-api.aliyuncs.com',
            'cn-fujian'                   => 'docmind-api.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-finance'         => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'docmind-api.aliyuncs.com',
            'cn-hongkong'                 => 'docmind-api.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'docmind-api.aliyuncs.com',
            'cn-huhehaote'                => 'docmind-api.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'docmind-api.aliyuncs.com',
            'cn-north-2-gov-1'            => 'docmind-api.aliyuncs.com',
            'cn-qingdao'                  => 'docmind-api.aliyuncs.com',
            'cn-qingdao-nebula'           => 'docmind-api.aliyuncs.com',
            'cn-shanghai'                 => 'docmind-api.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'docmind-api.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'docmind-api.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'docmind-api.aliyuncs.com',
            'cn-shanghai-inner'           => 'docmind-api.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'docmind-api.aliyuncs.com',
            'cn-shenzhen'                 => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-inner'           => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'docmind-api.aliyuncs.com',
            'cn-wuhan'                    => 'docmind-api.aliyuncs.com',
            'cn-wulanchabu'               => 'docmind-api.aliyuncs.com',
            'cn-yushanfang'               => 'docmind-api.aliyuncs.com',
            'cn-zhangbei'                 => 'docmind-api.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'docmind-api.aliyuncs.com',
            'cn-zhangjiakou'              => 'docmind-api.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'docmind-api.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'docmind-api.aliyuncs.com',
            'eu-central-1'                => 'docmind-api.aliyuncs.com',
            'eu-west-1'                   => 'docmind-api.aliyuncs.com',
            'eu-west-1-oxs'               => 'docmind-api.aliyuncs.com',
            'me-east-1'                   => 'docmind-api.aliyuncs.com',
            'rus-west-1-pop'              => 'docmind-api.aliyuncs.com',
            'us-east-1'                   => 'docmind-api.aliyuncs.com',
            'us-west-1'                   => 'docmind-api.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 整票识别
     *  *
     * @param AyncTradeDocumentPackageExtractSmartAppRequest $tmpReq  AyncTradeDocumentPackageExtractSmartAppRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AyncTradeDocumentPackageExtractSmartAppResponse AyncTradeDocumentPackageExtractSmartAppResponse
     */
    public function ayncTradeDocumentPackageExtractSmartAppWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AyncTradeDocumentPackageExtractSmartAppShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customExtractionRange)) {
            $request->customExtractionRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customExtractionRange, 'CustomExtractionRange', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->customExtractionRangeShrink)) {
            $query['CustomExtractionRange'] = $request->customExtractionRangeShrink;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->option)) {
            $query['Option'] = $request->option;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AyncTradeDocumentPackageExtractSmartApp',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AyncTradeDocumentPackageExtractSmartAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 整票识别
     *  *
     * @param AyncTradeDocumentPackageExtractSmartAppRequest $request AyncTradeDocumentPackageExtractSmartAppRequest
     *
     * @return AyncTradeDocumentPackageExtractSmartAppResponse AyncTradeDocumentPackageExtractSmartAppResponse
     */
    public function ayncTradeDocumentPackageExtractSmartApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ayncTradeDocumentPackageExtractSmartAppWithOptions($request, $runtime);
    }

    /**
     * @summary 文档智能解析结果查询
     *  *
     * @param GetDocStructureResultRequest $request GetDocStructureResultRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocStructureResultResponse GetDocStructureResultResponse
     */
    public function getDocStructureResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->imageStrategy)) {
            $query['ImageStrategy'] = $request->imageStrategy;
        }
        if (!Utils::isUnset($request->revealMarkdown)) {
            $query['RevealMarkdown'] = $request->revealMarkdown;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDocStructureResult',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocStructureResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档智能解析结果查询
     *  *
     * @param GetDocStructureResultRequest $request GetDocStructureResultRequest
     *
     * @return GetDocStructureResultResponse GetDocStructureResultResponse
     */
    public function getDocStructureResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocStructureResultWithOptions($request, $runtime);
    }

    /**
     * @summary 文档对比结果查询
     *  *
     * @param GetDocumentCompareResultRequest $request GetDocumentCompareResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocumentCompareResultResponse GetDocumentCompareResultResponse
     */
    public function getDocumentCompareResultWithOptions($request, $runtime)
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
            'action'      => 'GetDocumentCompareResult',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocumentCompareResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档对比结果查询
     *  *
     * @param GetDocumentCompareResultRequest $request GetDocumentCompareResultRequest
     *
     * @return GetDocumentCompareResultResponse GetDocumentCompareResultResponse
     */
    public function getDocumentCompareResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentCompareResultWithOptions($request, $runtime);
    }

    /**
     * @summary 文档转换结果查询
     *  *
     * @param GetDocumentConvertResultRequest $request GetDocumentConvertResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocumentConvertResultResponse GetDocumentConvertResultResponse
     */
    public function getDocumentConvertResultWithOptions($request, $runtime)
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
            'action'      => 'GetDocumentConvertResult',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocumentConvertResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档转换结果查询
     *  *
     * @param GetDocumentConvertResultRequest $request GetDocumentConvertResultRequest
     *
     * @return GetDocumentConvertResultResponse GetDocumentConvertResultResponse
     */
    public function getDocumentConvertResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentConvertResultWithOptions($request, $runtime);
    }

    /**
     * @summary 文档抽取结果查询
     *  *
     * @param GetDocumentExtractResultRequest $request GetDocumentExtractResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocumentExtractResultResponse GetDocumentExtractResultResponse
     */
    public function getDocumentExtractResultWithOptions($request, $runtime)
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
            'action'      => 'GetDocumentExtractResult',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocumentExtractResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档抽取结果查询
     *  *
     * @param GetDocumentExtractResultRequest $request GetDocumentExtractResultRequest
     *
     * @return GetDocumentExtractResultResponse GetDocumentExtractResultResponse
     */
    public function getDocumentExtractResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentExtractResultWithOptions($request, $runtime);
    }

    /**
     * @summary openmind
     *  *
     * @param GetPageNumRequest $request GetPageNumRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPageNumResponse GetPageNumResponse
     */
    public function getPageNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPageNum',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPageNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary openmind
     *  *
     * @param GetPageNumRequest $request GetPageNumRequest
     *
     * @return GetPageNumResponse GetPageNumResponse
     */
    public function getPageNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPageNumWithOptions($request, $runtime);
    }

    /**
     * @summary 表格智能解析结果查询
     *  *
     * @param GetTableUnderstandingResultRequest $request GetTableUnderstandingResultRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableUnderstandingResultResponse GetTableUnderstandingResultResponse
     */
    public function getTableUnderstandingResultWithOptions($request, $runtime)
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
            'action'      => 'GetTableUnderstandingResult',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableUnderstandingResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 表格智能解析结果查询
     *  *
     * @param GetTableUnderstandingResultRequest $request GetTableUnderstandingResultRequest
     *
     * @return GetTableUnderstandingResultResponse GetTableUnderstandingResultResponse
     */
    public function getTableUnderstandingResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableUnderstandingResultWithOptions($request, $runtime);
    }

    /**
     * @summary 图片转excel
     *  *
     * @param SubmitConvertImageToExcelJobRequest $tmpReq  SubmitConvertImageToExcelJobRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitConvertImageToExcelJobResponse SubmitConvertImageToExcelJobResponse
     */
    public function submitConvertImageToExcelJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitConvertImageToExcelJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imageNames)) {
            $request->imageNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'simple');
        }
        if (!Utils::isUnset($tmpReq->imageUrls)) {
            $request->imageUrlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageUrls, 'ImageUrls', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->forceMergeExcel)) {
            $query['ForceMergeExcel'] = $request->forceMergeExcel;
        }
        if (!Utils::isUnset($request->imageNameExtension)) {
            $query['ImageNameExtension'] = $request->imageNameExtension;
        }
        if (!Utils::isUnset($request->imageNamesShrink)) {
            $query['ImageNames'] = $request->imageNamesShrink;
        }
        if (!Utils::isUnset($request->imageUrlsShrink)) {
            $query['ImageUrls'] = $request->imageUrlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitConvertImageToExcelJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitConvertImageToExcelJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片转excel
     *  *
     * @param SubmitConvertImageToExcelJobRequest $request SubmitConvertImageToExcelJobRequest
     *
     * @return SubmitConvertImageToExcelJobResponse SubmitConvertImageToExcelJobResponse
     */
    public function submitConvertImageToExcelJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertImageToExcelJobWithOptions($request, $runtime);
    }

    /**
     * @summary 图片转markdown
     *  *
     * @param SubmitConvertImageToMarkdownJobRequest $tmpReq  SubmitConvertImageToMarkdownJobRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitConvertImageToMarkdownJobResponse SubmitConvertImageToMarkdownJobResponse
     */
    public function submitConvertImageToMarkdownJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitConvertImageToMarkdownJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imageNames)) {
            $request->imageNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'simple');
        }
        if (!Utils::isUnset($tmpReq->imageUrls)) {
            $request->imageUrlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageUrls, 'ImageUrls', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->imageNameExtension)) {
            $query['ImageNameExtension'] = $request->imageNameExtension;
        }
        if (!Utils::isUnset($request->imageNamesShrink)) {
            $query['ImageNames'] = $request->imageNamesShrink;
        }
        if (!Utils::isUnset($request->imageUrlsShrink)) {
            $query['ImageUrls'] = $request->imageUrlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitConvertImageToMarkdownJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitConvertImageToMarkdownJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片转markdown
     *  *
     * @param SubmitConvertImageToMarkdownJobRequest $request SubmitConvertImageToMarkdownJobRequest
     *
     * @return SubmitConvertImageToMarkdownJobResponse SubmitConvertImageToMarkdownJobResponse
     */
    public function submitConvertImageToMarkdownJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertImageToMarkdownJobWithOptions($request, $runtime);
    }

    /**
     * @summary 图片转pdf
     *  *
     * @param SubmitConvertImageToPdfJobRequest $tmpReq  SubmitConvertImageToPdfJobRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitConvertImageToPdfJobResponse SubmitConvertImageToPdfJobResponse
     */
    public function submitConvertImageToPdfJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitConvertImageToPdfJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imageNames)) {
            $request->imageNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'simple');
        }
        if (!Utils::isUnset($tmpReq->imageUrls)) {
            $request->imageUrlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageUrls, 'ImageUrls', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->imageNameExtension)) {
            $query['ImageNameExtension'] = $request->imageNameExtension;
        }
        if (!Utils::isUnset($request->imageNamesShrink)) {
            $query['ImageNames'] = $request->imageNamesShrink;
        }
        if (!Utils::isUnset($request->imageUrlsShrink)) {
            $query['ImageUrls'] = $request->imageUrlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitConvertImageToPdfJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitConvertImageToPdfJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片转pdf
     *  *
     * @param SubmitConvertImageToPdfJobRequest $request SubmitConvertImageToPdfJobRequest
     *
     * @return SubmitConvertImageToPdfJobResponse SubmitConvertImageToPdfJobResponse
     */
    public function submitConvertImageToPdfJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertImageToPdfJobWithOptions($request, $runtime);
    }

    /**
     * @summary 图片转word
     *  *
     * @param SubmitConvertImageToWordJobRequest $tmpReq  SubmitConvertImageToWordJobRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitConvertImageToWordJobResponse SubmitConvertImageToWordJobResponse
     */
    public function submitConvertImageToWordJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitConvertImageToWordJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imageNames)) {
            $request->imageNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'simple');
        }
        if (!Utils::isUnset($tmpReq->imageUrls)) {
            $request->imageUrlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageUrls, 'ImageUrls', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->imageNameExtension)) {
            $query['ImageNameExtension'] = $request->imageNameExtension;
        }
        if (!Utils::isUnset($request->imageNamesShrink)) {
            $query['ImageNames'] = $request->imageNamesShrink;
        }
        if (!Utils::isUnset($request->imageUrlsShrink)) {
            $query['ImageUrls'] = $request->imageUrlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitConvertImageToWordJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitConvertImageToWordJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片转word
     *  *
     * @param SubmitConvertImageToWordJobRequest $request SubmitConvertImageToWordJobRequest
     *
     * @return SubmitConvertImageToWordJobResponse SubmitConvertImageToWordJobResponse
     */
    public function submitConvertImageToWordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitConvertImageToWordJobWithOptions($request, $runtime);
    }

    /**
     * @summary pdf转excel
     *  *
     * @param SubmitConvertPdfToExcelJobRequest $request SubmitConvertPdfToExcelJobRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitConvertPdfToExcelJobResponse SubmitConvertPdfToExcelJobResponse
     */
    public function submitConvertPdfToExcelJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->forceExportInnerImage)) {
            $query['ForceExportInnerImage'] = $request->forceExportInnerImage;
        }
        if (!Utils::isUnset($request->forceMergeExcel)) {
            $query['ForceMergeExcel'] = $request->forceMergeExcel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitConvertPdfToExcelJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitConvertPdfToExcelJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary pdf转excel
     *  *
     * @param SubmitConvertPdfToExcelJobRequest $request SubmitConvertPdfToExcelJobRequest
     *
     * @return SubmitConvertPdfToExcelJobResponse SubmitConvertPdfToExcelJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitConvertPdfToExcelJobReq = new SubmitConvertPdfToExcelJobRequest([]);
        OpenApiUtilClient::convert($request, $submitConvertPdfToExcelJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitConvertPdfToExcelJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitConvertPdfToExcelJobWithOptions($submitConvertPdfToExcelJobReq, $runtime);
    }

    /**
     * @summary pdf转图片
     *  *
     * @param SubmitConvertPdfToImageJobRequest $request SubmitConvertPdfToImageJobRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitConvertPdfToImageJobResponse SubmitConvertPdfToImageJobResponse
     */
    public function submitConvertPdfToImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitConvertPdfToImageJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitConvertPdfToImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary pdf转图片
     *  *
     * @param SubmitConvertPdfToImageJobRequest $request SubmitConvertPdfToImageJobRequest
     *
     * @return SubmitConvertPdfToImageJobResponse SubmitConvertPdfToImageJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitConvertPdfToImageJobReq = new SubmitConvertPdfToImageJobRequest([]);
        OpenApiUtilClient::convert($request, $submitConvertPdfToImageJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitConvertPdfToImageJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitConvertPdfToImageJobWithOptions($submitConvertPdfToImageJobReq, $runtime);
    }

    /**
     * @summary pdf转markdown
     *  *
     * @param SubmitConvertPdfToMarkdownJobRequest $request SubmitConvertPdfToMarkdownJobRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitConvertPdfToMarkdownJobResponse SubmitConvertPdfToMarkdownJobResponse
     */
    public function submitConvertPdfToMarkdownJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitConvertPdfToMarkdownJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitConvertPdfToMarkdownJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary pdf转markdown
     *  *
     * @param SubmitConvertPdfToMarkdownJobRequest $request SubmitConvertPdfToMarkdownJobRequest
     *
     * @return SubmitConvertPdfToMarkdownJobResponse SubmitConvertPdfToMarkdownJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitConvertPdfToMarkdownJobReq = new SubmitConvertPdfToMarkdownJobRequest([]);
        OpenApiUtilClient::convert($request, $submitConvertPdfToMarkdownJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitConvertPdfToMarkdownJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitConvertPdfToMarkdownJobWithOptions($submitConvertPdfToMarkdownJobReq, $runtime);
    }

    /**
     * @summary pdf转word
     *  *
     * @param SubmitConvertPdfToWordJobRequest $request SubmitConvertPdfToWordJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitConvertPdfToWordJobResponse SubmitConvertPdfToWordJobResponse
     */
    public function submitConvertPdfToWordJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->forceExportInnerImage)) {
            $query['ForceExportInnerImage'] = $request->forceExportInnerImage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitConvertPdfToWordJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitConvertPdfToWordJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary pdf转word
     *  *
     * @param SubmitConvertPdfToWordJobRequest $request SubmitConvertPdfToWordJobRequest
     *
     * @return SubmitConvertPdfToWordJobResponse SubmitConvertPdfToWordJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitConvertPdfToWordJobReq = new SubmitConvertPdfToWordJobRequest([]);
        OpenApiUtilClient::convert($request, $submitConvertPdfToWordJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitConvertPdfToWordJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitConvertPdfToWordJobWithOptions($submitConvertPdfToWordJobReq, $runtime);
    }

    /**
     * @summary 电子解析
     *  *
     * @param SubmitDigitalDocStructureJobRequest $request SubmitDigitalDocStructureJobRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDigitalDocStructureJobResponse SubmitDigitalDocStructureJobResponse
     */
    public function submitDigitalDocStructureJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileNameExtension)) {
            $query['FileNameExtension'] = $request->fileNameExtension;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->imageStrategy)) {
            $query['ImageStrategy'] = $request->imageStrategy;
        }
        if (!Utils::isUnset($request->revealMarkdown)) {
            $query['RevealMarkdown'] = $request->revealMarkdown;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDigitalDocStructureJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDigitalDocStructureJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 电子解析
     *  *
     * @param SubmitDigitalDocStructureJobRequest $request SubmitDigitalDocStructureJobRequest
     *
     * @return SubmitDigitalDocStructureJobResponse SubmitDigitalDocStructureJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitDigitalDocStructureJobReq = new SubmitDigitalDocStructureJobRequest([]);
        OpenApiUtilClient::convert($request, $submitDigitalDocStructureJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDigitalDocStructureJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDigitalDocStructureJobWithOptions($submitDigitalDocStructureJobReq, $runtime);
    }

    /**
     * @summary 文档智能解析
     *  *
     * @param SubmitDocStructureJobRequest $request SubmitDocStructureJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDocStructureJobResponse SubmitDocStructureJobResponse
     */
    public function submitDocStructureJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowPptFormat)) {
            $query['AllowPptFormat'] = $request->allowPptFormat;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileNameExtension)) {
            $query['FileNameExtension'] = $request->fileNameExtension;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->formulaEnhancement)) {
            $query['FormulaEnhancement'] = $request->formulaEnhancement;
        }
        if (!Utils::isUnset($request->structureType)) {
            $query['StructureType'] = $request->structureType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDocStructureJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDocStructureJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档智能解析
     *  *
     * @param SubmitDocStructureJobRequest $request SubmitDocStructureJobRequest
     *
     * @return SubmitDocStructureJobResponse SubmitDocStructureJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitDocStructureJobReq = new SubmitDocStructureJobRequest([]);
        OpenApiUtilClient::convert($request, $submitDocStructureJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocStructureJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocStructureJobWithOptions($submitDocStructureJobReq, $runtime);
    }

    /**
     * @summary 文档抽取
     *  *
     * @param SubmitDocumentExtractJobRequest $request SubmitDocumentExtractJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDocumentExtractJobResponse SubmitDocumentExtractJobResponse
     */
    public function submitDocumentExtractJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileNameExtension)) {
            $query['FileNameExtension'] = $request->fileNameExtension;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDocumentExtractJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDocumentExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档抽取
     *  *
     * @param SubmitDocumentExtractJobRequest $request SubmitDocumentExtractJobRequest
     *
     * @return SubmitDocumentExtractJobResponse SubmitDocumentExtractJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitDocumentExtractJobReq = new SubmitDocumentExtractJobRequest([]);
        OpenApiUtilClient::convert($request, $submitDocumentExtractJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocumentExtractJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocumentExtractJobWithOptions($submitDocumentExtractJobReq, $runtime);
    }

    /**
     * @summary 表格智能解析
     *  *
     * @param SubmitTableUnderstandingJobRequest $request SubmitTableUnderstandingJobRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTableUnderstandingJobResponse SubmitTableUnderstandingJobResponse
     */
    public function submitTableUnderstandingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileNameExtension)) {
            $query['FileNameExtension'] = $request->fileNameExtension;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTableUnderstandingJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTableUnderstandingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 表格智能解析
     *  *
     * @param SubmitTableUnderstandingJobRequest $request SubmitTableUnderstandingJobRequest
     *
     * @return SubmitTableUnderstandingJobResponse SubmitTableUnderstandingJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'docmind-api',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $submitTableUnderstandingJobReq = new SubmitTableUnderstandingJobRequest([]);
        OpenApiUtilClient::convert($request, $submitTableUnderstandingJobReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitTableUnderstandingJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitTableUnderstandingJobWithOptions($submitTableUnderstandingJobReq, $runtime);
    }
}
