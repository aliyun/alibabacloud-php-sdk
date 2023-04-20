<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AddCorsDomainRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AddCorsDomainResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AddDingtalkOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AddDingtalkOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AttachWebHostingCertificateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AttachWebHostingCertificateResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\BatchDeleteWebHostingFilesRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\BatchDeleteWebHostingFilesResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\BindWebHostingCustomDomainRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\BindWebHostingCustomDomainResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CheckMpServerlessRoleExistsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CheckMpServerlessRoleExistsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateDBExportTaskRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateDBExportTaskResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateDBImportTaskRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateDBImportTaskResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateDBRestoreTaskRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateDBRestoreTaskResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateFunctionDeploymentRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateFunctionDeploymentResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateFunctionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateFunctionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSpaceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSpaceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSpaceWithOrderRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSpaceWithOrderResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteAntOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteAntOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteCorsDomainRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteCorsDomainResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteDBCollectionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteDBCollectionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteDingtalkOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteDingtalkOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteFunctionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteFunctionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteSpaceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteSpaceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteWebHostingCertificateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteWebHostingCertificateResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteWebHostingFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteWebHostingFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteWechatOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteWechatOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeployFunctionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeployFunctionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFCOpenStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFileUploadSignedUrlRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFileUploadSignedUrlResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeHttpTriggerConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeHttpTriggerConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceQuotaRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceQuotaResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeServicePolicyRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeServicePolicyResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpaceClientConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpaceClientConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpacesRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpacesResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpacesShrinkRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeWebHostingFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeWebHostingFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\EnableExtensionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\EnableExtensionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingCertificateDetailRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingCertificateDetailResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingDomainVerificationContentRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingDomainVerificationContentResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingStatusRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingUploadCredentialRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingUploadCredentialResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListAvailableCertificatesRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListAvailableCertificatesResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListCorsDomainsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListCorsDomainsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListDingtalkOpenPlatformConfigsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListDingtalkOpenPlatformConfigsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListExtensionsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListExtensionsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionDeploymentRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionDeploymentResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionLogRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionLogResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSpaceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSpaceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSpaceShrinkRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingCustomDomainsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingCustomDomainsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingFilesRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingFilesResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ModifyWebHostingConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ModifyWebHostingConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\OpenServiceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\OpenServiceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\OpenWebHostingServiceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\OpenWebHostingServiceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBBackupCollectionsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBBackupCollectionsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBBackupDumpTimesRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBBackupDumpTimesResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBExportTaskStatusRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBExportTaskStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBImportTaskStatusRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBImportTaskStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBRestoreTaskStatusRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBRestoreTaskStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryServiceStatusRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryServiceStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceSpecDetailRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceSpecDetailResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RefreshWebHostingCustomDomainCacheRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RefreshWebHostingCustomDomainCacheResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RegisterFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RegisterFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RenameDBCollectionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RenameDBCollectionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ResetServerSecretRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ResetServerSecretResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RunDBCommandRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RunDBCommandResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RunFunctionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RunFunctionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveAntOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveAntOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveAppAuthTokenRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveAppAuthTokenResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveWebHostingCustomDomainConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveWebHostingCustomDomainConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveWebHostingCustomDomainCorsConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveWebHostingCustomDomainCorsConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveWechatOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveWechatOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UnbindWebHostingCustomDomainRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UnbindWebHostingCustomDomainResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateDingtalkOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateDingtalkOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateFunctionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateFunctionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateHttpTriggerConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateHttpTriggerConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateServicePolicyRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateServicePolicyResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateSpaceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateSpaceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\VerifyWebHostingDomainOwnerRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\VerifyWebHostingDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class MPServerless extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mpserverless', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddCorsDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddCorsDomainResponse
     */
    public function addCorsDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCorsDomain',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCorsDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCorsDomainRequest $request
     *
     * @return AddCorsDomainResponse
     */
    public function addCorsDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCorsDomainWithOptions($request, $runtime);
    }

    /**
     * @param AddDingtalkOpenPlatformConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddDingtalkOpenPlatformConfigResponse
     */
    public function addDingtalkOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $body['AppSecret'] = $request->appSecret;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDingtalkOpenPlatformConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDingtalkOpenPlatformConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDingtalkOpenPlatformConfigRequest $request
     *
     * @return AddDingtalkOpenPlatformConfigResponse
     */
    public function addDingtalkOpenPlatformConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDingtalkOpenPlatformConfigWithOptions($request, $runtime);
    }

    /**
     * @param AttachWebHostingCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AttachWebHostingCertificateResponse
     */
    public function attachWebHostingCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certName)) {
            $body['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certType)) {
            $body['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $body['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->serverCertificate)) {
            $body['ServerCertificate'] = $request->serverCertificate;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachWebHostingCertificate',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachWebHostingCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachWebHostingCertificateRequest $request
     *
     * @return AttachWebHostingCertificateResponse
     */
    public function attachWebHostingCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachWebHostingCertificateWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteWebHostingFilesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchDeleteWebHostingFilesResponse
     */
    public function batchDeleteWebHostingFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->filePaths)) {
            $body['FilePaths'] = $request->filePaths;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteWebHostingFiles',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteWebHostingFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteWebHostingFilesRequest $request
     *
     * @return BatchDeleteWebHostingFilesResponse
     */
    public function batchDeleteWebHostingFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteWebHostingFilesWithOptions($request, $runtime);
    }

    /**
     * @param BindWebHostingCustomDomainRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BindWebHostingCustomDomainResponse
     */
    public function bindWebHostingCustomDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customDomain)) {
            $body['CustomDomain'] = $request->customDomain;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindWebHostingCustomDomain',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindWebHostingCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindWebHostingCustomDomainRequest $request
     *
     * @return BindWebHostingCustomDomainResponse
     */
    public function bindWebHostingCustomDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindWebHostingCustomDomainWithOptions($request, $runtime);
    }

    /**
     * @param CheckMpServerlessRoleExistsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CheckMpServerlessRoleExistsResponse
     */
    public function checkMpServerlessRoleExistsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckMpServerlessRoleExists',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMpServerlessRoleExistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckMpServerlessRoleExistsRequest $request
     *
     * @return CheckMpServerlessRoleExistsResponse
     */
    public function checkMpServerlessRoleExists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMpServerlessRoleExistsWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBExportTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDBExportTaskResponse
     */
    public function createDBExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->collection)) {
            $body['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDBExportTask',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDBExportTaskRequest $request
     *
     * @return CreateDBExportTaskResponse
     */
    public function createDBExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBImportTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDBImportTaskResponse
     */
    public function createDBImportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->collection)) {
            $body['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDBImportTask',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBImportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDBImportTaskRequest $request
     *
     * @return CreateDBImportTaskResponse
     */
    public function createDBImportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBImportTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBRestoreTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDBRestoreTaskResponse
     */
    public function createDBRestoreTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backupId)) {
            $body['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->newCollections)) {
            $body['NewCollections'] = $request->newCollections;
        }
        if (!Utils::isUnset($request->originCollections)) {
            $body['OriginCollections'] = $request->originCollections;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDBRestoreTask',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBRestoreTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDBRestoreTaskRequest $request
     *
     * @return CreateDBRestoreTaskResponse
     */
    public function createDBRestoreTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBRestoreTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFunctionResponse
     */
    public function createFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->runtime)) {
            $body['Runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunction',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFunctionRequest $request
     *
     * @return CreateFunctionResponse
     */
    public function createFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFunctionWithOptions($request, $runtime);
    }

    /**
     * @param CreateFunctionDeploymentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateFunctionDeploymentResponse
     */
    public function createFunctionDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunctionDeployment',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFunctionDeploymentRequest $request
     *
     * @return CreateFunctionDeploymentResponse
     */
    public function createFunctionDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFunctionDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param CreateSpaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSpaceResponse
     */
    public function createSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSpace',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSpaceRequest $request
     *
     * @return CreateSpaceResponse
     */
    public function createSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSpaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateSpaceWithOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSpaceWithOrderResponse
     */
    public function createSpaceWithOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->packageVersion)) {
            $body['PackageVersion'] = $request->packageVersion;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $body['SubscriptionType'] = $request->subscriptionType;
        }
        if (!Utils::isUnset($request->useCoupon)) {
            $body['UseCoupon'] = $request->useCoupon;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSpaceWithOrder',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSpaceWithOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSpaceWithOrderRequest $request
     *
     * @return CreateSpaceWithOrderResponse
     */
    public function createSpaceWithOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSpaceWithOrderWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAntOpenPlatformConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAntOpenPlatformConfigResponse
     */
    public function deleteAntOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAntOpenPlatformConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAntOpenPlatformConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAntOpenPlatformConfigRequest $request
     *
     * @return DeleteAntOpenPlatformConfigResponse
     */
    public function deleteAntOpenPlatformConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntOpenPlatformConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCorsDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCorsDomainResponse
     */
    public function deleteCorsDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainId)) {
            $body['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCorsDomain',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCorsDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCorsDomainRequest $request
     *
     * @return DeleteCorsDomainResponse
     */
    public function deleteCorsDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCorsDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBCollectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDBCollectionResponse
     */
    public function deleteDBCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBCollection',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDBCollectionRequest $request
     *
     * @return DeleteDBCollectionResponse
     */
    public function deleteDBCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBCollectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDingtalkOpenPlatformConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteDingtalkOpenPlatformConfigResponse
     */
    public function deleteDingtalkOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDingtalkOpenPlatformConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDingtalkOpenPlatformConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDingtalkOpenPlatformConfigRequest $request
     *
     * @return DeleteDingtalkOpenPlatformConfigResponse
     */
    public function deleteDingtalkOpenPlatformConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDingtalkOpenPlatformConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFunction',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFunctionRequest $request
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFunctionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSpaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSpaceResponse
     */
    public function deleteSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSpace',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSpaceRequest $request
     *
     * @return DeleteSpaceResponse
     */
    public function deleteSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWebHostingCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteWebHostingCertificateResponse
     */
    public function deleteWebHostingCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWebHostingCertificate',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWebHostingCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWebHostingCertificateRequest $request
     *
     * @return DeleteWebHostingCertificateResponse
     */
    public function deleteWebHostingCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebHostingCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWebHostingFileRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteWebHostingFileResponse
     */
    public function deleteWebHostingFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->filePath)) {
            $body['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWebHostingFile',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWebHostingFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWebHostingFileRequest $request
     *
     * @return DeleteWebHostingFileResponse
     */
    public function deleteWebHostingFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebHostingFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWechatOpenPlatformConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteWechatOpenPlatformConfigResponse
     */
    public function deleteWechatOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWechatOpenPlatformConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWechatOpenPlatformConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWechatOpenPlatformConfigRequest $request
     *
     * @return DeleteWechatOpenPlatformConfigResponse
     */
    public function deleteWechatOpenPlatformConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWechatOpenPlatformConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeployFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeployFunctionResponse
     */
    public function deployFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deploymentId)) {
            $body['DeploymentId'] = $request->deploymentId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeployFunction',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployFunctionRequest $request
     *
     * @return DeployFunctionResponse
     */
    public function deployFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployFunctionWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFCOpenStatusResponse
     */
    public function describeFCOpenStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeFCOpenStatus',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFCOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeFCOpenStatusResponse
     */
    public function describeFCOpenStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFCOpenStatusWithOptions($runtime);
    }

    /**
     * @param DescribeFileUploadSignedUrlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeFileUploadSignedUrlResponse
     */
    public function describeFileUploadSignedUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contentType)) {
            $body['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->filename)) {
            $body['Filename'] = $request->filename;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFileUploadSignedUrl',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFileUploadSignedUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFileUploadSignedUrlRequest $request
     *
     * @return DescribeFileUploadSignedUrlResponse
     */
    public function describeFileUploadSignedUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileUploadSignedUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFunctionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFunctionResponse
     */
    public function describeFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFunction',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFunctionRequest $request
     *
     * @return DescribeFunctionResponse
     */
    public function describeFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFunctionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHttpTriggerConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHttpTriggerConfigResponse
     */
    public function describeHttpTriggerConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeHttpTriggerConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHttpTriggerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHttpTriggerConfigRequest $request
     *
     * @return DescribeHttpTriggerConfigResponse
     */
    public function describeHttpTriggerConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHttpTriggerConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceQuotaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeResourceQuotaResponse
     */
    public function describeResourceQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceQuota',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceQuotaRequest $request
     *
     * @return DescribeResourceQuotaResponse
     */
    public function describeResourceQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceUsageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->format)) {
            $body['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceUsage',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceUsageRequest $request
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServicePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeServicePolicyResponse
     */
    public function describeServicePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->collectionName)) {
            $body['CollectionName'] = $request->collectionName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServicePolicy',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServicePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServicePolicyRequest $request
     *
     * @return DescribeServicePolicyResponse
     */
    public function describeServicePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServicePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSpaceClientConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSpaceClientConfigResponse
     */
    public function describeSpaceClientConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->detail)) {
            $body['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSpaceClientConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSpaceClientConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSpaceClientConfigRequest $request
     *
     * @return DescribeSpaceClientConfigResponse
     */
    public function describeSpaceClientConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpaceClientConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSpacesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSpacesResponse
     */
    public function describeSpacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeSpacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->spaceIds)) {
            $request->spaceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->spaceIds, 'SpaceIds', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->emasWorkspaceId)) {
            $body['EmasWorkspaceId'] = $request->emasWorkspaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->spaceIdsShrink)) {
            $body['SpaceIds'] = $request->spaceIdsShrink;
        }
        if (!Utils::isUnset($request->specCode)) {
            $body['SpecCode'] = $request->specCode;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSpaces',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSpacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSpacesRequest $request
     *
     * @return DescribeSpacesResponse
     */
    public function describeSpaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpacesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebHostingFileRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeWebHostingFileResponse
     */
    public function describeWebHostingFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->filePath)) {
            $body['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebHostingFile',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebHostingFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebHostingFileRequest $request
     *
     * @return DescribeWebHostingFileResponse
     */
    public function describeWebHostingFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebHostingFileWithOptions($request, $runtime);
    }

    /**
     * @param EnableExtensionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EnableExtensionResponse
     */
    public function enableExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extensionId)) {
            $body['ExtensionId'] = $request->extensionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableExtension',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableExtensionRequest $request
     *
     * @return EnableExtensionResponse
     */
    public function enableExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableExtensionWithOptions($request, $runtime);
    }

    /**
     * @param GetWebHostingCertificateDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetWebHostingCertificateDetailResponse
     */
    public function getWebHostingCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customDomain)) {
            $body['CustomDomain'] = $request->customDomain;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWebHostingCertificateDetail',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWebHostingCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWebHostingCertificateDetailRequest $request
     *
     * @return GetWebHostingCertificateDetailResponse
     */
    public function getWebHostingCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebHostingCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetWebHostingConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWebHostingConfigResponse
     */
    public function getWebHostingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWebHostingConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWebHostingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWebHostingConfigRequest $request
     *
     * @return GetWebHostingConfigResponse
     */
    public function getWebHostingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebHostingConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetWebHostingDomainVerificationContentRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetWebHostingDomainVerificationContentResponse
     */
    public function getWebHostingDomainVerificationContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWebHostingDomainVerificationContent',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWebHostingDomainVerificationContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWebHostingDomainVerificationContentRequest $request
     *
     * @return GetWebHostingDomainVerificationContentResponse
     */
    public function getWebHostingDomainVerificationContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebHostingDomainVerificationContentWithOptions($request, $runtime);
    }

    /**
     * @param GetWebHostingStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWebHostingStatusResponse
     */
    public function getWebHostingStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWebHostingStatus',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWebHostingStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWebHostingStatusRequest $request
     *
     * @return GetWebHostingStatusResponse
     */
    public function getWebHostingStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebHostingStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetWebHostingUploadCredentialRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetWebHostingUploadCredentialResponse
     */
    public function getWebHostingUploadCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->filePath)) {
            $body['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWebHostingUploadCredential',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWebHostingUploadCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWebHostingUploadCredentialRequest $request
     *
     * @return GetWebHostingUploadCredentialResponse
     */
    public function getWebHostingUploadCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebHostingUploadCredentialWithOptions($request, $runtime);
    }

    /**
     * @param ListAvailableCertificatesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAvailableCertificatesResponse
     */
    public function listAvailableCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableCertificates',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvailableCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAvailableCertificatesRequest $request
     *
     * @return ListAvailableCertificatesResponse
     */
    public function listAvailableCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableCertificatesWithOptions($request, $runtime);
    }

    /**
     * @param ListCorsDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCorsDomainsResponse
     */
    public function listCorsDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCorsDomains',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCorsDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCorsDomainsRequest $request
     *
     * @return ListCorsDomainsResponse
     */
    public function listCorsDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCorsDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListDingtalkOpenPlatformConfigsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListDingtalkOpenPlatformConfigsResponse
     */
    public function listDingtalkOpenPlatformConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDingtalkOpenPlatformConfigs',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDingtalkOpenPlatformConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDingtalkOpenPlatformConfigsRequest $request
     *
     * @return ListDingtalkOpenPlatformConfigsResponse
     */
    public function listDingtalkOpenPlatformConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDingtalkOpenPlatformConfigsWithOptions($request, $runtime);
    }

    /**
     * @param ListExtensionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListExtensionsResponse
     */
    public function listExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
            'action'      => 'ListExtensions',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListExtensionsRequest $request
     *
     * @return ListExtensionsResponse
     */
    public function listExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExtensionsWithOptions($request, $runtime);
    }

    /**
     * @param ListFileRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListFileResponse
     */
    public function listFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $body = [];
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prefix)) {
            $body['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFile',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFileRequest $request
     *
     * @return ListFileResponse
     */
    public function listFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileWithOptions($request, $runtime);
    }

    /**
     * @param ListFunctionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFunctionResponse
     */
    public function listFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->filterBy)) {
            $body['FilterBy'] = $request->filterBy;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFunction',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFunctionRequest $request
     *
     * @return ListFunctionResponse
     */
    public function listFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionWithOptions($request, $runtime);
    }

    /**
     * @param ListFunctionDeploymentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListFunctionDeploymentResponse
     */
    public function listFunctionDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionDeployment',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFunctionDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFunctionDeploymentRequest $request
     *
     * @return ListFunctionDeploymentResponse
     */
    public function listFunctionDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param ListFunctionLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFunctionLogResponse
     */
    public function listFunctionLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fromDate)) {
            $body['FromDate'] = $request->fromDate;
        }
        if (!Utils::isUnset($request->logRequestId)) {
            $body['LogRequestId'] = $request->logRequestId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->toDate)) {
            $body['ToDate'] = $request->toDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionLog',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFunctionLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFunctionLogRequest $request
     *
     * @return ListFunctionLogResponse
     */
    public function listFunctionLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionLogWithOptions($request, $runtime);
    }

    /**
     * @param ListOpenPlatformConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListOpenPlatformConfigResponse
     */
    public function listOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListOpenPlatformConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOpenPlatformConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOpenPlatformConfigRequest $request
     *
     * @return ListOpenPlatformConfigResponse
     */
    public function listOpenPlatformConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenPlatformConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListSpaceRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListSpaceResponse
     */
    public function listSpaceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSpaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->spaceIds)) {
            $request->spaceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->spaceIds, 'SpaceIds', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->emasWorkspaceId)) {
            $body['EmasWorkspaceId'] = $request->emasWorkspaceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->spaceIdsShrink)) {
            $body['SpaceIds'] = $request->spaceIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSpace',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSpaceRequest $request
     *
     * @return ListSpaceResponse
     */
    public function listSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSpaceWithOptions($request, $runtime);
    }

    /**
     * @param ListWebHostingCustomDomainsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListWebHostingCustomDomainsResponse
     */
    public function listWebHostingCustomDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListWebHostingCustomDomains',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWebHostingCustomDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWebHostingCustomDomainsRequest $request
     *
     * @return ListWebHostingCustomDomainsResponse
     */
    public function listWebHostingCustomDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWebHostingCustomDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListWebHostingFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListWebHostingFilesResponse
     */
    public function listWebHostingFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->marker)) {
            $body['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prefix)) {
            $body['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListWebHostingFiles',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWebHostingFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWebHostingFilesRequest $request
     *
     * @return ListWebHostingFilesResponse
     */
    public function listWebHostingFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWebHostingFilesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebHostingConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyWebHostingConfigResponse
     */
    public function modifyWebHostingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->allowedIps)) {
            $body['AllowedIps'] = $request->allowedIps;
        }
        if (!Utils::isUnset($request->errorPath)) {
            $body['ErrorPath'] = $request->errorPath;
        }
        if (!Utils::isUnset($request->historyModePath)) {
            $body['HistoryModePath'] = $request->historyModePath;
        }
        if (!Utils::isUnset($request->indexPath)) {
            $body['IndexPath'] = $request->indexPath;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebHostingConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebHostingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebHostingConfigRequest $request
     *
     * @return ModifyWebHostingConfigResponse
     */
    public function modifyWebHostingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebHostingConfigWithOptions($request, $runtime);
    }

    /**
     * @param OpenServiceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return OpenServiceResponse
     */
    public function openServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenService',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenServiceRequest $request
     *
     * @return OpenServiceResponse
     */
    public function openService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openServiceWithOptions($request, $runtime);
    }

    /**
     * @param OpenWebHostingServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OpenWebHostingServiceResponse
     */
    public function openWebHostingServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenWebHostingService',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenWebHostingServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenWebHostingServiceRequest $request
     *
     * @return OpenWebHostingServiceResponse
     */
    public function openWebHostingService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openWebHostingServiceWithOptions($request, $runtime);
    }

    /**
     * @param QueryDBBackupCollectionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDBBackupCollectionsResponse
     */
    public function queryDBBackupCollectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backupId)) {
            $body['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDBBackupCollections',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDBBackupCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDBBackupCollectionsRequest $request
     *
     * @return QueryDBBackupCollectionsResponse
     */
    public function queryDBBackupCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDBBackupCollectionsWithOptions($request, $runtime);
    }

    /**
     * @param QueryDBBackupDumpTimesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDBBackupDumpTimesResponse
     */
    public function queryDBBackupDumpTimesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDBBackupDumpTimes',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDBBackupDumpTimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDBBackupDumpTimesRequest $request
     *
     * @return QueryDBBackupDumpTimesResponse
     */
    public function queryDBBackupDumpTimes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDBBackupDumpTimesWithOptions($request, $runtime);
    }

    /**
     * @param QueryDBExportTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDBExportTaskStatusResponse
     */
    public function queryDBExportTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDBExportTaskStatus',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDBExportTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDBExportTaskStatusRequest $request
     *
     * @return QueryDBExportTaskStatusResponse
     */
    public function queryDBExportTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDBExportTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryDBImportTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDBImportTaskStatusResponse
     */
    public function queryDBImportTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDBImportTaskStatus',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDBImportTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDBImportTaskStatusRequest $request
     *
     * @return QueryDBImportTaskStatusResponse
     */
    public function queryDBImportTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDBImportTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryDBRestoreTaskStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDBRestoreTaskStatusResponse
     */
    public function queryDBRestoreTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDBRestoreTaskStatus',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDBRestoreTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDBRestoreTaskStatusRequest $request
     *
     * @return QueryDBRestoreTaskStatusResponse
     */
    public function queryDBRestoreTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDBRestoreTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryServiceStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryServiceStatusResponse
     */
    public function queryServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryServiceStatus',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryServiceStatusRequest $request
     *
     * @return QueryServiceStatusResponse
     */
    public function queryServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpaceConsumptionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySpaceConsumptionResponse
     */
    public function querySpaceConsumptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpaceConsumption',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpaceConsumptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySpaceConsumptionRequest $request
     *
     * @return QuerySpaceConsumptionResponse
     */
    public function querySpaceConsumption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpaceConsumptionWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpaceSpecDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySpaceSpecDetailResponse
     */
    public function querySpaceSpecDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->specCode)) {
            $body['SpecCode'] = $request->specCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpaceSpecDetail',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpaceSpecDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySpaceSpecDetailRequest $request
     *
     * @return QuerySpaceSpecDetailResponse
     */
    public function querySpaceSpecDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpaceSpecDetailWithOptions($request, $runtime);
    }

    /**
     * @param QuerySpaceUsageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySpaceUsageResponse
     */
    public function querySpaceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuerySpaceUsage',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySpaceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySpaceUsageRequest $request
     *
     * @return QuerySpaceUsageResponse
     */
    public function querySpaceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySpaceUsageWithOptions($request, $runtime);
    }

    /**
     * @param RefreshWebHostingCustomDomainCacheRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RefreshWebHostingCustomDomainCacheResponse
     */
    public function refreshWebHostingCustomDomainCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefreshWebHostingCustomDomainCache',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshWebHostingCustomDomainCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshWebHostingCustomDomainCacheRequest $request
     *
     * @return RefreshWebHostingCustomDomainCacheResponse
     */
    public function refreshWebHostingCustomDomainCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshWebHostingCustomDomainCacheWithOptions($request, $runtime);
    }

    /**
     * @param RegisterFileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RegisterFileResponse
     */
    public function registerFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterFile',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterFileRequest $request
     *
     * @return RegisterFileResponse
     */
    public function registerFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerFileWithOptions($request, $runtime);
    }

    /**
     * @param RenameDBCollectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RenameDBCollectionResponse
     */
    public function renameDBCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->newCollection)) {
            $body['NewCollection'] = $request->newCollection;
        }
        if (!Utils::isUnset($request->originCollection)) {
            $body['OriginCollection'] = $request->originCollection;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameDBCollection',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameDBCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenameDBCollectionRequest $request
     *
     * @return RenameDBCollectionResponse
     */
    public function renameDBCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameDBCollectionWithOptions($request, $runtime);
    }

    /**
     * @param ResetServerSecretRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetServerSecretResponse
     */
    public function resetServerSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetServerSecret',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetServerSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetServerSecretRequest $request
     *
     * @return ResetServerSecretResponse
     */
    public function resetServerSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetServerSecretWithOptions($request, $runtime);
    }

    /**
     * @param RunDBCommandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunDBCommandResponse
     */
    public function runDBCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunDBCommand',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunDBCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunDBCommandRequest $request
     *
     * @return RunDBCommandResponse
     */
    public function runDBCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDBCommandWithOptions($request, $runtime);
    }

    /**
     * @param RunFunctionRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RunFunctionResponse
     */
    public function runFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunFunction',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunFunctionRequest $request
     *
     * @return RunFunctionResponse
     */
    public function runFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runFunctionWithOptions($request, $runtime);
    }

    /**
     * @param SaveAntOpenPlatformConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SaveAntOpenPlatformConfigResponse
     */
    public function saveAntOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appCert)) {
            $body['AppCert'] = $request->appCert;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $body['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->publicCert)) {
            $body['PublicCert'] = $request->publicCert;
        }
        if (!Utils::isUnset($request->publicKey)) {
            $body['PublicKey'] = $request->publicKey;
        }
        if (!Utils::isUnset($request->rootCert)) {
            $body['RootCert'] = $request->rootCert;
        }
        if (!Utils::isUnset($request->signMode)) {
            $body['SignMode'] = $request->signMode;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveAntOpenPlatformConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveAntOpenPlatformConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveAntOpenPlatformConfigRequest $request
     *
     * @return SaveAntOpenPlatformConfigResponse
     */
    public function saveAntOpenPlatformConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAntOpenPlatformConfigWithOptions($request, $runtime);
    }

    /**
     * @param SaveAppAuthTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SaveAppAuthTokenResponse
     */
    public function saveAppAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appAuthToken)) {
            $body['AppAuthToken'] = $request->appAuthToken;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->isvAppId)) {
            $body['IsvAppId'] = $request->isvAppId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveAppAuthToken',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveAppAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveAppAuthTokenRequest $request
     *
     * @return SaveAppAuthTokenResponse
     */
    public function saveAppAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveAppAuthTokenWithOptions($request, $runtime);
    }

    /**
     * @param SaveWebHostingCustomDomainConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveWebHostingCustomDomainConfigResponse
     */
    public function saveWebHostingCustomDomainConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->forceRedirectType)) {
            $body['ForceRedirectType'] = $request->forceRedirectType;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveWebHostingCustomDomainConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveWebHostingCustomDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveWebHostingCustomDomainConfigRequest $request
     *
     * @return SaveWebHostingCustomDomainConfigResponse
     */
    public function saveWebHostingCustomDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveWebHostingCustomDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param SaveWebHostingCustomDomainCorsConfigRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SaveWebHostingCustomDomainCorsConfigResponse
     */
    public function saveWebHostingCustomDomainCorsConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessControlAllowOrigin)) {
            $body['AccessControlAllowOrigin'] = $request->accessControlAllowOrigin;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->enableCors)) {
            $body['EnableCors'] = $request->enableCors;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveWebHostingCustomDomainCorsConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveWebHostingCustomDomainCorsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveWebHostingCustomDomainCorsConfigRequest $request
     *
     * @return SaveWebHostingCustomDomainCorsConfigResponse
     */
    public function saveWebHostingCustomDomainCorsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveWebHostingCustomDomainCorsConfigWithOptions($request, $runtime);
    }

    /**
     * @param SaveWechatOpenPlatformConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SaveWechatOpenPlatformConfigResponse
     */
    public function saveWechatOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $body['AppSecret'] = $request->appSecret;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveWechatOpenPlatformConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveWechatOpenPlatformConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveWechatOpenPlatformConfigRequest $request
     *
     * @return SaveWechatOpenPlatformConfigResponse
     */
    public function saveWechatOpenPlatformConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveWechatOpenPlatformConfigWithOptions($request, $runtime);
    }

    /**
     * @param UnbindWebHostingCustomDomainRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnbindWebHostingCustomDomainResponse
     */
    public function unbindWebHostingCustomDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customDomain)) {
            $body['CustomDomain'] = $request->customDomain;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnbindWebHostingCustomDomain',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindWebHostingCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindWebHostingCustomDomainRequest $request
     *
     * @return UnbindWebHostingCustomDomainResponse
     */
    public function unbindWebHostingCustomDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindWebHostingCustomDomainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDingtalkOpenPlatformConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateDingtalkOpenPlatformConfigResponse
     */
    public function updateDingtalkOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $body['AppSecret'] = $request->appSecret;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDingtalkOpenPlatformConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDingtalkOpenPlatformConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDingtalkOpenPlatformConfigRequest $request
     *
     * @return UpdateDingtalkOpenPlatformConfigResponse
     */
    public function updateDingtalkOpenPlatformConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDingtalkOpenPlatformConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFunctionResponse
     */
    public function updateFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->httpTriggerPath)) {
            $body['HttpTriggerPath'] = $request->httpTriggerPath;
        }
        if (!Utils::isUnset($request->instanceConcurrency)) {
            $body['InstanceConcurrency'] = $request->instanceConcurrency;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->runtime)) {
            $body['Runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->timingTriggerConfig)) {
            $body['TimingTriggerConfig'] = $request->timingTriggerConfig;
        }
        if (!Utils::isUnset($request->timingTriggerUserPayload)) {
            $body['TimingTriggerUserPayload'] = $request->timingTriggerUserPayload;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunction',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFunctionRequest $request
     *
     * @return UpdateFunctionResponse
     */
    public function updateFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFunctionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHttpTriggerConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateHttpTriggerConfigResponse
     */
    public function updateHttpTriggerConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customDomain)) {
            $body['CustomDomain'] = $request->customDomain;
        }
        if (!Utils::isUnset($request->customDomainCertificate)) {
            $body['CustomDomainCertificate'] = $request->customDomainCertificate;
        }
        if (!Utils::isUnset($request->customDomainPrivateKey)) {
            $body['CustomDomainPrivateKey'] = $request->customDomainPrivateKey;
        }
        if (!Utils::isUnset($request->enableService)) {
            $body['EnableService'] = $request->enableService;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHttpTriggerConfig',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHttpTriggerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHttpTriggerConfigRequest $request
     *
     * @return UpdateHttpTriggerConfigResponse
     */
    public function updateHttpTriggerConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpTriggerConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServicePolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateServicePolicyResponse
     */
    public function updateServicePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->collectionName)) {
            $body['CollectionName'] = $request->collectionName;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->policyName)) {
            $body['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServicePolicy',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServicePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServicePolicyRequest $request
     *
     * @return UpdateServicePolicyResponse
     */
    public function updateServicePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServicePolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSpaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSpaceResponse
     */
    public function updateSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSpace',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSpaceRequest $request
     *
     * @return UpdateSpaceResponse
     */
    public function updateSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSpaceWithOptions($request, $runtime);
    }

    /**
     * @param VerifyWebHostingDomainOwnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return VerifyWebHostingDomainOwnerResponse
     */
    public function verifyWebHostingDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->verifyType)) {
            $body['VerifyType'] = $request->verifyType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyWebHostingDomainOwner',
            'version'     => '2019-06-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyWebHostingDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyWebHostingDomainOwnerRequest $request
     *
     * @return VerifyWebHostingDomainOwnerResponse
     */
    public function verifyWebHostingDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyWebHostingDomainOwnerWithOptions($request, $runtime);
    }
}
