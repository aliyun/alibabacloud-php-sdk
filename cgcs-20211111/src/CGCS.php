<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptCreateServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptCreateServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptCreateServiceShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptGetServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptGetServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppCreateServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppCreateServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppDeleteServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppDeleteServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppGetServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppGetServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedConsumStatRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedConsumStatResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedConsumStatShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedNearRealStatRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedNearRealStatResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedNearRealStatShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedStatRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedStatResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppListServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppListServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppModifyServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppModifyServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionCreateServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionCreateServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionDeleteServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionDeleteServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionGetServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionGetServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionListServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionListServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionModifyServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionModifyServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionQueryServiceRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionQueryServiceResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateUploadTaskRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateUploadTaskResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppListResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetNeedUploadFileListRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetNeedUploadFileListResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetOssInfoResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetTenantIdResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetTokenRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetTokenResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetUploadToolUrlResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\HasActivateResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\PageQueryResourcePackageListRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\PageQueryResourcePackageListResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryUploadProgressRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryUploadProgressResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\RecordFinishedFileRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\RecordFinishedFileResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReplicateVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReplicateVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReportUploadProgressRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReportUploadProgressResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReportUploadResultRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReportUploadResultResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReportUploadStatusRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReportUploadStatusResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\TotalAppliedConsumStatRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\TotalAppliedConsumStatResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\TotalAppliedNearRealStatRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\TotalAppliedNearRealStatResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\TotalQueryResourcePackageRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\TotalQueryResourcePackageResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CGCS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cgcs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AdaptCreateServiceRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return AdaptCreateServiceResponse
     */
    public function adaptCreateServiceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AdaptCreateServiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adaptTarget)) {
            $request->adaptTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->adaptTarget), 'AdaptTarget', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->adaptTargetShrink)) {
            $body['AdaptTarget'] = $request->adaptTargetShrink;
        }
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        if (!Utils::isUnset($request->appVersionName)) {
            $body['AppVersionName'] = $request->appVersionName;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AdaptCreateService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AdaptCreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AdaptCreateServiceRequest $request
     *
     * @return AdaptCreateServiceResponse
     */
    public function adaptCreateService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adaptCreateServiceWithOptions($request, $runtime);
    }

    /**
     * @param AdaptGetServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AdaptGetServiceResponse
     */
    public function adaptGetServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AdaptGetService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AdaptGetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AdaptGetServiceRequest $request
     *
     * @return AdaptGetServiceResponse
     */
    public function adaptGetService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adaptGetServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppCreateServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AppCreateServiceResponse
     */
    public function appCreateServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppCreateService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppCreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppCreateServiceRequest $request
     *
     * @return AppCreateServiceResponse
     */
    public function appCreateService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appCreateServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppDeleteServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AppDeleteServiceResponse
     */
    public function appDeleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppDeleteService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppDeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppDeleteServiceRequest $request
     *
     * @return AppDeleteServiceResponse
     */
    public function appDeleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appDeleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppGetServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AppGetServiceResponse
     */
    public function appGetServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppGetService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppGetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppGetServiceRequest $request
     *
     * @return AppGetServiceResponse
     */
    public function appGetService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appGetServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppListServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AppListServiceResponse
     */
    public function appListServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keySearch)) {
            $body['KeySearch'] = $request->keySearch;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppListService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppListServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppListServiceRequest $request
     *
     * @return AppListServiceResponse
     */
    public function appListService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appListServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppModifyServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AppModifyServiceResponse
     */
    public function appModifyServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppModifyService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppModifyServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppModifyServiceRequest $request
     *
     * @return AppModifyServiceResponse
     */
    public function appModifyService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appModifyServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppVersionCreateServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AppVersionCreateServiceResponse
     */
    public function appVersionCreateServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersionName)) {
            $body['AppVersionName'] = $request->appVersionName;
        }
        if (!Utils::isUnset($request->fileAddress)) {
            $body['FileAddress'] = $request->fileAddress;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $body['FileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->fileUploadType)) {
            $body['FileUploadType'] = $request->fileUploadType;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppVersionCreateService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppVersionCreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppVersionCreateServiceRequest $request
     *
     * @return AppVersionCreateServiceResponse
     */
    public function appVersionCreateService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appVersionCreateServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppVersionDeleteServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AppVersionDeleteServiceResponse
     */
    public function appVersionDeleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppVersionDeleteService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppVersionDeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppVersionDeleteServiceRequest $request
     *
     * @return AppVersionDeleteServiceResponse
     */
    public function appVersionDeleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appVersionDeleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppVersionGetServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AppVersionGetServiceResponse
     */
    public function appVersionGetServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppVersionGetService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppVersionGetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppVersionGetServiceRequest $request
     *
     * @return AppVersionGetServiceResponse
     */
    public function appVersionGetService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appVersionGetServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppVersionListServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AppVersionListServiceResponse
     */
    public function appVersionListServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppVersionListService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppVersionListServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppVersionListServiceRequest $request
     *
     * @return AppVersionListServiceResponse
     */
    public function appVersionListService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appVersionListServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppVersionModifyServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AppVersionModifyServiceResponse
     */
    public function appVersionModifyServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        if (!Utils::isUnset($request->appVersionName)) {
            $body['AppVersionName'] = $request->appVersionName;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppVersionModifyService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppVersionModifyServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppVersionModifyServiceRequest $request
     *
     * @return AppVersionModifyServiceResponse
     */
    public function appVersionModifyService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appVersionModifyServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppVersionQueryServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AppVersionQueryServiceResponse
     */
    public function appVersionQueryServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keySearch)) {
            $body['KeySearch'] = $request->keySearch;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppVersionQueryService',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppVersionQueryServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppVersionQueryServiceRequest $request
     *
     * @return AppVersionQueryServiceResponse
     */
    public function appVersionQueryService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appVersionQueryServiceWithOptions($request, $runtime);
    }

    /**
     * @param AppliedConsumStatRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return AppliedConsumStatResponse
     */
    public function appliedConsumStatWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AppliedConsumStatShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->appliedId)) {
            $request->appliedIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->appliedId, 'AppliedId', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appliedIdShrink)) {
            $body['AppliedId'] = $request->appliedIdShrink;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->queryEndDate)) {
            $body['QueryEndDate'] = $request->queryEndDate;
        }
        if (!Utils::isUnset($request->queryStartDate)) {
            $body['QueryStartDate'] = $request->queryStartDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppliedConsumStat',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppliedConsumStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppliedConsumStatRequest $request
     *
     * @return AppliedConsumStatResponse
     */
    public function appliedConsumStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appliedConsumStatWithOptions($request, $runtime);
    }

    /**
     * @param AppliedNearRealStatRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return AppliedNearRealStatResponse
     */
    public function appliedNearRealStatWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AppliedNearRealStatShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->appliedVersionId)) {
            $request->appliedVersionIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->appliedVersionId, 'AppliedVersionId', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appliedVersionIdShrink)) {
            $body['AppliedVersionId'] = $request->appliedVersionIdShrink;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppliedNearRealStat',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppliedNearRealStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppliedNearRealStatRequest $request
     *
     * @return AppliedNearRealStatResponse
     */
    public function appliedNearRealStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appliedNearRealStatWithOptions($request, $runtime);
    }

    /**
     * @param AppliedStatRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AppliedStatResponse
     */
    public function appliedStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->queryEndDate)) {
            $body['QueryEndDate'] = $request->queryEndDate;
        }
        if (!Utils::isUnset($request->queryStartDate)) {
            $body['QueryStartDate'] = $request->queryStartDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppliedStat',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppliedStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppliedStatRequest $request
     *
     * @return AppliedStatResponse
     */
    public function appliedStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appliedStatWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppSessionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppSessionResponse
     */
    public function createAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->customUserId)) {
            $query['CustomUserId'] = $request->customUserId;
        }
        if (!Utils::isUnset($request->startParameters)) {
            $query['StartParameters'] = $request->startParameters;
        }
        if (!Utils::isUnset($request->systemInfo)) {
            $query['SystemInfo'] = $request->systemInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppSessionRequest $request
     *
     * @return CreateAppSessionResponse
     */
    public function createAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppSessionBatchRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAppSessionBatchResponse
     */
    public function createAppSessionBatchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppSessionBatchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->appInfos)) {
            $request->appInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->appInfos, 'AppInfos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appInfosShrink)) {
            $query['AppInfos'] = $request->appInfosShrink;
        }
        if (!Utils::isUnset($request->customTaskId)) {
            $query['CustomTaskId'] = $request->customTaskId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppSessionBatch',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppSessionBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppSessionBatchRequest $request
     *
     * @return CreateAppSessionBatchResponse
     */
    public function createAppSessionBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionBatchWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateUploadTaskResponse
     */
    public function createUploadTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $body['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->fileAddress)) {
            $body['FileAddress'] = $request->fileAddress;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $body['FileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->progress)) {
            $body['Progress'] = $request->progress;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uploadToolVersion)) {
            $body['UploadToolVersion'] = $request->uploadToolVersion;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $body['UploadType'] = $request->uploadType;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadTask',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUploadTaskRequest $request
     *
     * @return CreateUploadTaskResponse
     */
    public function createUploadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadTaskWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetAppListResponse
     */
    public function getAppListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAppList',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAppListResponse
     */
    public function getAppList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppListWithOptions($runtime);
    }

    /**
     * @param GetAppSessionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAppSessionResponse
     */
    public function getAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppSessionRequest $request
     *
     * @return GetAppSessionResponse
     */
    public function getAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSessionWithOptions($request, $runtime);
    }

    /**
     * @param GetNeedUploadFileListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetNeedUploadFileListResponse
     */
    public function getNeedUploadFileListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->hashList)) {
            $body['HashList'] = $request->hashList;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNeedUploadFileList',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNeedUploadFileListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNeedUploadFileListRequest $request
     *
     * @return GetNeedUploadFileListResponse
     */
    public function getNeedUploadFileList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNeedUploadFileListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetOssInfoResponse
     */
    public function getOssInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetOssInfo',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetOssInfoResponse
     */
    public function getOssInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssInfoWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetTenantIdResponse
     */
    public function getTenantIdWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetTenantId',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTenantIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetTenantIdResponse
     */
    public function getTenantId()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTenantIdWithOptions($runtime);
    }

    /**
     * @param GetTokenRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bucket)) {
            $body['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetToken',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetUploadToolUrlResponse
     */
    public function getUploadToolUrlWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetUploadToolUrl',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUploadToolUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetUploadToolUrlResponse
     */
    public function getUploadToolUrl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadToolUrlWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return HasActivateResponse
     */
    public function hasActivateWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'HasActivate',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HasActivateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return HasActivateResponse
     */
    public function hasActivate()
    {
        $runtime = new RuntimeOptions([]);

        return $this->hasActivateWithOptions($runtime);
    }

    /**
     * @param ListAppSessionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAppSessionsResponse
     */
    public function listAppSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->customSessionIds)) {
            $query['CustomSessionIds'] = $request->customSessionIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platformSessionIds)) {
            $query['PlatformSessionIds'] = $request->platformSessionIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppSessions',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppSessionsRequest $request
     *
     * @return ListAppSessionsResponse
     */
    public function listAppSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppSessionsWithOptions($request, $runtime);
    }

    /**
     * @param PageQueryResourcePackageListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PageQueryResourcePackageListResponse
     */
    public function pageQueryResourcePackageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryValidType)) {
            $body['QueryValidType'] = $request->queryValidType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PageQueryResourcePackageList',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageQueryResourcePackageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PageQueryResourcePackageListRequest $request
     *
     * @return PageQueryResourcePackageListResponse
     */
    public function pageQueryResourcePackageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQueryResourcePackageListWithOptions($request, $runtime);
    }

    /**
     * @param QueryAdaptRecordsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryAdaptRecordsResponse
     */
    public function queryAdaptRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        if (!Utils::isUnset($request->requestApp)) {
            $body['RequestApp'] = $request->requestApp;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAdaptRecords',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAdaptRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAdaptRecordsRequest $request
     *
     * @return QueryAdaptRecordsResponse
     */
    public function queryAdaptRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAdaptRecordsWithOptions($request, $runtime);
    }

    /**
     * @param QueryUploadProgressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryUploadProgressResponse
     */
    public function queryUploadProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->queryUploadProgressRequests)) {
            $body['QueryUploadProgressRequests'] = $request->queryUploadProgressRequests;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryUploadProgress',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUploadProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUploadProgressRequest $request
     *
     * @return QueryUploadProgressResponse
     */
    public function queryUploadProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUploadProgressWithOptions($request, $runtime);
    }

    /**
     * @param RecordFinishedFileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecordFinishedFileResponse
     */
    public function recordFinishedFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $body['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->fileFingerprintDTOList)) {
            $body['FileFingerprintDTOList'] = $request->fileFingerprintDTOList;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $body['FileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->toolVersion)) {
            $body['ToolVersion'] = $request->toolVersion;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecordFinishedFile',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecordFinishedFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecordFinishedFileRequest $request
     *
     * @return RecordFinishedFileResponse
     */
    public function recordFinishedFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordFinishedFileWithOptions($request, $runtime);
    }

    /**
     * @param ReplicateVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReplicateVersionResponse
     */
    public function replicateVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->sourceVersionId)) {
            $body['SourceVersionId'] = $request->sourceVersionId;
        }
        if (!Utils::isUnset($request->targetVersionId)) {
            $body['TargetVersionId'] = $request->targetVersionId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReplicateVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplicateVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplicateVersionRequest $request
     *
     * @return ReplicateVersionResponse
     */
    public function replicateVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replicateVersionWithOptions($request, $runtime);
    }

    /**
     * @param ReportUploadProgressRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReportUploadProgressResponse
     */
    public function reportUploadProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->progress)) {
            $body['Progress'] = $request->progress;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportUploadProgress',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportUploadProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportUploadProgressRequest $request
     *
     * @return ReportUploadProgressResponse
     */
    public function reportUploadProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportUploadProgressWithOptions($request, $runtime);
    }

    /**
     * @param ReportUploadResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReportUploadResultResponse
     */
    public function reportUploadResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $body['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->fileFingerprintDTOList)) {
            $body['FileFingerprintDTOList'] = $request->fileFingerprintDTOList;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $body['FileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->toolVersion)) {
            $body['ToolVersion'] = $request->toolVersion;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportUploadResult',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportUploadResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportUploadResultRequest $request
     *
     * @return ReportUploadResultResponse
     */
    public function reportUploadResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportUploadResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportUploadStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReportUploadStatusResponse
     */
    public function reportUploadStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->memo)) {
            $body['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportUploadStatus',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportUploadStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportUploadStatusRequest $request
     *
     * @return ReportUploadStatusResponse
     */
    public function reportUploadStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportUploadStatusWithOptions($request, $runtime);
    }

    /**
     * @param StopAppSessionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopAppSessionResponse
     */
    public function stopAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopAppSessionRequest $request
     *
     * @return StopAppSessionResponse
     */
    public function stopAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppSessionWithOptions($request, $runtime);
    }

    /**
     * @param TotalAppliedConsumStatRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TotalAppliedConsumStatResponse
     */
    public function totalAppliedConsumStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->queryEndDate)) {
            $body['QueryEndDate'] = $request->queryEndDate;
        }
        if (!Utils::isUnset($request->queryStartDate)) {
            $body['QueryStartDate'] = $request->queryStartDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TotalAppliedConsumStat',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TotalAppliedConsumStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TotalAppliedConsumStatRequest $request
     *
     * @return TotalAppliedConsumStatResponse
     */
    public function totalAppliedConsumStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->totalAppliedConsumStatWithOptions($request, $runtime);
    }

    /**
     * @param TotalAppliedNearRealStatRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TotalAppliedNearRealStatResponse
     */
    public function totalAppliedNearRealStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TotalAppliedNearRealStat',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TotalAppliedNearRealStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TotalAppliedNearRealStatRequest $request
     *
     * @return TotalAppliedNearRealStatResponse
     */
    public function totalAppliedNearRealStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->totalAppliedNearRealStatWithOptions($request, $runtime);
    }

    /**
     * @param TotalQueryResourcePackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return TotalQueryResourcePackageResponse
     */
    public function totalQueryResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TotalQueryResourcePackage',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TotalQueryResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TotalQueryResourcePackageRequest $request
     *
     * @return TotalQueryResourcePackageResponse
     */
    public function totalQueryResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->totalQueryResourcePackageWithOptions($request, $runtime);
    }
}
