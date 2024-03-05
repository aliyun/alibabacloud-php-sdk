<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetDownloadUrlRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetDownloadUrlResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetPreViewUrlRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetPreViewUrlResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetYunQiTaskByRecordIdRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetYunQiTaskByRecordIdResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListDocsGroupByYearRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListDocsGroupByYearResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListYunQiTaskByUidRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListYunQiTaskByUidResponse;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\MarkFileReadedRequest;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\MarkFileReadedResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CustomerService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('customerservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetDownloadUrlRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetDownloadUrlResponse
     */
    public function getDownloadUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileId)) {
            $body['fileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $body['fileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->freeOrderApplyCode)) {
            $body['freeOrderApplyCode'] = $request->freeOrderApplyCode;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['orderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDownloadUrl',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/file/getDownloadUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDownloadUrlRequest $request
     *
     * @return GetDownloadUrlResponse
     */
    public function getDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDownloadUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEnterpriseSupportPlanDetailRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetEnterpriseSupportPlanDetailResponse
     */
    public function getEnterpriseSupportPlanDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->freeOrderApplyCodes)) {
            $body['freeOrderApplyCodes'] = $request->freeOrderApplyCodes;
        }
        if (!Utils::isUnset($request->orderIds)) {
            $body['orderIds'] = $request->orderIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEnterpriseSupportPlanDetail',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/enterpriseSupport/getEnterpriseSupportPlanDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEnterpriseSupportPlanDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEnterpriseSupportPlanDetailRequest $request
     *
     * @return GetEnterpriseSupportPlanDetailResponse
     */
    public function getEnterpriseSupportPlanDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnterpriseSupportPlanDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetPreViewUrlRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetPreViewUrlResponse
     */
    public function getPreViewUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyCode)) {
            $body['applyCode'] = $request->applyCode;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['fileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $body['fileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['orderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPreViewUrl',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/file/getPreViewUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPreViewUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPreViewUrlRequest $request
     *
     * @return GetPreViewUrlResponse
     */
    public function getPreViewUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPreViewUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceDetailRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetServiceDetailResponse
     */
    public function getServiceDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyCode)) {
            $body['applyCode'] = $request->applyCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceDetail',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/expert/service/getServiceDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceDetailRequest $request
     *
     * @return GetServiceDetailResponse
     */
    public function getServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetYunQiTaskByRecordIdRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetYunQiTaskByRecordIdResponse
     */
    public function getYunQiTaskByRecordIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recordId)) {
            $query['recordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetYunQiTaskByRecordId',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/record/getYunQiTaskByRecordId',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetYunQiTaskByRecordIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetYunQiTaskByRecordIdRequest $request
     *
     * @return GetYunQiTaskByRecordIdResponse
     */
    public function getYunQiTaskByRecordId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getYunQiTaskByRecordIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDocsGroupByYearRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDocsGroupByYearResponse
     */
    public function listDocsGroupByYearWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyCodes)) {
            $body['applyCodes'] = $request->applyCodes;
        }
        if (!Utils::isUnset($request->fileNameKeyword)) {
            $body['fileNameKeyword'] = $request->fileNameKeyword;
        }
        if (!Utils::isUnset($request->orderIds)) {
            $body['orderIds'] = $request->orderIds;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['productCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDocsGroupByYear',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/file/listDocsGroupByYear',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDocsGroupByYearResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDocsGroupByYearRequest $request
     *
     * @return ListDocsGroupByYearResponse
     */
    public function listDocsGroupByYear($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDocsGroupByYearWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEnterpriseSupportPlanRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEnterpriseSupportPlanResponse
     */
    public function listEnterpriseSupportPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNum)) {
            $body['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEnterpriseSupportPlan',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/enterpriseSupport/listEnterpriseSupportPlan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnterpriseSupportPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEnterpriseSupportPlanRequest $request
     *
     * @return ListEnterpriseSupportPlanResponse
     */
    public function listEnterpriseSupportPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnterpriseSupportPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEnterpriseSupportPlanSimpleRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListEnterpriseSupportPlanSimpleResponse
     */
    public function listEnterpriseSupportPlanSimpleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNum)) {
            $body['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEnterpriseSupportPlanSimple',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/enterpriseSupport/listEnterpriseSupportPlanSimple',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnterpriseSupportPlanSimpleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEnterpriseSupportPlanSimpleRequest $request
     *
     * @return ListEnterpriseSupportPlanSimpleResponse
     */
    public function listEnterpriseSupportPlanSimple($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnterpriseSupportPlanSimpleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListServiceApplyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListServiceApplyResponse
     */
    public function listServiceApplyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyType)) {
            $body['applyType'] = $request->applyType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['productCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['startDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServiceApply',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/expert/service/listServiceApply',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceApplyRequest $request
     *
     * @return ListServiceApplyResponse
     */
    public function listServiceApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListYunQiTaskByUidRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListYunQiTaskByUidResponse
     */
    public function listYunQiTaskByUidWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['createTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['createTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->freeOrderApplyCodes)) {
            $body['freeOrderApplyCodes'] = $request->freeOrderApplyCodes;
        }
        if (!Utils::isUnset($request->freeOrderApplyIds)) {
            $body['freeOrderApplyIds'] = $request->freeOrderApplyIds;
        }
        if (!Utils::isUnset($request->orderIds)) {
            $body['orderIds'] = $request->orderIds;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['statusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListYunQiTaskByUid',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/record/listYunQiTaskByUid',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListYunQiTaskByUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListYunQiTaskByUidRequest $request
     *
     * @return ListYunQiTaskByUidResponse
     */
    public function listYunQiTaskByUid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listYunQiTaskByUidWithOptions($request, $headers, $runtime);
    }

    /**
     * @param MarkFileReadedRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return MarkFileReadedResponse
     */
    public function markFileReadedWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyCode)) {
            $body['applyCode'] = $request->applyCode;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['fileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['orderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MarkFileReaded',
            'version'     => '2023-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/customerWorkbench/pop/api/file/markFileReaded',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MarkFileReadedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MarkFileReadedRequest $request
     *
     * @return MarkFileReadedResponse
     */
    public function markFileReaded($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->markFileReadedWithOptions($request, $headers, $runtime);
    }
}
