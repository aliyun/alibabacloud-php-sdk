<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricDecryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricDecryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricEncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricEncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricSignRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricSignResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricVerifyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\AsymmetricVerifyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CancelKeyDeletionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CancelKeyDeletionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CertificatePrivateKeyDecryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CertificatePrivateKeyDecryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CertificatePrivateKeySignRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CertificatePrivateKeySignResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CertificatePublicKeyEncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CertificatePublicKeyEncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CertificatePublicKeyVerifyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CertificatePublicKeyVerifyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateCertificateShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateSecretShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DecryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DecryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DecryptShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteKeyMaterialRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteKeyMaterialResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeAccountKmsStatusResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyVersionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyVersionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DisableKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DisableKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\EnableKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\EnableKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\EncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\EncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\EncryptShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ExportCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ExportCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ExportDataKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ExportDataKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ExportDataKeyShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateAndExportDataKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateAndExportDataKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateAndExportDataKeyShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyWithoutPlaintextRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyWithoutPlaintextResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateDataKeyWithoutPlaintextShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetParametersForImportRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetParametersForImportResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetPublicKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetPublicKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetRandomPasswordRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetRandomPasswordResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportEncryptionCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportEncryptionCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportKeyMaterialRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportKeyMaterialResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListCertificatesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListCertificatesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\OpenKmsServiceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ReEncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ReEncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ReEncryptShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\RestoreSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\RestoreSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\RotateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\RotateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ScheduleKeyDeletionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ScheduleKeyDeletionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\TagResourceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\TagResourceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UntagResourceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UntagResourceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateCertificateStatusRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateCertificateStatusResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateKeyDescriptionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateKeyDescriptionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateRotationPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateRotationPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRotationPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRotationPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretVersionStageRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretVersionStageResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UploadCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UploadCertificateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Kms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('kms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AsymmetricDecryptRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AsymmetricDecryptResponse
     */
    public function asymmetricDecryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AsymmetricDecryptResponse::fromMap($this->doRPCRequest('AsymmetricDecrypt', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AsymmetricDecryptRequest $request
     *
     * @return AsymmetricDecryptResponse
     */
    public function asymmetricDecrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricDecryptWithOptions($request, $runtime);
    }

    /**
     * @param AsymmetricEncryptRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AsymmetricEncryptResponse
     */
    public function asymmetricEncryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AsymmetricEncryptResponse::fromMap($this->doRPCRequest('AsymmetricEncrypt', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AsymmetricEncryptRequest $request
     *
     * @return AsymmetricEncryptResponse
     */
    public function asymmetricEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricEncryptWithOptions($request, $runtime);
    }

    /**
     * @param AsymmetricSignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AsymmetricSignResponse
     */
    public function asymmetricSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AsymmetricSignResponse::fromMap($this->doRPCRequest('AsymmetricSign', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AsymmetricSignRequest $request
     *
     * @return AsymmetricSignResponse
     */
    public function asymmetricSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricSignWithOptions($request, $runtime);
    }

    /**
     * @param AsymmetricVerifyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AsymmetricVerifyResponse
     */
    public function asymmetricVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AsymmetricVerifyResponse::fromMap($this->doRPCRequest('AsymmetricVerify', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AsymmetricVerifyRequest $request
     *
     * @return AsymmetricVerifyResponse
     */
    public function asymmetricVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricVerifyWithOptions($request, $runtime);
    }

    /**
     * @param CancelKeyDeletionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelKeyDeletionResponse
     */
    public function cancelKeyDeletionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelKeyDeletionResponse::fromMap($this->doRPCRequest('CancelKeyDeletion', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelKeyDeletionRequest $request
     *
     * @return CancelKeyDeletionResponse
     */
    public function cancelKeyDeletion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelKeyDeletionWithOptions($request, $runtime);
    }

    /**
     * @param CertificatePrivateKeyDecryptRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CertificatePrivateKeyDecryptResponse
     */
    public function certificatePrivateKeyDecryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CertificatePrivateKeyDecryptResponse::fromMap($this->doRPCRequest('CertificatePrivateKeyDecrypt', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CertificatePrivateKeyDecryptRequest $request
     *
     * @return CertificatePrivateKeyDecryptResponse
     */
    public function certificatePrivateKeyDecrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificatePrivateKeyDecryptWithOptions($request, $runtime);
    }

    /**
     * @param CertificatePrivateKeySignRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CertificatePrivateKeySignResponse
     */
    public function certificatePrivateKeySignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CertificatePrivateKeySignResponse::fromMap($this->doRPCRequest('CertificatePrivateKeySign', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CertificatePrivateKeySignRequest $request
     *
     * @return CertificatePrivateKeySignResponse
     */
    public function certificatePrivateKeySign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificatePrivateKeySignWithOptions($request, $runtime);
    }

    /**
     * @param CertificatePublicKeyEncryptRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CertificatePublicKeyEncryptResponse
     */
    public function certificatePublicKeyEncryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CertificatePublicKeyEncryptResponse::fromMap($this->doRPCRequest('CertificatePublicKeyEncrypt', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CertificatePublicKeyEncryptRequest $request
     *
     * @return CertificatePublicKeyEncryptResponse
     */
    public function certificatePublicKeyEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificatePublicKeyEncryptWithOptions($request, $runtime);
    }

    /**
     * @param CertificatePublicKeyVerifyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CertificatePublicKeyVerifyResponse
     */
    public function certificatePublicKeyVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CertificatePublicKeyVerifyResponse::fromMap($this->doRPCRequest('CertificatePublicKeyVerify', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CertificatePublicKeyVerifyRequest $request
     *
     * @return CertificatePublicKeyVerifyResponse
     */
    public function certificatePublicKeyVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificatePublicKeyVerifyWithOptions($request, $runtime);
    }

    /**
     * @param CreateAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAliasResponse
     */
    public function createAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAliasResponse::fromMap($this->doRPCRequest('CreateAlias', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAliasRequest $request
     *
     * @return CreateAliasResponse
     */
    public function createAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAliasWithOptions($request, $runtime);
    }

    /**
     * @param CreateCertificateRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCertificateResponse
     */
    public function createCertificateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCertificateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->subjectAlternativeNames)) {
            $request->subjectAlternativeNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subjectAlternativeNames, 'SubjectAlternativeNames', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCertificateResponse::fromMap($this->doRPCRequest('CreateCertificate', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCertificateRequest $request
     *
     * @return CreateCertificateResponse
     */
    public function createCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithOptions($request, $runtime);
    }

    /**
     * @param CreateKeyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateKeyResponse
     */
    public function createKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateKeyResponse::fromMap($this->doRPCRequest('CreateKey', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateKeyRequest $request
     *
     * @return CreateKeyResponse
     */
    public function createKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyWithOptions($request, $runtime);
    }

    /**
     * @param CreateKeyVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateKeyVersionResponse
     */
    public function createKeyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateKeyVersionResponse::fromMap($this->doRPCRequest('CreateKeyVersion', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateKeyVersionRequest $request
     *
     * @return CreateKeyVersionResponse
     */
    public function createKeyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyVersionWithOptions($request, $runtime);
    }

    /**
     * @param CreateSecretRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSecretShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendedConfig)) {
            $request->extendedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendedConfig, 'ExtendedConfig', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSecretResponse::fromMap($this->doRPCRequest('CreateSecret', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSecretRequest $request
     *
     * @return CreateSecretResponse
     */
    public function createSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecretWithOptions($request, $runtime);
    }

    /**
     * @param DecryptRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return DecryptResponse
     */
    public function decryptWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DecryptShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DecryptResponse::fromMap($this->doRPCRequest('Decrypt', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DecryptRequest $request
     *
     * @return DecryptResponse
     */
    public function decrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAliasResponse
     */
    public function deleteAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAliasResponse::fromMap($this->doRPCRequest('DeleteAlias', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAliasRequest $request
     *
     * @return DeleteAliasResponse
     */
    public function deleteAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAliasWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCertificateResponse
     */
    public function deleteCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCertificateResponse::fromMap($this->doRPCRequest('DeleteCertificate', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCertificateRequest $request
     *
     * @return DeleteCertificateResponse
     */
    public function deleteCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteKeyMaterialRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteKeyMaterialResponse::fromMap($this->doRPCRequest('DeleteKeyMaterial', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteKeyMaterialRequest $request
     *
     * @return DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyMaterialWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSecretResponse::fromMap($this->doRPCRequest('DeleteSecret', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSecretRequest $request
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAccountKmsStatusResponse
     */
    public function describeAccountKmsStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeAccountKmsStatusResponse::fromMap($this->doRPCRequest('DescribeAccountKmsStatus', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeAccountKmsStatusResponse
     */
    public function describeAccountKmsStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountKmsStatusWithOptions($runtime);
    }

    /**
     * @param DescribeCertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCertificateResponse
     */
    public function describeCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCertificateResponse::fromMap($this->doRPCRequest('DescribeCertificate', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCertificateRequest $request
     *
     * @return DescribeCertificateResponse
     */
    public function describeCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKeyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeKeyResponse
     */
    public function describeKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeKeyResponse::fromMap($this->doRPCRequest('DescribeKey', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeKeyRequest $request
     *
     * @return DescribeKeyResponse
     */
    public function describeKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKeyVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeKeyVersionResponse
     */
    public function describeKeyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeKeyVersionResponse::fromMap($this->doRPCRequest('DescribeKeyVersion', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeKeyVersionRequest $request
     *
     * @return DescribeKeyVersionResponse
     */
    public function describeKeyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyVersionWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param DescribeSecretRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSecretResponse
     */
    public function describeSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecretResponse::fromMap($this->doRPCRequest('DescribeSecret', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSecretRequest $request
     *
     * @return DescribeSecretResponse
     */
    public function describeSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecretWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceResponse
     */
    public function describeServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeServiceResponse::fromMap($this->doRPCRequest('DescribeService', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeServiceResponse
     */
    public function describeService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceWithOptions($runtime);
    }

    /**
     * @param DisableKeyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DisableKeyResponse
     */
    public function disableKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableKeyResponse::fromMap($this->doRPCRequest('DisableKey', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableKeyRequest $request
     *
     * @return DisableKeyResponse
     */
    public function disableKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableKeyWithOptions($request, $runtime);
    }

    /**
     * @param EnableKeyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return EnableKeyResponse
     */
    public function enableKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableKeyResponse::fromMap($this->doRPCRequest('EnableKey', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableKeyRequest $request
     *
     * @return EnableKeyResponse
     */
    public function enableKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableKeyWithOptions($request, $runtime);
    }

    /**
     * @param EncryptRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return EncryptResponse
     */
    public function encryptWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EncryptShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EncryptResponse::fromMap($this->doRPCRequest('Encrypt', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EncryptRequest $request
     *
     * @return EncryptResponse
     */
    public function encrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptWithOptions($request, $runtime);
    }

    /**
     * @param ExportCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportCertificateResponse
     */
    public function exportCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportCertificateResponse::fromMap($this->doRPCRequest('ExportCertificate', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExportCertificateRequest $request
     *
     * @return ExportCertificateResponse
     */
    public function exportCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ExportDataKeyRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ExportDataKeyResponse
     */
    public function exportDataKeyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportDataKeyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportDataKeyResponse::fromMap($this->doRPCRequest('ExportDataKey', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExportDataKeyRequest $request
     *
     * @return ExportDataKeyResponse
     */
    public function exportDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDataKeyWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAndExportDataKeyRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateAndExportDataKeyResponse
     */
    public function generateAndExportDataKeyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateAndExportDataKeyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateAndExportDataKeyResponse::fromMap($this->doRPCRequest('GenerateAndExportDataKey', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateAndExportDataKeyRequest $request
     *
     * @return GenerateAndExportDataKeyResponse
     */
    public function generateAndExportDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAndExportDataKeyWithOptions($request, $runtime);
    }

    /**
     * @param GenerateDataKeyRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return GenerateDataKeyResponse
     */
    public function generateDataKeyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateDataKeyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateDataKeyResponse::fromMap($this->doRPCRequest('GenerateDataKey', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateDataKeyRequest $request
     *
     * @return GenerateDataKeyResponse
     */
    public function generateDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDataKeyWithOptions($request, $runtime);
    }

    /**
     * @param GenerateDataKeyWithoutPlaintextRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintextWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateDataKeyWithoutPlaintextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateDataKeyWithoutPlaintextResponse::fromMap($this->doRPCRequest('GenerateDataKeyWithoutPlaintext', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateDataKeyWithoutPlaintextRequest $request
     *
     * @return GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintext($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDataKeyWithoutPlaintextWithOptions($request, $runtime);
    }

    /**
     * @param GetCertificateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCertificateResponse
     */
    public function getCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCertificateResponse::fromMap($this->doRPCRequest('GetCertificate', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCertificateRequest $request
     *
     * @return GetCertificateResponse
     */
    public function getCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertificateWithOptions($request, $runtime);
    }

    /**
     * @param GetParametersForImportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetParametersForImportResponse
     */
    public function getParametersForImportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetParametersForImportResponse::fromMap($this->doRPCRequest('GetParametersForImport', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetParametersForImportRequest $request
     *
     * @return GetParametersForImportResponse
     */
    public function getParametersForImport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getParametersForImportWithOptions($request, $runtime);
    }

    /**
     * @param GetPublicKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetPublicKeyResponse
     */
    public function getPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPublicKeyResponse::fromMap($this->doRPCRequest('GetPublicKey', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPublicKeyRequest $request
     *
     * @return GetPublicKeyResponse
     */
    public function getPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @param GetRandomPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRandomPasswordResponse
     */
    public function getRandomPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRandomPasswordResponse::fromMap($this->doRPCRequest('GetRandomPassword', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRandomPasswordRequest $request
     *
     * @return GetRandomPasswordResponse
     */
    public function getRandomPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRandomPasswordWithOptions($request, $runtime);
    }

    /**
     * @param GetSecretValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSecretValueResponse::fromMap($this->doRPCRequest('GetSecretValue', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSecretValueRequest $request
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretValueWithOptions($request, $runtime);
    }

    /**
     * @param ImportCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportCertificateResponse
     */
    public function importCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportCertificateResponse::fromMap($this->doRPCRequest('ImportCertificate', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportCertificateRequest $request
     *
     * @return ImportCertificateResponse
     */
    public function importCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ImportEncryptionCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ImportEncryptionCertificateResponse
     */
    public function importEncryptionCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportEncryptionCertificateResponse::fromMap($this->doRPCRequest('ImportEncryptionCertificate', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportEncryptionCertificateRequest $request
     *
     * @return ImportEncryptionCertificateResponse
     */
    public function importEncryptionCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importEncryptionCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ImportKeyMaterialRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportKeyMaterialResponse
     */
    public function importKeyMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportKeyMaterialResponse::fromMap($this->doRPCRequest('ImportKeyMaterial', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportKeyMaterialRequest $request
     *
     * @return ImportKeyMaterialResponse
     */
    public function importKeyMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyMaterialWithOptions($request, $runtime);
    }

    /**
     * @param ListAliasesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListAliasesResponse
     */
    public function listAliasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAliasesResponse::fromMap($this->doRPCRequest('ListAliases', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAliasesRequest $request
     *
     * @return ListAliasesResponse
     */
    public function listAliases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAliasesWithOptions($request, $runtime);
    }

    /**
     * @param ListAliasesByKeyIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAliasesByKeyIdResponse
     */
    public function listAliasesByKeyIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAliasesByKeyIdResponse::fromMap($this->doRPCRequest('ListAliasesByKeyId', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAliasesByKeyIdRequest $request
     *
     * @return ListAliasesByKeyIdResponse
     */
    public function listAliasesByKeyId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAliasesByKeyIdWithOptions($request, $runtime);
    }

    /**
     * @param ListCertificatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCertificatesResponse
     */
    public function listCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCertificatesResponse::fromMap($this->doRPCRequest('ListCertificates', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCertificatesRequest $request
     *
     * @return ListCertificatesResponse
     */
    public function listCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertificatesWithOptions($request, $runtime);
    }

    /**
     * @param ListKeysRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListKeysResponse
     */
    public function listKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListKeysResponse::fromMap($this->doRPCRequest('ListKeys', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListKeysRequest $request
     *
     * @return ListKeysResponse
     */
    public function listKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListKeyVersionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListKeyVersionsResponse
     */
    public function listKeyVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListKeyVersionsResponse::fromMap($this->doRPCRequest('ListKeyVersions', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListKeyVersionsRequest $request
     *
     * @return ListKeyVersionsResponse
     */
    public function listKeyVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeyVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListResourceTagsResponse::fromMap($this->doRPCRequest('ListResourceTags', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListResourceTagsRequest $request
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListSecretsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSecretsResponse::fromMap($this->doRPCRequest('ListSecrets', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSecretsRequest $request
     *
     * @return ListSecretsResponse
     */
    public function listSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretsWithOptions($request, $runtime);
    }

    /**
     * @param ListSecretVersionIdsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretVersionIdsResponse
     */
    public function listSecretVersionIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSecretVersionIdsResponse::fromMap($this->doRPCRequest('ListSecretVersionIds', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSecretVersionIdsRequest $request
     *
     * @return ListSecretVersionIdsResponse
     */
    public function listSecretVersionIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretVersionIdsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return OpenKmsServiceResponse
     */
    public function openKmsServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return OpenKmsServiceResponse::fromMap($this->doRPCRequest('OpenKmsService', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return OpenKmsServiceResponse
     */
    public function openKmsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openKmsServiceWithOptions($runtime);
    }

    /**
     * @param PutSecretValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutSecretValueResponse
     */
    public function putSecretValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutSecretValueResponse::fromMap($this->doRPCRequest('PutSecretValue', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutSecretValueRequest $request
     *
     * @return PutSecretValueResponse
     */
    public function putSecretValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putSecretValueWithOptions($request, $runtime);
    }

    /**
     * @param ReEncryptRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ReEncryptResponse
     */
    public function reEncryptWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReEncryptShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sourceEncryptionContext)) {
            $request->sourceEncryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceEncryptionContext, 'SourceEncryptionContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->destinationEncryptionContext)) {
            $request->destinationEncryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destinationEncryptionContext, 'DestinationEncryptionContext', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReEncryptResponse::fromMap($this->doRPCRequest('ReEncrypt', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReEncryptRequest $request
     *
     * @return ReEncryptResponse
     */
    public function reEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reEncryptWithOptions($request, $runtime);
    }

    /**
     * @param RestoreSecretRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RestoreSecretResponse
     */
    public function restoreSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestoreSecretResponse::fromMap($this->doRPCRequest('RestoreSecret', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestoreSecretRequest $request
     *
     * @return RestoreSecretResponse
     */
    public function restoreSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreSecretWithOptions($request, $runtime);
    }

    /**
     * @param RotateSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RotateSecretResponse
     */
    public function rotateSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RotateSecretResponse::fromMap($this->doRPCRequest('RotateSecret', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RotateSecretRequest $request
     *
     * @return RotateSecretResponse
     */
    public function rotateSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rotateSecretWithOptions($request, $runtime);
    }

    /**
     * @param ScheduleKeyDeletionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ScheduleKeyDeletionResponse::fromMap($this->doRPCRequest('ScheduleKeyDeletion', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ScheduleKeyDeletionRequest $request
     *
     * @return ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scheduleKeyDeletionWithOptions($request, $runtime);
    }

    /**
     * @param TagResourceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TagResourceResponse
     */
    public function tagResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourceResponse::fromMap($this->doRPCRequest('TagResource', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagResourceRequest $request
     *
     * @return TagResourceResponse
     */
    public function tagResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourceWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UntagResourceResponse
     */
    public function untagResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourceResponse::fromMap($this->doRPCRequest('UntagResource', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UntagResourceRequest $request
     *
     * @return UntagResourceResponse
     */
    public function untagResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAliasResponse
     */
    public function updateAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAliasResponse::fromMap($this->doRPCRequest('UpdateAlias', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAliasRequest $request
     *
     * @return UpdateAliasResponse
     */
    public function updateAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAliasWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCertificateStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCertificateStatusResponse
     */
    public function updateCertificateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCertificateStatusResponse::fromMap($this->doRPCRequest('UpdateCertificateStatus', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCertificateStatusRequest $request
     *
     * @return UpdateCertificateStatusResponse
     */
    public function updateCertificateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCertificateStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateKeyDescriptionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateKeyDescriptionResponse
     */
    public function updateKeyDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateKeyDescriptionResponse::fromMap($this->doRPCRequest('UpdateKeyDescription', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateKeyDescriptionRequest $request
     *
     * @return UpdateKeyDescriptionResponse
     */
    public function updateKeyDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKeyDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRotationPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRotationPolicyResponse
     */
    public function updateRotationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRotationPolicyResponse::fromMap($this->doRPCRequest('UpdateRotationPolicy', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRotationPolicyRequest $request
     *
     * @return UpdateRotationPolicyResponse
     */
    public function updateRotationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRotationPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSecretRotationPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateSecretRotationPolicyResponse
     */
    public function updateSecretRotationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSecretRotationPolicyResponse::fromMap($this->doRPCRequest('UpdateSecretRotationPolicy', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSecretRotationPolicyRequest $request
     *
     * @return UpdateSecretRotationPolicyResponse
     */
    public function updateSecretRotationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretRotationPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSecretVersionStageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSecretVersionStageResponse::fromMap($this->doRPCRequest('UpdateSecretVersionStage', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSecretVersionStageRequest $request
     *
     * @return UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretVersionStageWithOptions($request, $runtime);
    }

    /**
     * @param UploadCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadCertificateResponse
     */
    public function uploadCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadCertificateResponse::fromMap($this->doRPCRequest('UploadCertificate', '2016-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadCertificateRequest $request
     *
     * @return UploadCertificateResponse
     */
    public function uploadCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCertificateWithOptions($request, $runtime);
    }
}
