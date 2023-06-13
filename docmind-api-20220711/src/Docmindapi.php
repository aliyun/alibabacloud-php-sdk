<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocStructureResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocStructureResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentCompareResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentCompareResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentConvertResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentConvertResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentExtractResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentExtractResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetTableUnderstandingResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetTableUnderstandingResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToExcelJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToExcelJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertImageToExcelJobShrinkRequest;
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
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToWordJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToWordJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitConvertPdfToWordJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocStructureJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocStructureJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocStructureJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocumentCompareJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocumentCompareJobResponse;
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
     * @param GetDocStructureResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDocStructureResultResponse
     */
    public function getDocStructureResultWithOptions($request, $runtime)
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
     * @param GetDocumentCompareResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDocumentCompareResultResponse
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
     * @param GetDocumentConvertResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDocumentConvertResultResponse
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
     * @param GetDocumentExtractResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDocumentExtractResultResponse
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
     * @param GetTableUnderstandingResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetTableUnderstandingResultResponse
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
     * @param SubmitConvertImageToExcelJobRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitConvertImageToExcelJobResponse
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
     * @param SubmitConvertImageToPdfJobRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitConvertImageToPdfJobResponse
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
     * @param SubmitConvertImageToWordJobRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitConvertImageToWordJobResponse
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
     * @param SubmitConvertPdfToExcelJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitConvertPdfToExcelJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
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
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
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
     * @param SubmitConvertPdfToImageJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitConvertPdfToImageJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
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
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
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
     * @param SubmitConvertPdfToWordJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitConvertPdfToWordJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
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
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
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
     * @param SubmitDocStructureJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDocStructureJobResponse
     */
    public function submitDocStructureJobWithOptions($request, $runtime)
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
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
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
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
     * @param SubmitDocumentCompareJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitDocumentCompareJobResponse
     */
    public function submitDocumentCompareJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compareFileName)) {
            $query['CompareFileName'] = $request->compareFileName;
        }
        if (!Utils::isUnset($request->compareFileUrl)) {
            $query['CompareFileUrl'] = $request->compareFileUrl;
        }
        if (!Utils::isUnset($request->originFileName)) {
            $query['OriginFileName'] = $request->originFileName;
        }
        if (!Utils::isUnset($request->originFileUrl)) {
            $query['OriginFileUrl'] = $request->originFileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDocumentCompareJob',
            'version'     => '2022-07-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDocumentCompareJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitDocumentCompareJobRequest $request
     *
     * @return SubmitDocumentCompareJobResponse
     */
    public function submitDocumentCompareJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDocumentCompareJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDocumentExtractJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitDocumentExtractJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
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
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
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
     * @param SubmitTableUnderstandingJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitTableUnderstandingJobResponse
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
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
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
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
