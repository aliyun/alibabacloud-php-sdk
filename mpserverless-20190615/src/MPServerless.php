<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AddCorsDomainRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AddCorsDomainResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AddDingtalkOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AddDingtalkOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AttachSmsSignRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AttachSmsSignResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AttachWebHostingCertificateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\AttachWebHostingCertificateResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\BatchDeleteWebHostingFilesRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\BatchDeleteWebHostingFilesResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\BindWebHostingCustomDomainRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\BindWebHostingCustomDomainResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CheckMpServerlessRoleExistsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CheckMpServerlessRoleExistsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CheckSmsHasAuthorizedToMPSRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CheckSmsHasAuthorizedToMPSResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateBuiltinFunctionTemplateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateBuiltinFunctionTemplateResponse;
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
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSmsSignRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSmsSignResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSmsTemplateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSmsTemplateResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSpaceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateSpaceResponse;
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
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteSmsSignRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteSmsSignResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteSmsTemplateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DeleteSmsTemplateResponse;
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
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFileUploadSignedUrlRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFileUploadSignedUrlResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeHttpTriggerConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeHttpTriggerConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeISVFileUploadSignedUrlRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeISVFileUploadSignedUrlResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeProductOpenStatusRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeProductOpenStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeServicePolicyRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeServicePolicyResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsOpenStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsSignRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsSignResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsSignStatusRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsSignStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsTemplateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsTemplateResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsTemplateStatusRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsTemplateStatusResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpaceClientConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpaceClientConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpaceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpaceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeWebHostingFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeWebHostingFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\EnableExtensionRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\EnableExtensionResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\EnableSmsServiceResponse;
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
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionSpecResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListOpenPlatformConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListOpenPlatformConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSmsSignsForAccountRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSmsSignsForAccountResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSmsSignsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSmsSignsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSmsTemplatesRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSmsTemplatesResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSpaceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSpaceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingCustomDomainsRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingCustomDomainsResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingFilesRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingFilesResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ModifyWebHostingConfigRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ModifyWebHostingConfigResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\MoveWebHostingFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\MoveWebHostingFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\OpenProductRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\OpenProductResponse;
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
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RegisterFileRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\RegisterFileResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ReleaseBuiltinFunctionTemplateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ReleaseBuiltinFunctionTemplateResponse;
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
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveBuiltinFunctionTemplateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\SaveBuiltinFunctionTemplateResponse;
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
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateSmsSignRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateSmsSignResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateSmsTemplateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateSmsTemplateResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateSpaceRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateSpaceResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\VerifyBuiltinFunctionTemplateRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\VerifyBuiltinFunctionTemplateResponse;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\VerifyWebHostingDomainOwnerRequest;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\VerifyWebHostingDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param RunFunctionRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RunFunctionResponse
     */
    public function runFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunFunctionResponse::fromMap($this->doRPCRequest('RunFunction', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListFunctionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFunctionResponse
     */
    public function listFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFunctionResponse::fromMap($this->doRPCRequest('ListFunction', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetWebHostingCertificateDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetWebHostingCertificateDetailResponse
     */
    public function getWebHostingCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWebHostingCertificateDetailResponse::fromMap($this->doRPCRequest('GetWebHostingCertificateDetail', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateSpaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSpaceResponse
     */
    public function updateSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSpaceResponse::fromMap($this->doRPCRequest('UpdateSpace', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveWebHostingCustomDomainConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SaveWebHostingCustomDomainConfigResponse
     */
    public function saveWebHostingCustomDomainConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveWebHostingCustomDomainConfigResponse::fromMap($this->doRPCRequest('SaveWebHostingCustomDomainConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return ListFunctionSpecResponse
     */
    public function listFunctionSpecWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListFunctionSpecResponse::fromMap($this->doRPCRequest('ListFunctionSpec', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListFunctionSpecResponse
     */
    public function listFunctionSpec()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionSpecWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWechatOpenPlatformConfigResponse::fromMap($this->doRPCRequest('DeleteWechatOpenPlatformConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSpaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSpaceResponse
     */
    public function createSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSpaceResponse::fromMap($this->doRPCRequest('CreateSpace', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OpenProductRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return OpenProductResponse
     */
    public function openProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenProductResponse::fromMap($this->doRPCRequest('OpenProduct', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OpenProductRequest $request
     *
     * @return OpenProductResponse
     */
    public function openProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openProductWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenServiceResponse::fromMap($this->doRPCRequest('OpenService', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSpaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSpaceResponse
     */
    public function deleteSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSpaceResponse::fromMap($this->doRPCRequest('DeleteSpace', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteAntOpenPlatformConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAntOpenPlatformConfigResponse
     */
    public function deleteAntOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAntOpenPlatformConfigResponse::fromMap($this->doRPCRequest('DeleteAntOpenPlatformConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFCOpenStatusResponse
     */
    public function describeFCOpenStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeFCOpenStatusResponse::fromMap($this->doRPCRequest('DescribeFCOpenStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFileUploadSignedUrlResponse::fromMap($this->doRPCRequest('DescribeFileUploadSignedUrl', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFileResponse::fromMap($this->doRPCRequest('DeleteFile', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDBImportTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDBImportTaskStatusResponse
     */
    public function queryDBImportTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDBImportTaskStatusResponse::fromMap($this->doRPCRequest('QueryDBImportTaskStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RegisterFileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RegisterFileResponse
     */
    public function registerFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterFileResponse::fromMap($this->doRPCRequest('RegisterFile', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveAntOpenPlatformConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SaveAntOpenPlatformConfigResponse
     */
    public function saveAntOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveAntOpenPlatformConfigResponse::fromMap($this->doRPCRequest('SaveAntOpenPlatformConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeFunctionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFunctionResponse
     */
    public function describeFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFunctionResponse::fromMap($this->doRPCRequest('DescribeFunction', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OpenWebHostingServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OpenWebHostingServiceResponse
     */
    public function openWebHostingServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenWebHostingServiceResponse::fromMap($this->doRPCRequest('OpenWebHostingService', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSmsSignRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSmsSignResponse
     */
    public function describeSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmsSignResponse::fromMap($this->doRPCRequest('DescribeSmsSign', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmsSignRequest $request
     *
     * @return DescribeSmsSignResponse
     */
    public function describeSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmsSignWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAvailableCertificatesResponse::fromMap($this->doRPCRequest('ListAvailableCertificates', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListOpenPlatformConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListOpenPlatformConfigResponse
     */
    public function listOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOpenPlatformConfigResponse::fromMap($this->doRPCRequest('ListOpenPlatformConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyWebHostingConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyWebHostingConfigResponse
     */
    public function modifyWebHostingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebHostingConfigResponse::fromMap($this->doRPCRequest('ModifyWebHostingConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSmsSignResponse::fromMap($this->doRPCRequest('DeleteSmsSign', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSmsSignRequest $request
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSmsOpenStatusResponse
     */
    public function describeSmsOpenStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeSmsOpenStatusResponse::fromMap($this->doRPCRequest('DescribeSmsOpenStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeSmsOpenStatusResponse
     */
    public function describeSmsOpenStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmsOpenStatusWithOptions($runtime);
    }

    /**
     * @param ListSpaceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListSpaceResponse
     */
    public function listSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSpaceResponse::fromMap($this->doRPCRequest('ListSpace', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDBCollectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDBCollectionResponse
     */
    public function deleteDBCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBCollectionResponse::fromMap($this->doRPCRequest('DeleteDBCollection', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateFunctionDeploymentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateFunctionDeploymentResponse
     */
    public function createFunctionDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFunctionDeploymentResponse::fromMap($this->doRPCRequest('CreateFunctionDeployment', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetWebHostingUploadCredentialRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetWebHostingUploadCredentialResponse
     */
    public function getWebHostingUploadCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWebHostingUploadCredentialResponse::fromMap($this->doRPCRequest('GetWebHostingUploadCredential', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListFunctionDeploymentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListFunctionDeploymentResponse
     */
    public function listFunctionDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFunctionDeploymentResponse::fromMap($this->doRPCRequest('ListFunctionDeployment', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddDingtalkOpenPlatformConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddDingtalkOpenPlatformConfigResponse
     */
    public function addDingtalkOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDingtalkOpenPlatformConfigResponse::fromMap($this->doRPCRequest('AddDingtalkOpenPlatformConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDBRestoreTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDBRestoreTaskResponse
     */
    public function createDBRestoreTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBRestoreTaskResponse::fromMap($this->doRPCRequest('CreateDBRestoreTask', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AttachWebHostingCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AttachWebHostingCertificateResponse
     */
    public function attachWebHostingCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachWebHostingCertificateResponse::fromMap($this->doRPCRequest('AttachWebHostingCertificate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListFileRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListFileResponse
     */
    public function listFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFileResponse::fromMap($this->doRPCRequest('ListFile', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDBRestoreTaskStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDBRestoreTaskStatusResponse
     */
    public function queryDBRestoreTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDBRestoreTaskStatusResponse::fromMap($this->doRPCRequest('QueryDBRestoreTaskStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param VerifyWebHostingDomainOwnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return VerifyWebHostingDomainOwnerResponse
     */
    public function verifyWebHostingDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyWebHostingDomainOwnerResponse::fromMap($this->doRPCRequest('VerifyWebHostingDomainOwner', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

    /**
     * @param DeleteSmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSmsTemplateResponse::fromMap($this->doRPCRequest('DeleteSmsTemplate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSmsTemplateRequest $request
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDBExportTaskStatusResponse::fromMap($this->doRPCRequest('QueryDBExportTaskStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDBImportTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDBImportTaskResponse
     */
    public function createDBImportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBImportTaskResponse::fromMap($this->doRPCRequest('CreateDBImportTask', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckSmsHasAuthorizedToMPSRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CheckSmsHasAuthorizedToMPSResponse
     */
    public function checkSmsHasAuthorizedToMPSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckSmsHasAuthorizedToMPSResponse::fromMap($this->doRPCRequest('CheckSmsHasAuthorizedToMPS', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckSmsHasAuthorizedToMPSRequest $request
     *
     * @return CheckSmsHasAuthorizedToMPSResponse
     */
    public function checkSmsHasAuthorizedToMPS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSmsHasAuthorizedToMPSWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServicePolicyResponse::fromMap($this->doRPCRequest('DescribeServicePolicy', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListSmsTemplatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSmsTemplatesResponse
     */
    public function listSmsTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSmsTemplatesResponse::fromMap($this->doRPCRequest('ListSmsTemplates', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSmsTemplatesRequest $request
     *
     * @return ListSmsTemplatesResponse
     */
    public function listSmsTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmsTemplatesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDBBackupCollectionsResponse::fromMap($this->doRPCRequest('QueryDBBackupCollections', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryServiceStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryServiceStatusResponse
     */
    public function queryServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryServiceStatusResponse::fromMap($this->doRPCRequest('QueryServiceStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSpaceClientConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSpaceClientConfigResponse
     */
    public function describeSpaceClientConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSpaceClientConfigResponse::fromMap($this->doRPCRequest('DescribeSpaceClientConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveBuiltinFunctionTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SaveBuiltinFunctionTemplateResponse
     */
    public function saveBuiltinFunctionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveBuiltinFunctionTemplateResponse::fromMap($this->doRPCRequest('SaveBuiltinFunctionTemplate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveBuiltinFunctionTemplateRequest $request
     *
     * @return SaveBuiltinFunctionTemplateResponse
     */
    public function saveBuiltinFunctionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveBuiltinFunctionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeISVFileUploadSignedUrlRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeISVFileUploadSignedUrlResponse
     */
    public function describeISVFileUploadSignedUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeISVFileUploadSignedUrlResponse::fromMap($this->doRPCRequest('DescribeISVFileUploadSignedUrl', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeISVFileUploadSignedUrlRequest $request
     *
     * @return DescribeISVFileUploadSignedUrlResponse
     */
    public function describeISVFileUploadSignedUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeISVFileUploadSignedUrlWithOptions($request, $runtime);
    }

    /**
     * @param CreateBuiltinFunctionTemplateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateBuiltinFunctionTemplateResponse
     */
    public function createBuiltinFunctionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBuiltinFunctionTemplateResponse::fromMap($this->doRPCRequest('CreateBuiltinFunctionTemplate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBuiltinFunctionTemplateRequest $request
     *
     * @return CreateBuiltinFunctionTemplateResponse
     */
    public function createBuiltinFunctionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBuiltinFunctionTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWebHostingStatusResponse::fromMap($this->doRPCRequest('GetWebHostingStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListFunctionLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFunctionLogResponse
     */
    public function listFunctionLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFunctionLogResponse::fromMap($this->doRPCRequest('ListFunctionLog', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListWebHostingFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListWebHostingFilesResponse
     */
    public function listWebHostingFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListWebHostingFilesResponse::fromMap($this->doRPCRequest('ListWebHostingFiles', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeFileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeFileResponse
     */
    public function describeFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFileResponse::fromMap($this->doRPCRequest('DescribeFile', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFileRequest $request
     *
     * @return DescribeFileResponse
     */
    public function describeFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileWithOptions($request, $runtime);
    }

    /**
     * @param MoveWebHostingFileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MoveWebHostingFileResponse
     */
    public function moveWebHostingFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveWebHostingFileResponse::fromMap($this->doRPCRequest('MoveWebHostingFile', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MoveWebHostingFileRequest $request
     *
     * @return MoveWebHostingFileResponse
     */
    public function moveWebHostingFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveWebHostingFileWithOptions($request, $runtime);
    }

    /**
     * @param CreateSmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSmsTemplateResponse
     */
    public function createSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSmsTemplateResponse::fromMap($this->doRPCRequest('CreateSmsTemplate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSmsTemplateRequest $request
     *
     * @return CreateSmsTemplateResponse
     */
    public function createSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmsTemplateStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSmsTemplateStatusResponse
     */
    public function describeSmsTemplateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmsTemplateStatusResponse::fromMap($this->doRPCRequest('DescribeSmsTemplateStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmsTemplateStatusRequest $request
     *
     * @return DescribeSmsTemplateStatusResponse
     */
    public function describeSmsTemplateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmsTemplateStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindWebHostingCustomDomainResponse::fromMap($this->doRPCRequest('BindWebHostingCustomDomain', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFunctionResponse
     */
    public function createFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFunctionResponse::fromMap($this->doRPCRequest('CreateFunction', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDingtalkOpenPlatformConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteDingtalkOpenPlatformConfigResponse
     */
    public function deleteDingtalkOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDingtalkOpenPlatformConfigResponse::fromMap($this->doRPCRequest('DeleteDingtalkOpenPlatformConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListExtensionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListExtensionsResponse
     */
    public function listExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListExtensionsResponse::fromMap($this->doRPCRequest('ListExtensions', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return EnableSmsServiceResponse
     */
    public function enableSmsServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return EnableSmsServiceResponse::fromMap($this->doRPCRequest('EnableSmsService', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return EnableSmsServiceResponse
     */
    public function enableSmsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSmsServiceWithOptions($runtime);
    }

    /**
     * @param ReleaseBuiltinFunctionTemplateRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ReleaseBuiltinFunctionTemplateResponse
     */
    public function releaseBuiltinFunctionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseBuiltinFunctionTemplateResponse::fromMap($this->doRPCRequest('ReleaseBuiltinFunctionTemplate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseBuiltinFunctionTemplateRequest $request
     *
     * @return ReleaseBuiltinFunctionTemplateResponse
     */
    public function releaseBuiltinFunctionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseBuiltinFunctionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSmsSignResponse::fromMap($this->doRPCRequest('CreateSmsSign', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSmsSignRequest $request
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSignWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFunctionResponse::fromMap($this->doRPCRequest('UpdateFunction', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateHttpTriggerConfigResponse::fromMap($this->doRPCRequest('UpdateHttpTriggerConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ResetServerSecretRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetServerSecretResponse
     */
    public function resetServerSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetServerSecretResponse::fromMap($this->doRPCRequest('ResetServerSecret', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetWebHostingDomainVerificationContentRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetWebHostingDomainVerificationContentResponse
     */
    public function getWebHostingDomainVerificationContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWebHostingDomainVerificationContentResponse::fromMap($this->doRPCRequest('GetWebHostingDomainVerificationContent', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDingtalkOpenPlatformConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateDingtalkOpenPlatformConfigResponse
     */
    public function updateDingtalkOpenPlatformConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDingtalkOpenPlatformConfigResponse::fromMap($this->doRPCRequest('UpdateDingtalkOpenPlatformConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckMpServerlessRoleExistsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CheckMpServerlessRoleExistsResponse
     */
    public function checkMpServerlessRoleExistsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckMpServerlessRoleExistsResponse::fromMap($this->doRPCRequest('CheckMpServerlessRoleExists', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param EnableExtensionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EnableExtensionResponse
     */
    public function enableExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableExtensionResponse::fromMap($this->doRPCRequest('EnableExtension', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListSmsSignsForAccountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListSmsSignsForAccountResponse
     */
    public function listSmsSignsForAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSmsSignsForAccountResponse::fromMap($this->doRPCRequest('ListSmsSignsForAccount', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSmsSignsForAccountRequest $request
     *
     * @return ListSmsSignsForAccountResponse
     */
    public function listSmsSignsForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmsSignsForAccountWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCorsDomainsResponse::fromMap($this->doRPCRequest('ListCorsDomains', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDingtalkOpenPlatformConfigsResponse::fromMap($this->doRPCRequest('ListDingtalkOpenPlatformConfigs', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDBExportTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDBExportTaskResponse
     */
    public function createDBExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBExportTaskResponse::fromMap($this->doRPCRequest('CreateDBExportTask', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetWebHostingConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetWebHostingConfigResponse
     */
    public function getWebHostingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWebHostingConfigResponse::fromMap($this->doRPCRequest('GetWebHostingConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UnbindWebHostingCustomDomainRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnbindWebHostingCustomDomainResponse
     */
    public function unbindWebHostingCustomDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindWebHostingCustomDomainResponse::fromMap($this->doRPCRequest('UnbindWebHostingCustomDomain', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSmsTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSmsTemplateResponse
     */
    public function describeSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmsTemplateResponse::fromMap($this->doRPCRequest('DescribeSmsTemplate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmsTemplateRequest $request
     *
     * @return DescribeSmsTemplateResponse
     */
    public function describeSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmsTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveWebHostingCustomDomainCorsConfigResponse::fromMap($this->doRPCRequest('SaveWebHostingCustomDomainCorsConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchDeleteWebHostingFilesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchDeleteWebHostingFilesResponse
     */
    public function batchDeleteWebHostingFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteWebHostingFilesResponse::fromMap($this->doRPCRequest('BatchDeleteWebHostingFiles', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteCorsDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCorsDomainResponse
     */
    public function deleteCorsDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCorsDomainResponse::fromMap($this->doRPCRequest('DeleteCorsDomain', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeHttpTriggerConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHttpTriggerConfigResponse
     */
    public function describeHttpTriggerConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHttpTriggerConfigResponse::fromMap($this->doRPCRequest('DescribeHttpTriggerConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveAppAuthTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SaveAppAuthTokenResponse
     */
    public function saveAppAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveAppAuthTokenResponse::fromMap($this->doRPCRequest('SaveAppAuthToken', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSmsSignStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSmsSignStatusResponse
     */
    public function describeSmsSignStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSmsSignStatusResponse::fromMap($this->doRPCRequest('DescribeSmsSignStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSmsSignStatusRequest $request
     *
     * @return DescribeSmsSignStatusResponse
     */
    public function describeSmsSignStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmsSignStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveWechatOpenPlatformConfigResponse::fromMap($this->doRPCRequest('SaveWechatOpenPlatformConfig', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSpaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeSpaceResponse
     */
    public function describeSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSpaceResponse::fromMap($this->doRPCRequest('DescribeSpace', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSpaceRequest $request
     *
     * @return DescribeSpaceResponse
     */
    public function describeSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpaceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenameDBCollectionResponse::fromMap($this->doRPCRequest('RenameDBCollection', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListSmsSignsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSmsSignsResponse
     */
    public function listSmsSignsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSmsSignsResponse::fromMap($this->doRPCRequest('ListSmsSigns', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSmsSignsRequest $request
     *
     * @return ListSmsSignsResponse
     */
    public function listSmsSigns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmsSignsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProductOpenStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeProductOpenStatusResponse
     */
    public function describeProductOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProductOpenStatusResponse::fromMap($this->doRPCRequest('DescribeProductOpenStatus', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProductOpenStatusRequest $request
     *
     * @return DescribeProductOpenStatusResponse
     */
    public function describeProductOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateSmsSignResponse
     */
    public function updateSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSmsSignResponse::fromMap($this->doRPCRequest('UpdateSmsSign', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSmsSignRequest $request
     *
     * @return UpdateSmsSignResponse
     */
    public function updateSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmsSignWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWebHostingCertificateResponse::fromMap($this->doRPCRequest('DeleteWebHostingCertificate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDBBackupDumpTimesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDBBackupDumpTimesResponse
     */
    public function queryDBBackupDumpTimesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDBBackupDumpTimesResponse::fromMap($this->doRPCRequest('QueryDBBackupDumpTimes', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeployFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeployFunctionResponse
     */
    public function deployFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeployFunctionResponse::fromMap($this->doRPCRequest('DeployFunction', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AttachSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AttachSmsSignResponse
     */
    public function attachSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachSmsSignResponse::fromMap($this->doRPCRequest('AttachSmsSign', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachSmsSignRequest $request
     *
     * @return AttachSmsSignResponse
     */
    public function attachSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachSmsSignWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateServicePolicyResponse::fromMap($this->doRPCRequest('UpdateServicePolicy', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddCorsDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddCorsDomainResponse
     */
    public function addCorsDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCorsDomainResponse::fromMap($this->doRPCRequest('AddCorsDomain', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeWebHostingFileRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeWebHostingFileResponse
     */
    public function describeWebHostingFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebHostingFileResponse::fromMap($this->doRPCRequest('DescribeWebHostingFile', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateSmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSmsTemplateResponse
     */
    public function updateSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSmsTemplateResponse::fromMap($this->doRPCRequest('UpdateSmsTemplate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSmsTemplateRequest $request
     *
     * @return UpdateSmsTemplateResponse
     */
    public function updateSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param VerifyBuiltinFunctionTemplateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return VerifyBuiltinFunctionTemplateResponse
     */
    public function verifyBuiltinFunctionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyBuiltinFunctionTemplateResponse::fromMap($this->doRPCRequest('VerifyBuiltinFunctionTemplate', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param VerifyBuiltinFunctionTemplateRequest $request
     *
     * @return VerifyBuiltinFunctionTemplateResponse
     */
    public function verifyBuiltinFunctionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyBuiltinFunctionTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWebHostingFileResponse::fromMap($this->doRPCRequest('DeleteWebHostingFile', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListWebHostingCustomDomainsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListWebHostingCustomDomainsResponse
     */
    public function listWebHostingCustomDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListWebHostingCustomDomainsResponse::fromMap($this->doRPCRequest('ListWebHostingCustomDomains', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RunDBCommandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunDBCommandResponse
     */
    public function runDBCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunDBCommandResponse::fromMap($this->doRPCRequest('RunDBCommand', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteFunctionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFunctionResponse::fromMap($this->doRPCRequest('DeleteFunction', '2019-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
