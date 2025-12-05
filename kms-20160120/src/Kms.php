<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Kms\V20160120\Models\ConnectKmsInstanceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ConnectKmsInstanceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateApplicationAccessPointRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateApplicationAccessPointResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateClientKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateClientKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateNetworkRuleRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateNetworkRuleResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateSecretShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DecryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DecryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DecryptShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteApplicationAccessPointRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteApplicationAccessPointResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteClientKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteClientKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteKeyMaterialRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteKeyMaterialResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteNetworkRuleRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteNetworkRuleResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeAccountKmsStatusResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeApplicationAccessPointRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeApplicationAccessPointResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyVersionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyVersionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeNetworkRuleRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeNetworkRuleResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribePolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribePolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\DisableKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\DisableKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\EnableKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\EnableKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\EncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\EncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\EncryptShrinkRequest;
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
use AlibabaCloud\SDK\Kms\V20160120\Models\GetClientKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetClientKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetDefaultKmsInstanceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKeyPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKeyPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceQuotaInfosRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceQuotaInfosResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetParametersForImportRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetParametersForImportResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetPublicKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetPublicKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetRandomPasswordRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetRandomPasswordResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportKeyMaterialRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ImportKeyMaterialResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListClientKeysRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListClientKeysResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListNetworkRulesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListNetworkRulesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\OpenKmsServiceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ReEncryptRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ReEncryptResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ReEncryptShrinkRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ReleaseKmsInstanceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ReleaseKmsInstanceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\RestoreSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\RestoreSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\RotateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\RotateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ScheduleKeyDeletionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ScheduleKeyDeletionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetDeletionProtectionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetDeletionProtectionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetKeyPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetKeyPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetSecretPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetSecretPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\TagResourceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\TagResourceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UntagResourceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UntagResourceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateApplicationAccessPointRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateApplicationAccessPointResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateCertificateStatusRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateCertificateStatusResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateKeyDescriptionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateKeyDescriptionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateKmsInstanceBindVpcRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateKmsInstanceBindVpcResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateNetworkRuleRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateNetworkRuleResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdatePolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdatePolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateRotationPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateRotationPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRotationPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRotationPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretVersionStageRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretVersionStageResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\UploadCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\UploadCertificateResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Kms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Kms';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Decrypts data by using an asymmetric key.
     *
     * @remarks
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table lists supported encryption algorithms.
     * | KeySpec | Algorithm | Description | Maximum length in bytes |
     * | ------- | --------- | ----------- | ----------------------- |
     * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 256 |
     * | RSA_2048 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 256 |
     * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 384 |
     * | RSA_3072 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 384 |
     * | EC_SM2 | SM2PKE | SM2 public key encryption algorithm based on elliptic curves | 6144 |
     * In this example, the asymmetric key whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the decryption algorithm `RSAES_OAEP_SHA_1` are used to decrypt the ciphertext `BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1W****==`.
     *
     * @param request - AsymmetricDecryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AsymmetricDecryptResponse
     *
     * @param AsymmetricDecryptRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AsymmetricDecryptResponse
     */
    public function asymmetricDecryptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->ciphertextBlob) {
            @$query['CiphertextBlob'] = $request->ciphertextBlob;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keyVersionId) {
            @$query['KeyVersionId'] = $request->keyVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AsymmetricDecrypt',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AsymmetricDecryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Decrypts data by using an asymmetric key.
     *
     * @remarks
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table lists supported encryption algorithms.
     * | KeySpec | Algorithm | Description | Maximum length in bytes |
     * | ------- | --------- | ----------- | ----------------------- |
     * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 256 |
     * | RSA_2048 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 256 |
     * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 384 |
     * | RSA_3072 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 384 |
     * | EC_SM2 | SM2PKE | SM2 public key encryption algorithm based on elliptic curves | 6144 |
     * In this example, the asymmetric key whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the decryption algorithm `RSAES_OAEP_SHA_1` are used to decrypt the ciphertext `BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1W****==`.
     *
     * @param request - AsymmetricDecryptRequest
     *
     * @returns AsymmetricDecryptResponse
     *
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
     * Encrypts data by using an asymmetric customer master key (CMK).
     *
     * @remarks
     * This operation is supported only for asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table lists the supported encryption algorithms:
     * | KeySpec | Algorithm | Description | Maximum number of bytes that can be encrypted |
     * | ------- | --------- | ----------- | --------------------------------------------- |
     * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 190 |
     * | RSA_2048 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 214 |
     * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 318 |
     * | RSA_3072 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 342 |
     * | EC_SM2 | SM2PKE | SM2 public key encryption algorithm based on elliptic curves | 6047 |
     * You can use the asymmetric CMK whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the algorithm `RSAES_OAEP_SHA_1` to encrypt the plaintext `SGVsbG8gd29ybGQ=` based on the parameter settings provided in this topic.
     *
     * @param request - AsymmetricEncryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AsymmetricEncryptResponse
     *
     * @param AsymmetricEncryptRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AsymmetricEncryptResponse
     */
    public function asymmetricEncryptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keyVersionId) {
            @$query['KeyVersionId'] = $request->keyVersionId;
        }

        if (null !== $request->plaintext) {
            @$query['Plaintext'] = $request->plaintext;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AsymmetricEncrypt',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AsymmetricEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Encrypts data by using an asymmetric customer master key (CMK).
     *
     * @remarks
     * This operation is supported only for asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table lists the supported encryption algorithms:
     * | KeySpec | Algorithm | Description | Maximum number of bytes that can be encrypted |
     * | ------- | --------- | ----------- | --------------------------------------------- |
     * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 190 |
     * | RSA_2048 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 214 |
     * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 318 |
     * | RSA_3072 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 342 |
     * | EC_SM2 | SM2PKE | SM2 public key encryption algorithm based on elliptic curves | 6047 |
     * You can use the asymmetric CMK whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the algorithm `RSAES_OAEP_SHA_1` to encrypt the plaintext `SGVsbG8gd29ybGQ=` based on the parameter settings provided in this topic.
     *
     * @param request - AsymmetricEncryptRequest
     *
     * @returns AsymmetricEncryptResponse
     *
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
     * AsymmetricSign.
     *
     * @remarks
     * Generates a signature by using an asymmetric key.
     *
     * @param request - AsymmetricSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AsymmetricSignResponse
     *
     * @param AsymmetricSignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AsymmetricSignResponse
     */
    public function asymmetricSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->digest) {
            @$query['Digest'] = $request->digest;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keyVersionId) {
            @$query['KeyVersionId'] = $request->keyVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AsymmetricSign',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AsymmetricSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AsymmetricSign.
     *
     * @remarks
     * Generates a signature by using an asymmetric key.
     *
     * @param request - AsymmetricSignRequest
     *
     * @returns AsymmetricSignResponse
     *
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
     * Verifies a signature by using an asymmetric key.
     *
     * @remarks
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **SIGN/VERIFY**. The following table describes the supported signature algorithms.
     * | KeySpec | Algorithm | Description |
     * | ------- | --------- | ----------- |
     * | RSA_2048 | RSA_PSS_SHA_256 | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |
     * | RSA_2048 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256 |
     * | RSA_3072 | RSA_PSS_SHA_256 | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |
     * | RSA_3072 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256 |
     * | EC_P256 | ECDSA_SHA_256 | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest |
     * | EC_P256K | ECDSA_SHA_256 | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |
     * | EC_SM2 | SM2DSA | SM2 elliptic curve public key encryption algorithm |
     * >  When you calculate the SM2 signature based on GB/T 32918, the **Digest** parameter is used to calculate the digest value of the combination of Z(A) and M, rather than the SM3 digest value. M indicates the original message to be signed. Z(A) indicates the hash value for User A. The hash value is defined in GB/T 32918.  In this example, the asymmetric key whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the signature algorithm RSA_PSS_SHA_256 are used to verify the signature `M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==` of the digest `ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuyjfzw=`.
     *
     * @param request - AsymmetricVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AsymmetricVerifyResponse
     *
     * @param AsymmetricVerifyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AsymmetricVerifyResponse
     */
    public function asymmetricVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->digest) {
            @$query['Digest'] = $request->digest;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keyVersionId) {
            @$query['KeyVersionId'] = $request->keyVersionId;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AsymmetricVerify',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AsymmetricVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies a signature by using an asymmetric key.
     *
     * @remarks
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **SIGN/VERIFY**. The following table describes the supported signature algorithms.
     * | KeySpec | Algorithm | Description |
     * | ------- | --------- | ----------- |
     * | RSA_2048 | RSA_PSS_SHA_256 | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |
     * | RSA_2048 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256 |
     * | RSA_3072 | RSA_PSS_SHA_256 | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |
     * | RSA_3072 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256 |
     * | EC_P256 | ECDSA_SHA_256 | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest |
     * | EC_P256K | ECDSA_SHA_256 | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |
     * | EC_SM2 | SM2DSA | SM2 elliptic curve public key encryption algorithm |
     * >  When you calculate the SM2 signature based on GB/T 32918, the **Digest** parameter is used to calculate the digest value of the combination of Z(A) and M, rather than the SM3 digest value. M indicates the original message to be signed. Z(A) indicates the hash value for User A. The hash value is defined in GB/T 32918.  In this example, the asymmetric key whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the signature algorithm RSA_PSS_SHA_256 are used to verify the signature `M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==` of the digest `ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuyjfzw=`.
     *
     * @param request - AsymmetricVerifyRequest
     *
     * @returns AsymmetricVerifyResponse
     *
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
     * @remarks
     * If the deletion task of a CMK is canceled, the CMK returns to the Enabled state.
     *
     * @param request - CancelKeyDeletionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelKeyDeletionResponse
     *
     * @param CancelKeyDeletionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelKeyDeletionResponse
     */
    public function cancelKeyDeletionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelKeyDeletion',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelKeyDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * If the deletion task of a CMK is canceled, the CMK returns to the Enabled state.
     *
     * @param request - CancelKeyDeletionRequest
     *
     * @returns CancelKeyDeletionResponse
     *
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
     * Decrypts data by using a specific certificate.
     *
     * @remarks
     * Limit: The encryption algorithm in the request parameters must match the key type.
     * The following table describes the mapping between encryption algorithms and key types.
     * | Algorithm | Key Spec |
     * | --------- | -------- |
     * | RSAES_OAEP_SHA_1 | RSA_2048 |
     * | RSAES_OAEP_SHA_256 | RSA_2048 |
     * | SM2PKE | EC_SM2 |
     * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the encryption algorithm `RSAES_OAEP_SHA_256` are used to decrypt the data `ZOyIygCyaOW6Gj****MlNKiuyjfzw=`.
     *
     * @param request - CertificatePrivateKeyDecryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CertificatePrivateKeyDecryptResponse
     *
     * @param CertificatePrivateKeyDecryptRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CertificatePrivateKeyDecryptResponse
     */
    public function certificatePrivateKeyDecryptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->ciphertextBlob) {
            @$query['CiphertextBlob'] = $request->ciphertextBlob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CertificatePrivateKeyDecrypt',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CertificatePrivateKeyDecryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Decrypts data by using a specific certificate.
     *
     * @remarks
     * Limit: The encryption algorithm in the request parameters must match the key type.
     * The following table describes the mapping between encryption algorithms and key types.
     * | Algorithm | Key Spec |
     * | --------- | -------- |
     * | RSAES_OAEP_SHA_1 | RSA_2048 |
     * | RSAES_OAEP_SHA_256 | RSA_2048 |
     * | SM2PKE | EC_SM2 |
     * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the encryption algorithm `RSAES_OAEP_SHA_256` are used to decrypt the data `ZOyIygCyaOW6Gj****MlNKiuyjfzw=`.
     *
     * @param request - CertificatePrivateKeyDecryptRequest
     *
     * @returns CertificatePrivateKeyDecryptResponse
     *
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
     * Generates a signature by using a specified certificate.
     *
     * @remarks
     * The signature algorithm in the request parameters must match the key type. The following table describes the mapping between signature algorithms and key types.
     * | Algorithm | Key Spec |
     * | --------- | -------- |
     * | RSA_PKCS1_SHA_256 | RSA_2048 |
     * | RSA_PSS_SHA_256 | RSA_2048 |
     * | ECDSA_SHA_256 | EC_P256 |
     * | SM2DSA | EC_SM2 |
     * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the signature algorithm `ECDSA_SHA_256` are used to generate a signature for the raw data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *
     * @param request - CertificatePrivateKeySignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CertificatePrivateKeySignResponse
     *
     * @param CertificatePrivateKeySignRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CertificatePrivateKeySignResponse
     */
    public function certificatePrivateKeySignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->messageType) {
            @$query['MessageType'] = $request->messageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CertificatePrivateKeySign',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CertificatePrivateKeySignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a signature by using a specified certificate.
     *
     * @remarks
     * The signature algorithm in the request parameters must match the key type. The following table describes the mapping between signature algorithms and key types.
     * | Algorithm | Key Spec |
     * | --------- | -------- |
     * | RSA_PKCS1_SHA_256 | RSA_2048 |
     * | RSA_PSS_SHA_256 | RSA_2048 |
     * | ECDSA_SHA_256 | EC_P256 |
     * | SM2DSA | EC_SM2 |
     * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the signature algorithm `ECDSA_SHA_256` are used to generate a signature for the raw data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *
     * @param request - CertificatePrivateKeySignRequest
     *
     * @returns CertificatePrivateKeySignResponse
     *
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
     * Encrypts data by using a specific certificate.
     *
     * @remarks
     * Limit: The encryption algorithm in the request parameters must match the key type.
     * The following table describes the mapping between encryption algorithms and key types.
     * | Algorithm | Key Spec |
     * | --------- | -------- |
     * | RSAES_OAEP_SHA_1 | RSA_2048 |
     * | RSAES_OAEP_SHA_256 | RSA_2048 |
     * | SM2PKE | EC_SM2 |
     * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the encryption algorithm `RSAES_OAEP_SHA_256` are used to encrypt the data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *
     * @param request - CertificatePublicKeyEncryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CertificatePublicKeyEncryptResponse
     *
     * @param CertificatePublicKeyEncryptRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CertificatePublicKeyEncryptResponse
     */
    public function certificatePublicKeyEncryptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->plaintext) {
            @$query['Plaintext'] = $request->plaintext;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CertificatePublicKeyEncrypt',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CertificatePublicKeyEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Encrypts data by using a specific certificate.
     *
     * @remarks
     * Limit: The encryption algorithm in the request parameters must match the key type.
     * The following table describes the mapping between encryption algorithms and key types.
     * | Algorithm | Key Spec |
     * | --------- | -------- |
     * | RSAES_OAEP_SHA_1 | RSA_2048 |
     * | RSAES_OAEP_SHA_256 | RSA_2048 |
     * | SM2PKE | EC_SM2 |
     * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the encryption algorithm `RSAES_OAEP_SHA_256` are used to encrypt the data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *
     * @param request - CertificatePublicKeyEncryptRequest
     *
     * @returns CertificatePublicKeyEncryptResponse
     *
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
     * Verifies a digital signature by using a specified certificate.
     *
     * @remarks
     * The signature algorithm in the request parameters must match the key type. The following table describes the mapping between signature algorithms and key types.
     * | Algorithm | Key Spec |
     * | --------- | -------- |
     * | RSA_PKCS1_SHA_256 | RSA_2048 |
     * | RSA_PSS_SHA_256 | RSA_2048 |
     * | ECDSA_SHA_256 | EC_P256 |
     * | SM2DSA | EC_SM2 |
     * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the signature algorithm `ECDSA_SHA_256` are used to verify the digital signature `ZOyIygCyaOW6Gj****MlNKiuyjfzw=` of the raw data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *
     * @param request - CertificatePublicKeyVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CertificatePublicKeyVerifyResponse
     *
     * @param CertificatePublicKeyVerifyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CertificatePublicKeyVerifyResponse
     */
    public function certificatePublicKeyVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithm) {
            @$query['Algorithm'] = $request->algorithm;
        }

        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->messageType) {
            @$query['MessageType'] = $request->messageType;
        }

        if (null !== $request->signatureValue) {
            @$query['SignatureValue'] = $request->signatureValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CertificatePublicKeyVerify',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CertificatePublicKeyVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies a digital signature by using a specified certificate.
     *
     * @remarks
     * The signature algorithm in the request parameters must match the key type. The following table describes the mapping between signature algorithms and key types.
     * | Algorithm | Key Spec |
     * | --------- | -------- |
     * | RSA_PKCS1_SHA_256 | RSA_2048 |
     * | RSA_PSS_SHA_256 | RSA_2048 |
     * | ECDSA_SHA_256 | EC_P256 |
     * | SM2DSA | EC_SM2 |
     * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the signature algorithm `ECDSA_SHA_256` are used to verify the digital signature `ZOyIygCyaOW6Gj****MlNKiuyjfzw=` of the raw data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *
     * @param request - CertificatePublicKeyVerifyRequest
     *
     * @returns CertificatePublicKeyVerifyResponse
     *
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
     * Enables a Key Management Service (KMS) instance.
     *
     * @remarks
     * ### [](#)Limits
     * You can enable only instances of the software key management type. You cannot enable instances of the hardware key management type.
     *
     * @param request - ConnectKmsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConnectKmsInstanceResponse
     *
     * @param ConnectKmsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConnectKmsInstanceResponse
     */
    public function connectKmsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->KMProvider) {
            @$query['KMProvider'] = $request->KMProvider;
        }

        if (null !== $request->kmsInstanceId) {
            @$query['KmsInstanceId'] = $request->kmsInstanceId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneIds) {
            @$query['ZoneIds'] = $request->zoneIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConnectKmsInstance',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConnectKmsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a Key Management Service (KMS) instance.
     *
     * @remarks
     * ### [](#)Limits
     * You can enable only instances of the software key management type. You cannot enable instances of the hardware key management type.
     *
     * @param request - ConnectKmsInstanceRequest
     *
     * @returns ConnectKmsInstanceResponse
     *
     * @param ConnectKmsInstanceRequest $request
     *
     * @return ConnectKmsInstanceResponse
     */
    public function connectKmsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->connectKmsInstanceWithOptions($request, $runtime);
    }

    /**
     * @remarks
     *   Each alias can be bound to only one CMK at a time.
     * *   The aliases of CMKs in the same region must be unique.
     * In this topic, an alias named `alias/example` is created for a CMK named `7906979c-8e06-46a2-be2d-68e3ccbc****`.
     *
     * @param request - CreateAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAliasResponse
     *
     * @param CreateAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAliasResponse
     */
    public function createAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasName) {
            @$query['AliasName'] = $request->aliasName;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAlias',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     *   Each alias can be bound to only one CMK at a time.
     * *   The aliases of CMKs in the same region must be unique.
     * In this topic, an alias named `alias/example` is created for a CMK named `7906979c-8e06-46a2-be2d-68e3ccbc****`.
     *
     * @param request - CreateAliasRequest
     *
     * @returns CreateAliasResponse
     *
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
     * Creates an application access point (AAP).
     *
     * @remarks
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based AAP:
     * 1.Create a network access rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access KMS. For more information, see [CreateNetworkRule](https://help.aliyun.com/document_detail/2539407.html).
     * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind network access rules to the keys and secrets. For more information, see [CreatePolicy](https://help.aliyun.com/document_detail/2539454.html).
     * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. This topic describes how to create an AAP.
     * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](https://help.aliyun.com/document_detail/2539509.html).
     *
     * @param request - CreateApplicationAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationAccessPointResponse
     *
     * @param CreateApplicationAccessPointRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateApplicationAccessPointResponse
     */
    public function createApplicationAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authenticationMethod) {
            @$query['AuthenticationMethod'] = $request->authenticationMethod;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->policies) {
            @$query['Policies'] = $request->policies;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationAccessPoint',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application access point (AAP).
     *
     * @remarks
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based AAP:
     * 1.Create a network access rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access KMS. For more information, see [CreateNetworkRule](https://help.aliyun.com/document_detail/2539407.html).
     * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind network access rules to the keys and secrets. For more information, see [CreatePolicy](https://help.aliyun.com/document_detail/2539454.html).
     * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. This topic describes how to create an AAP.
     * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](https://help.aliyun.com/document_detail/2539509.html).
     *
     * @param request - CreateApplicationAccessPointRequest
     *
     * @returns CreateApplicationAccessPointResponse
     *
     * @param CreateApplicationAccessPointRequest $request
     *
     * @return CreateApplicationAccessPointResponse
     */
    public function createApplicationAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationAccessPointWithOptions($request, $runtime);
    }

    /**
     * Creates a client key.
     *
     * @remarks
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based application access point (AAP):
     * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance. For more information, see [CreateNetworkRule](https://help.aliyun.com/document_detail/2539407.html).
     * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets. For more information, see [CreatePolicy](https://help.aliyun.com/document_detail/2539454.html).
     * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](https://help.aliyun.com/document_detail/2539467.html).
     * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP.
     * ### Precautions
     * A client key has a validity period. After a client key expires, applications into which the client key is integrated cannot access the required KMS instance. You must replace the client key before the client key expires. We recommend that you delete the expired client key in KMS after the new client key is used.
     *
     * @param request - CreateClientKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientKeyResponse
     *
     * @param CreateClientKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateClientKeyResponse
     */
    public function createClientKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aapName) {
            @$query['AapName'] = $request->aapName;
        }

        if (null !== $request->notAfter) {
            @$query['NotAfter'] = $request->notAfter;
        }

        if (null !== $request->notBefore) {
            @$query['NotBefore'] = $request->notBefore;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateClientKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClientKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a client key.
     *
     * @remarks
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based application access point (AAP):
     * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance. For more information, see [CreateNetworkRule](https://help.aliyun.com/document_detail/2539407.html).
     * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets. For more information, see [CreatePolicy](https://help.aliyun.com/document_detail/2539454.html).
     * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](https://help.aliyun.com/document_detail/2539467.html).
     * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP.
     * ### Precautions
     * A client key has a validity period. After a client key expires, applications into which the client key is integrated cannot access the required KMS instance. You must replace the client key before the client key expires. We recommend that you delete the expired client key in KMS after the new client key is used.
     *
     * @param request - CreateClientKeyRequest
     *
     * @returns CreateClientKeyResponse
     *
     * @param CreateClientKeyRequest $request
     *
     * @return CreateClientKeyResponse
     */
    public function createClientKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientKeyWithOptions($request, $runtime);
    }

    /**
     * Creates a customer master key (CMK).
     *
     * @remarks
     * KMS supports common symmetric keys and asymmetric keys. For more information, see [Key types and specifications](https://help.aliyun.com/document_detail/480161.html).
     *
     * @param request - CreateKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKeyResponse
     *
     * @param CreateKeyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateKeyResponse
     */
    public function createKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DKMSInstanceId) {
            @$query['DKMSInstanceId'] = $request->DKMSInstanceId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableAutomaticRotation) {
            @$query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }

        if (null !== $request->keySpec) {
            @$query['KeySpec'] = $request->keySpec;
        }

        if (null !== $request->keyStorageMechanism) {
            @$query['KeyStorageMechanism'] = $request->keyStorageMechanism;
        }

        if (null !== $request->keyUsage) {
            @$query['KeyUsage'] = $request->keyUsage;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->protectionLevel) {
            @$query['ProtectionLevel'] = $request->protectionLevel;
        }

        if (null !== $request->rotationInterval) {
            @$query['RotationInterval'] = $request->rotationInterval;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a customer master key (CMK).
     *
     * @remarks
     * KMS supports common symmetric keys and asymmetric keys. For more information, see [Key types and specifications](https://help.aliyun.com/document_detail/480161.html).
     *
     * @param request - CreateKeyRequest
     *
     * @returns CreateKeyResponse
     *
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
     * 为密钥创建新的密钥版本。
     *
     * @remarks
     *   You can create a version only for an asymmetric CMK that is in the Enabled state. You can call the [CreateKey](https://help.aliyun.com/document_detail/28947.html) operation to create an asymmetric CMK and the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the status of the CMK. The status is specified by the KeyState parameter.
     * *   The minimum interval for creating a version of the same CMK is seven days. You can call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the time when the last version of a CMK was created. The time is specified by the LastRotationDate parameter.
     * *   If a CMK is in a private key store, you cannot create a version for the CMK.
     * *   You can create a maximum of 50 versions for a CMK in the same region.
     * You can create a version for the CMK whose ID is `0b30658a-ed1a-4922-b8f7-a673ca9c****` by using the parameter settings provided in this topic.
     *
     * @param request - CreateKeyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKeyVersionResponse
     *
     * @param CreateKeyVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateKeyVersionResponse
     */
    public function createKeyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateKeyVersion',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKeyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为密钥创建新的密钥版本。
     *
     * @remarks
     *   You can create a version only for an asymmetric CMK that is in the Enabled state. You can call the [CreateKey](https://help.aliyun.com/document_detail/28947.html) operation to create an asymmetric CMK and the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the status of the CMK. The status is specified by the KeyState parameter.
     * *   The minimum interval for creating a version of the same CMK is seven days. You can call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the time when the last version of a CMK was created. The time is specified by the LastRotationDate parameter.
     * *   If a CMK is in a private key store, you cannot create a version for the CMK.
     * *   You can create a maximum of 50 versions for a CMK in the same region.
     * You can create a version for the CMK whose ID is `0b30658a-ed1a-4922-b8f7-a673ca9c****` by using the parameter settings provided in this topic.
     *
     * @param request - CreateKeyVersionRequest
     *
     * @returns CreateKeyVersionResponse
     *
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
     * Creates an access control rule to configure the private IP addresses or CIDR blocks that are allowed to access a Key Management Service (KMS) instance.
     *
     * @remarks
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a KMS instance. The following process shows how to create a client key-based application access point (AAP):
     * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance.
     * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets. For more information, see [CreatePolicy](https://help.aliyun.com/document_detail/2539454.html).
     * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](https://help.aliyun.com/document_detail/2539467.html).
     * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](https://help.aliyun.com/document_detail/2539509.html).
     *
     * @param request - CreateNetworkRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkRuleResponse
     *
     * @param CreateNetworkRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateNetworkRuleResponse
     */
    public function createNetworkRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->sourcePrivateIp) {
            @$query['SourcePrivateIp'] = $request->sourcePrivateIp;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkRule',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control rule to configure the private IP addresses or CIDR blocks that are allowed to access a Key Management Service (KMS) instance.
     *
     * @remarks
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a KMS instance. The following process shows how to create a client key-based application access point (AAP):
     * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance.
     * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets. For more information, see [CreatePolicy](https://help.aliyun.com/document_detail/2539454.html).
     * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](https://help.aliyun.com/document_detail/2539467.html).
     * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](https://help.aliyun.com/document_detail/2539509.html).
     *
     * @param request - CreateNetworkRuleRequest
     *
     * @returns CreateNetworkRuleResponse
     *
     * @param CreateNetworkRuleRequest $request
     *
     * @return CreateNetworkRuleResponse
     */
    public function createNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a permission policy to configure the keys and secrets that are allowed to access.
     *
     * @remarks
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based application access point (AAP):
     * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance. For more information, see [CreateNetworkRule](https://help.aliyun.com/document_detail/2539407.html).
     * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets.
     * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](https://help.aliyun.com/document_detail/2539467.html).
     * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](https://help.aliyun.com/document_detail/2539509.html).
     *
     * @param request - CreatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessControlRules) {
            @$query['AccessControlRules'] = $request->accessControlRules;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->kmsInstance) {
            @$query['KmsInstance'] = $request->kmsInstance;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->permissions) {
            @$query['Permissions'] = $request->permissions;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a permission policy to configure the keys and secrets that are allowed to access.
     *
     * @remarks
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based application access point (AAP):
     * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance. For more information, see [CreateNetworkRule](https://help.aliyun.com/document_detail/2539407.html).
     * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets.
     * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](https://help.aliyun.com/document_detail/2539467.html).
     * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](https://help.aliyun.com/document_detail/2539509.html).
     *
     * @param request - CreatePolicyRequest
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * 创建凭据并存入凭据的初始版本。
     *
     * @remarks
     * The name of the secret.
     * The value must be 1 to 64 characters in length and can contain letters, digits, underscores (_), forward slashes (/), plus signs (+), equal signs (=), periods (.), hyphens (-), and at signs (@). The following list describes the name requirements for different types of secrets:
     * *   If the SecretType parameter is set to Generic or Rds, the name cannot start with `acs/`.
     * *   If the SecretType parameter is set to RAMCredentials, set the SecretName parameter to `$Auto`. In this case, KMS automatically generates a secret name that starts with `acs/ram/user/`. The name includes the display name of RAM user.
     * *   If the SecretType parameter is set to ECS, the name must start with `acs/ecs/`.
     *
     * @param tmpReq - CreateSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSecretShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extendedConfig) {
            $request->extendedConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extendedConfig, 'ExtendedConfig', 'json');
        }

        $query = [];
        if (null !== $request->DKMSInstanceId) {
            @$query['DKMSInstanceId'] = $request->DKMSInstanceId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableAutomaticRotation) {
            @$query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }

        if (null !== $request->encryptionKeyId) {
            @$query['EncryptionKeyId'] = $request->encryptionKeyId;
        }

        if (null !== $request->extendedConfigShrink) {
            @$query['ExtendedConfig'] = $request->extendedConfigShrink;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->rotationInterval) {
            @$query['RotationInterval'] = $request->rotationInterval;
        }

        if (null !== $request->secretData) {
            @$query['SecretData'] = $request->secretData;
        }

        if (null !== $request->secretDataType) {
            @$query['SecretDataType'] = $request->secretDataType;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->secretType) {
            @$query['SecretType'] = $request->secretType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecret',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建凭据并存入凭据的初始版本。
     *
     * @remarks
     * The name of the secret.
     * The value must be 1 to 64 characters in length and can contain letters, digits, underscores (_), forward slashes (/), plus signs (+), equal signs (=), periods (.), hyphens (-), and at signs (@). The following list describes the name requirements for different types of secrets:
     * *   If the SecretType parameter is set to Generic or Rds, the name cannot start with `acs/`.
     * *   If the SecretType parameter is set to RAMCredentials, set the SecretName parameter to `$Auto`. In this case, KMS automatically generates a secret name that starts with `acs/ram/user/`. The name includes the display name of RAM user.
     * *   If the SecretType parameter is set to ECS, the name must start with `acs/ecs/`.
     *
     * @param request - CreateSecretRequest
     *
     * @returns CreateSecretResponse
     *
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
     * 调用Decrypt接口解密CiphertextBlob中的密文。
     *
     * @param tmpReq - DecryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DecryptResponse
     *
     * @param DecryptRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return DecryptResponse
     */
    public function decryptWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DecryptShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->encryptionContext) {
            $request->encryptionContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }

        $query = [];
        if (null !== $request->ciphertextBlob) {
            @$query['CiphertextBlob'] = $request->ciphertextBlob;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->encryptionContextShrink) {
            @$query['EncryptionContext'] = $request->encryptionContextShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Decrypt',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DecryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用Decrypt接口解密CiphertextBlob中的密文。
     *
     * @param request - DecryptRequest
     *
     * @returns DecryptResponse
     *
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
     * @param request - DeleteAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAliasResponse
     *
     * @param DeleteAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAliasResponse
     */
    public function deleteAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasName) {
            @$query['AliasName'] = $request->aliasName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAlias',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAliasRequest
     *
     * @returns DeleteAliasResponse
     *
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
     * Deletes an application access point (AAP).
     *
     * @remarks
     * Before you delete an AAP, make sure that the AAP is no longer in use. If you delete an AAP that is in use, applications that use the AAP cannot access Key Management Service (KMS). Exercise caution when you delete an AAP.
     *
     * @param request - DeleteApplicationAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationAccessPointResponse
     *
     * @param DeleteApplicationAccessPointRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteApplicationAccessPointResponse
     */
    public function deleteApplicationAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplicationAccessPoint',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application access point (AAP).
     *
     * @remarks
     * Before you delete an AAP, make sure that the AAP is no longer in use. If you delete an AAP that is in use, applications that use the AAP cannot access Key Management Service (KMS). Exercise caution when you delete an AAP.
     *
     * @param request - DeleteApplicationAccessPointRequest
     *
     * @returns DeleteApplicationAccessPointResponse
     *
     * @param DeleteApplicationAccessPointRequest $request
     *
     * @return DeleteApplicationAccessPointResponse
     */
    public function deleteApplicationAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationAccessPointWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * After the certificate and its private key and certificate chain are deleted, they cannot be restored. Proceed with caution.
     * In this example, the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` and its private key and certificate chain are deleted.
     *
     * @param request - DeleteCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCertificateResponse
     *
     * @param DeleteCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCertificateResponse
     */
    public function deleteCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCertificate',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * After the certificate and its private key and certificate chain are deleted, they cannot be restored. Proceed with caution.
     * In this example, the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` and its private key and certificate chain are deleted.
     *
     * @param request - DeleteCertificateRequest
     *
     * @returns DeleteCertificateResponse
     *
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
     * @remarks
     * Before you delete a client key, make sure that the client key is no longer in use. If you delete a client key that is in use, applications that use the client key cannot access Key Management Service (KMS). Exercise caution when you delete a client key.
     *
     * @param request - DeleteClientKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientKeyResponse
     *
     * @param DeleteClientKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteClientKeyResponse
     */
    public function deleteClientKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientKeyId) {
            @$query['ClientKeyId'] = $request->clientKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClientKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClientKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * Before you delete a client key, make sure that the client key is no longer in use. If you delete a client key that is in use, applications that use the client key cannot access Key Management Service (KMS). Exercise caution when you delete a client key.
     *
     * @param request - DeleteClientKeyRequest
     *
     * @returns DeleteClientKeyResponse
     *
     * @param DeleteClientKeyRequest $request
     *
     * @return DeleteClientKeyResponse
     */
    public function deleteClientKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientKeyWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * This operation does not delete the CMK that is created by using the key material.
     * If the CMK is in the PendingDeletion state, the state of the CMK and the scheduled deletion time do not change after you call this operation. If the CMK is not in the PendingDeletion state, the state of the CMK changes to PendingImport after you call this operation.
     * After you delete the key material, you can upload only the same key material into the CMK.
     *
     * @param request - DeleteKeyMaterialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKeyMaterialResponse
     *
     * @param DeleteKeyMaterialRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKeyMaterial',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteKeyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This operation does not delete the CMK that is created by using the key material.
     * If the CMK is in the PendingDeletion state, the state of the CMK and the scheduled deletion time do not change after you call this operation. If the CMK is not in the PendingDeletion state, the state of the CMK changes to PendingImport after you call this operation.
     * After you delete the key material, you can upload only the same key material into the CMK.
     *
     * @param request - DeleteKeyMaterialRequest
     *
     * @returns DeleteKeyMaterialResponse
     *
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
     * Deletes a network access rule.
     *
     * @remarks
     * Before you delete a network access rule, make sure that the network access rule is not bound to permission policies. Otherwise, related applications cannot access Key Management Service (KMS).
     *
     * @param request - DeleteNetworkRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkRuleResponse
     *
     * @param DeleteNetworkRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteNetworkRuleResponse
     */
    public function deleteNetworkRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkRule',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a network access rule.
     *
     * @remarks
     * Before you delete a network access rule, make sure that the network access rule is not bound to permission policies. Otherwise, related applications cannot access Key Management Service (KMS).
     *
     * @param request - DeleteNetworkRuleRequest
     *
     * @returns DeleteNetworkRuleResponse
     *
     * @param DeleteNetworkRuleRequest $request
     *
     * @return DeleteNetworkRuleResponse
     */
    public function deleteNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a permission policy.
     *
     * @remarks
     * Before you delete a permission policy, make sure that the permission policy is not associated with application access points (AAPs). Otherwise, related applications cannot access Key Management Service (KMS).
     *
     * @param request - DeletePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a permission policy.
     *
     * @remarks
     * Before you delete a permission policy, make sure that the permission policy is not associated with application access points (AAPs). Otherwise, related applications cannot access Key Management Service (KMS).
     *
     * @param request - DeletePolicyRequest
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * If you call this operation without specifying a recovery period, the deleted secret can be recovered within 30 days.
     * If you specify a recovery period, the deleted secret can be recovered within the recovery period. You can also forcibly delete a secret. A forcibly deleted secret cannot be recovered.
     *
     * @param request - DeleteSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretResponse
     *
     * @param DeleteSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceDeleteWithoutRecovery) {
            @$query['ForceDeleteWithoutRecovery'] = $request->forceDeleteWithoutRecovery;
        }

        if (null !== $request->recoveryWindowInDays) {
            @$query['RecoveryWindowInDays'] = $request->recoveryWindowInDays;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecret',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * If you call this operation without specifying a recovery period, the deleted secret can be recovered within 30 days.
     * If you specify a recovery period, the deleted secret can be recovered within the recovery period. You can also forcibly delete a secret. A forcibly deleted secret cannot be recovered.
     *
     * @param request - DeleteSecretRequest
     *
     * @returns DeleteSecretResponse
     *
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
     * @param request - DescribeAccountKmsStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountKmsStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAccountKmsStatusResponse
     */
    public function describeAccountKmsStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeAccountKmsStatus',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountKmsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns DescribeAccountKmsStatusResponse
     *
     * @return DescribeAccountKmsStatusResponse
     */
    public function describeAccountKmsStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountKmsStatusWithOptions($runtime);
    }

    /**
     * Queries the details of an application access point (AAP).
     *
     * @param request - DescribeApplicationAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationAccessPointResponse
     *
     * @param DescribeApplicationAccessPointRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeApplicationAccessPointResponse
     */
    public function describeApplicationAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplicationAccessPoint',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an application access point (AAP).
     *
     * @param request - DescribeApplicationAccessPointRequest
     *
     * @returns DescribeApplicationAccessPointResponse
     *
     * @param DescribeApplicationAccessPointRequest $request
     *
     * @return DescribeApplicationAccessPointResponse
     */
    public function describeApplicationAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationAccessPointWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * In this example, the information about the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is queried. The certificate information includes the certificate ID, creation time, certificate issuer, validity period, serial number, and signature algorithm.
     *
     * @param request - DescribeCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCertificateResponse
     *
     * @param DescribeCertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCertificateResponse
     */
    public function describeCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCertificate',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * In this example, the information about the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is queried. The certificate information includes the certificate ID, creation time, certificate issuer, validity period, serial number, and signature algorithm.
     *
     * @param request - DescribeCertificateRequest
     *
     * @returns DescribeCertificateResponse
     *
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
     * Queries the information about a customer master key (CMK).
     *
     * @remarks
     * You can query the information about the CMK `05754286-3ba2-4fa6-8d41-4323aca6****` by using parameter settings provided in this topic. The information includes the creator, creation time, status, and deletion protection status of the CMK.
     *
     * @param request - DescribeKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKeyResponse
     *
     * @param DescribeKeyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeKeyResponse
     */
    public function describeKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a customer master key (CMK).
     *
     * @remarks
     * You can query the information about the CMK `05754286-3ba2-4fa6-8d41-4323aca6****` by using parameter settings provided in this topic. The information includes the creator, creation time, status, and deletion protection status of the CMK.
     *
     * @param request - DescribeKeyRequest
     *
     * @returns DescribeKeyResponse
     *
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
     * @remarks
     * This topic provides an example on how to query the information about a version of the CMK `1234abcd-12ab-34cd-56ef-12345678****`. The ID of the CMK version is `2ab1a983-7072-4bbc-a582-584b5bd8****`. The response shows that the creation time of the CMK version is `2016-03-25T10:42:40Z`.
     *
     * @param request - DescribeKeyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKeyVersionResponse
     *
     * @param DescribeKeyVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeKeyVersionResponse
     */
    public function describeKeyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keyVersionId) {
            @$query['KeyVersionId'] = $request->keyVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeKeyVersion',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKeyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This topic provides an example on how to query the information about a version of the CMK `1234abcd-12ab-34cd-56ef-12345678****`. The ID of the CMK version is `2ab1a983-7072-4bbc-a582-584b5bd8****`. The response shows that the creation time of the CMK version is `2016-03-25T10:42:40Z`.
     *
     * @param request - DescribeKeyVersionRequest
     *
     * @returns DescribeKeyVersionResponse
     *
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
     * Queries the details of an access control rule.
     *
     * @param request - DescribeNetworkRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkRuleResponse
     *
     * @param DescribeNetworkRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNetworkRuleResponse
     */
    public function describeNetworkRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNetworkRule',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an access control rule.
     *
     * @param request - DescribeNetworkRuleRequest
     *
     * @returns DescribeNetworkRuleResponse
     *
     * @param DescribeNetworkRuleRequest $request
     *
     * @return DescribeNetworkRuleResponse
     */
    public function describeNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a permission policy.
     *
     * @param request - DescribePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyResponse
     *
     * @param DescribePolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribePolicyResponse
     */
    public function describePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a permission policy.
     *
     * @param request - DescribePolicyRequest
     *
     * @returns DescribePolicyResponse
     *
     * @param DescribePolicyRequest $request
     *
     * @return DescribePolicyResponse
     */
    public function describePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyWithOptions($request, $runtime);
    }

    /**
     * Queries available regions.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Kms\\&api=DescribeRegions\\&type=RPC\\&version=2016-01-20)
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available regions.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Kms\\&api=DescribeRegions\\&type=RPC\\&version=2016-01-20)
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @remarks
     * This operation returns the metadata of a secret. This operation does not return the secret value.
     * In this example, the metadata of the secret named `secret001` is queried.
     *
     * @param request - DescribeSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecretResponse
     *
     * @param DescribeSecretRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSecretResponse
     */
    public function describeSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fetchTags) {
            @$query['FetchTags'] = $request->fetchTags;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecret',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This operation returns the metadata of a secret. This operation does not return the secret value.
     * In this example, the metadata of the secret named `secret001` is queried.
     *
     * @param request - DescribeSecretRequest
     *
     * @returns DescribeSecretResponse
     *
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
     * @remarks
     * If a customer master key (CMK) is disabled, the ciphertext encrypted by using this CMK cannot be decrypted until you re-enable it. You can call the [EnableKey](https://help.aliyun.com/document_detail/35150.html) operation to enable the CMK.
     * In this example, the CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****` is disabled.
     *
     * @param request - DisableKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableKeyResponse
     *
     * @param DisableKeyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DisableKeyResponse
     */
    public function disableKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * If a customer master key (CMK) is disabled, the ciphertext encrypted by using this CMK cannot be decrypted until you re-enable it. You can call the [EnableKey](https://help.aliyun.com/document_detail/35150.html) operation to enable the CMK.
     * In this example, the CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****` is disabled.
     *
     * @param request - DisableKeyRequest
     *
     * @returns DisableKeyResponse
     *
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
     * @param request - EnableKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableKeyResponse
     *
     * @param EnableKeyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return EnableKeyResponse
     */
    public function enableKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableKeyRequest
     *
     * @returns EnableKeyResponse
     *
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
     * @remarks
     *   KMS uses the primary version of a specified CMK to encrypt data.
     * *   Only data of 6 KB or less can be encrypted. For example, you can call this operation to encrypt RSA keys, database access passwords, or other sensitive information.
     * *   When you migrate encrypted data across regions, you can call this operation in the destination region to encrypt the plaintext of the data key that is used to encrypt the migrated data in the source region. This way, the ciphertext of the data key is generated in the destination region. You can also call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt the data key.
     *
     * @param tmpReq - EncryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EncryptResponse
     *
     * @param EncryptRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return EncryptResponse
     */
    public function encryptWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EncryptShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->encryptionContext) {
            $request->encryptionContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }

        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->encryptionContextShrink) {
            @$query['EncryptionContext'] = $request->encryptionContextShrink;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->plaintext) {
            @$query['Plaintext'] = $request->plaintext;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Encrypt',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     *   KMS uses the primary version of a specified CMK to encrypt data.
     * *   Only data of 6 KB or less can be encrypted. For example, you can call this operation to encrypt RSA keys, database access passwords, or other sensitive information.
     * *   When you migrate encrypted data across regions, you can call this operation in the destination region to encrypt the plaintext of the data key that is used to encrypt the migrated data in the source region. This way, the ciphertext of the data key is generated in the destination region. You can also call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt the data key.
     *
     * @param request - EncryptRequest
     *
     * @returns EncryptResponse
     *
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
     * @remarks
     * You can call the [GenerateDataKeyWithoutPlaintext](https://help.aliyun.com/document_detail/134043.html) operation to generate a data key, which is encrypted by a CMK. If you want to distribute the data key to other regions or cryptographic modules, you can call the ExportDataKey operation to use a public key to encrypt the data key.
     * Then, you can import the ciphertext of the data key to the cryptographic module where the private key is stored. This way, the data key is securely distributed from KMS to the cryptographic module. After the data key is imported to the cryptographic module, you can use it to encrypt or decrypt data.
     *
     * @param tmpReq - ExportDataKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportDataKeyResponse
     *
     * @param ExportDataKeyRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ExportDataKeyResponse
     */
    public function exportDataKeyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportDataKeyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->encryptionContext) {
            $request->encryptionContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }

        $query = [];
        if (null !== $request->ciphertextBlob) {
            @$query['CiphertextBlob'] = $request->ciphertextBlob;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->encryptionContextShrink) {
            @$query['EncryptionContext'] = $request->encryptionContextShrink;
        }

        if (null !== $request->publicKeyBlob) {
            @$query['PublicKeyBlob'] = $request->publicKeyBlob;
        }

        if (null !== $request->wrappingAlgorithm) {
            @$query['WrappingAlgorithm'] = $request->wrappingAlgorithm;
        }

        if (null !== $request->wrappingKeySpec) {
            @$query['WrappingKeySpec'] = $request->wrappingKeySpec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportDataKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * You can call the [GenerateDataKeyWithoutPlaintext](https://help.aliyun.com/document_detail/134043.html) operation to generate a data key, which is encrypted by a CMK. If you want to distribute the data key to other regions or cryptographic modules, you can call the ExportDataKey operation to use a public key to encrypt the data key.
     * Then, you can import the ciphertext of the data key to the cryptographic module where the private key is stored. This way, the data key is securely distributed from KMS to the cryptographic module. After the data key is imported to the cryptographic module, you can use it to encrypt or decrypt data.
     *
     * @param request - ExportDataKeyRequest
     *
     * @returns ExportDataKeyResponse
     *
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
     * @remarks
     * We recommend that you perform the following steps to import your data key to a cryptographic module:
     * *   Call the GenerateAndExportDataKey operation to generate a data key and obtain both the ciphertext of the data key encrypted by using the CMK and that encrypted by using the public key.
     * *   Store the ciphertext of the data key encrypted by using the CMK in KMS Secrets Manager or in a storage service such as ApsaraDB. This ciphertext is used for backup and restoration.
     * *   Import the ciphertext of the data key encrypted by using the public key to the cryptographic module where the private key is stored. Then, you can use the data key to encrypt or decrypt data.
     * >  The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the data keys randomly generated by calling this operation. You must take note of the data keys and the returned ciphertext.
     *
     * @param tmpReq - GenerateAndExportDataKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateAndExportDataKeyResponse
     *
     * @param GenerateAndExportDataKeyRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateAndExportDataKeyResponse
     */
    public function generateAndExportDataKeyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateAndExportDataKeyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->encryptionContext) {
            $request->encryptionContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }

        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->encryptionContextShrink) {
            @$query['EncryptionContext'] = $request->encryptionContextShrink;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keySpec) {
            @$query['KeySpec'] = $request->keySpec;
        }

        if (null !== $request->numberOfBytes) {
            @$query['NumberOfBytes'] = $request->numberOfBytes;
        }

        if (null !== $request->publicKeyBlob) {
            @$query['PublicKeyBlob'] = $request->publicKeyBlob;
        }

        if (null !== $request->wrappingAlgorithm) {
            @$query['WrappingAlgorithm'] = $request->wrappingAlgorithm;
        }

        if (null !== $request->wrappingKeySpec) {
            @$query['WrappingKeySpec'] = $request->wrappingKeySpec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateAndExportDataKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateAndExportDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * We recommend that you perform the following steps to import your data key to a cryptographic module:
     * *   Call the GenerateAndExportDataKey operation to generate a data key and obtain both the ciphertext of the data key encrypted by using the CMK and that encrypted by using the public key.
     * *   Store the ciphertext of the data key encrypted by using the CMK in KMS Secrets Manager or in a storage service such as ApsaraDB. This ciphertext is used for backup and restoration.
     * *   Import the ciphertext of the data key encrypted by using the public key to the cryptographic module where the private key is stored. Then, you can use the data key to encrypt or decrypt data.
     * >  The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the data keys randomly generated by calling this operation. You must take note of the data keys and the returned ciphertext.
     *
     * @param request - GenerateAndExportDataKeyRequest
     *
     * @returns GenerateAndExportDataKeyResponse
     *
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
     * 生成一个数据密钥.
     *
     * @remarks
     * This operation creates a random data key, encrypts the data key by using the specified customer master key (CMK), and returns the plaintext and ciphertext of the data key. You can use the plaintext of the data key to locally encrypt your data without using KMS and store the encrypted data together with the ciphertext of the data key. You can obtain the plaintext of the data key from the Plaintext parameter in the response and the ciphertext of the data key from the CiphertextBlob parameter in the response.
     * The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the generated data key. Therefore, you need to store the ciphertext of the data key in persistent storage.
     * We recommend that you locally encrypt data by performing the following steps:
     * 1\\. Call the GenerateDataKey operation.
     * 2\\. Use the plaintext of the data key that you obtain to locally encrypt data without using KMS. Then, delete the plaintext of the data key from the memory.
     * 3\\. Store the encrypted data together with the ciphertext of the data key that you obtain.
     * We recommend that you locally decrypt data by performing the following steps:
     * *   Call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt the locally stored ciphertext of the data key. The plaintext of data key is then returned.
     * *   Use the plaintext of the data key to locally decrypt data and then delete the plaintext of the data key from the memory.
     * In this example, a random data key is generated for the CMK whose ID is `7906979c-8e06-46a2-be2d-68e3ccbc****`.
     *
     * @param tmpReq - GenerateDataKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateDataKeyResponse
     *
     * @param GenerateDataKeyRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return GenerateDataKeyResponse
     */
    public function generateDataKeyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateDataKeyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->encryptionContext) {
            $request->encryptionContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }

        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->encryptionContextShrink) {
            @$query['EncryptionContext'] = $request->encryptionContextShrink;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keySpec) {
            @$query['KeySpec'] = $request->keySpec;
        }

        if (null !== $request->numberOfBytes) {
            @$query['NumberOfBytes'] = $request->numberOfBytes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateDataKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成一个数据密钥.
     *
     * @remarks
     * This operation creates a random data key, encrypts the data key by using the specified customer master key (CMK), and returns the plaintext and ciphertext of the data key. You can use the plaintext of the data key to locally encrypt your data without using KMS and store the encrypted data together with the ciphertext of the data key. You can obtain the plaintext of the data key from the Plaintext parameter in the response and the ciphertext of the data key from the CiphertextBlob parameter in the response.
     * The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the generated data key. Therefore, you need to store the ciphertext of the data key in persistent storage.
     * We recommend that you locally encrypt data by performing the following steps:
     * 1\\. Call the GenerateDataKey operation.
     * 2\\. Use the plaintext of the data key that you obtain to locally encrypt data without using KMS. Then, delete the plaintext of the data key from the memory.
     * 3\\. Store the encrypted data together with the ciphertext of the data key that you obtain.
     * We recommend that you locally decrypt data by performing the following steps:
     * *   Call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt the locally stored ciphertext of the data key. The plaintext of data key is then returned.
     * *   Use the plaintext of the data key to locally decrypt data and then delete the plaintext of the data key from the memory.
     * In this example, a random data key is generated for the CMK whose ID is `7906979c-8e06-46a2-be2d-68e3ccbc****`.
     *
     * @param request - GenerateDataKeyRequest
     *
     * @returns GenerateDataKeyResponse
     *
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
     * Generates a random data key, which can be used to encrypt local data.
     *
     * @remarks
     * This operation creates a random data key, encrypts the data key by using a specific symmetric CMK, and returns the ciphertext of the data key. This operation serves the same purpose as the [GenerateDataKey](https://help.aliyun.com/document_detail/28948.html) operation. The only difference is that this operation does not return the plaintext of the data key.
     * The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the generated data key.
     * > * This operation applies to the scenario when you do not need to use the data key to immediately encrypt data. Before you can use the data key to encrypt data, you must call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt the ciphertext of the data key.
     * > * This operation is also suitable for a distributed system with different trust levels. For example, a system stores data in different partitions based on a preset trust policy. A module creates different partitions and generates different data keys for each partition in advance. This module is not involved in data production and consumption after it completes initialization of the control plane. This module is the key provider. When producing and consuming data, modules on the control plane obtain the ciphertext of the data key for a partition first. After decrypting the ciphertext of the data key, modules on the control plane use the plaintext of the data key to encrypt or decrypt data and then clear the plaintext of the data key from the memory. In such a system, the key provider does not need to obtain the plaintext of the data key. It only needs to have the permissions to call the GenerateDataKeyWithoutPlaintext operation. The data producers or consumers do not need to generate new data keys. They only need to have the permissions to call the Decrypt operation.
     *
     * @param tmpReq - GenerateDataKeyWithoutPlaintextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateDataKeyWithoutPlaintextResponse
     *
     * @param GenerateDataKeyWithoutPlaintextRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintextWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateDataKeyWithoutPlaintextShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->encryptionContext) {
            $request->encryptionContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }

        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->encryptionContextShrink) {
            @$query['EncryptionContext'] = $request->encryptionContextShrink;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keySpec) {
            @$query['KeySpec'] = $request->keySpec;
        }

        if (null !== $request->numberOfBytes) {
            @$query['NumberOfBytes'] = $request->numberOfBytes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateDataKeyWithoutPlaintext',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateDataKeyWithoutPlaintextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a random data key, which can be used to encrypt local data.
     *
     * @remarks
     * This operation creates a random data key, encrypts the data key by using a specific symmetric CMK, and returns the ciphertext of the data key. This operation serves the same purpose as the [GenerateDataKey](https://help.aliyun.com/document_detail/28948.html) operation. The only difference is that this operation does not return the plaintext of the data key.
     * The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the generated data key.
     * > * This operation applies to the scenario when you do not need to use the data key to immediately encrypt data. Before you can use the data key to encrypt data, you must call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt the ciphertext of the data key.
     * > * This operation is also suitable for a distributed system with different trust levels. For example, a system stores data in different partitions based on a preset trust policy. A module creates different partitions and generates different data keys for each partition in advance. This module is not involved in data production and consumption after it completes initialization of the control plane. This module is the key provider. When producing and consuming data, modules on the control plane obtain the ciphertext of the data key for a partition first. After decrypting the ciphertext of the data key, modules on the control plane use the plaintext of the data key to encrypt or decrypt data and then clear the plaintext of the data key from the memory. In such a system, the key provider does not need to obtain the plaintext of the data key. It only needs to have the permissions to call the GenerateDataKeyWithoutPlaintext operation. The data producers or consumers do not need to generate new data keys. They only need to have the permissions to call the Decrypt operation.
     *
     * @param request - GenerateDataKeyWithoutPlaintextRequest
     *
     * @returns GenerateDataKeyWithoutPlaintextResponse
     *
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
     * @remarks
     * In this example, the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is queried. The certificate, certificate chain, certificate ID, and certificate signing request (CSR) are returned.
     *
     * @param request - GetCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCertificateResponse
     *
     * @param GetCertificateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCertificateResponse
     */
    public function getCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCertificate',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * In this example, the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is queried. The certificate, certificate chain, certificate ID, and certificate signing request (CSR) are returned.
     *
     * @param request - GetCertificateRequest
     *
     * @returns GetCertificateResponse
     *
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
     * Queries the information about a client key.
     *
     * @param request - GetClientKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientKeyResponse
     *
     * @param GetClientKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetClientKeyResponse
     */
    public function getClientKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClientKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClientKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a client key.
     *
     * @param request - GetClientKeyRequest
     *
     * @returns GetClientKeyResponse
     *
     * @param GetClientKeyRequest $request
     *
     * @return GetClientKeyResponse
     */
    public function getClientKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientKeyWithOptions($request, $runtime);
    }

    /**
     * 获取默认KMS实例.
     *
     * @param request - GetDefaultKmsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDefaultKmsInstanceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetDefaultKmsInstanceResponse
     */
    public function getDefaultKmsInstanceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetDefaultKmsInstance',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDefaultKmsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取默认KMS实例.
     *
     * @returns GetDefaultKmsInstanceResponse
     *
     * @return GetDefaultKmsInstanceResponse
     */
    public function getDefaultKmsInstance()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultKmsInstanceWithOptions($runtime);
    }

    /**
     * 仅可查询名称为 default 的 Key Policy，否则提示 Not Found。
     *
     * @param request - GetKeyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKeyPolicyResponse
     *
     * @param GetKeyPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetKeyPolicyResponse
     */
    public function getKeyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKeyPolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetKeyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 仅可查询名称为 default 的 Key Policy，否则提示 Not Found。
     *
     * @param request - GetKeyPolicyRequest
     *
     * @returns GetKeyPolicyResponse
     *
     * @param GetKeyPolicyRequest $request
     *
     * @return GetKeyPolicyResponse
     */
    public function getKeyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeyPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Key Management Service (KMS) instance.
     *
     * @param request - GetKmsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKmsInstanceResponse
     *
     * @param GetKmsInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetKmsInstanceResponse
     */
    public function getKmsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kmsInstanceId) {
            @$query['KmsInstanceId'] = $request->kmsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKmsInstance',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetKmsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Key Management Service (KMS) instance.
     *
     * @param request - GetKmsInstanceRequest
     *
     * @returns GetKmsInstanceResponse
     *
     * @param GetKmsInstanceRequest $request
     *
     * @return GetKmsInstanceResponse
     */
    public function getKmsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKmsInstanceWithOptions($request, $runtime);
    }

    /**
     * 获取实例配额信息.
     *
     * @param request - GetKmsInstanceQuotaInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKmsInstanceQuotaInfosResponse
     *
     * @param GetKmsInstanceQuotaInfosRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetKmsInstanceQuotaInfosResponse
     */
    public function getKmsInstanceQuotaInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kmsInstanceId) {
            @$query['KmsInstanceId'] = $request->kmsInstanceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKmsInstanceQuotaInfos',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetKmsInstanceQuotaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例配额信息.
     *
     * @param request - GetKmsInstanceQuotaInfosRequest
     *
     * @returns GetKmsInstanceQuotaInfosResponse
     *
     * @param GetKmsInstanceQuotaInfosRequest $request
     *
     * @return GetKmsInstanceQuotaInfosResponse
     */
    public function getKmsInstanceQuotaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKmsInstanceQuotaInfosWithOptions($request, $runtime);
    }

    /**
     * Queries the parameters that are used to import key material for a customer master key (CMK).
     *
     * @remarks
     * The returned parameters can be used to call the [ImportKeyMaterial](https://www.alibabacloud.com/help/en/key-management-service/latest/importkeymaterial) operation.
     * - You can import key material only for CMKs whose Origin parameter is set to EXTERNAL.
     * - The public key and token that are returned by the GetParametersForImport operation must be used together. The public key and token can be used to import key material only for the CMK that is specified when you call the operation.
     * - The public key and token that are returned vary each time you call the GetParametersForImport operation.
     * - You must specify the type of the public key and the encryption algorithm that are used to encrypt key material. The following table lists the types of public keys and the encryption algorithms allowed for each type.
     * | Public key type | Encryption algorithm | Description |
     * | --------------- | -------------------- | ----------- |
     * | RSA_2048 | RSAES_PKCS1_V1_5
     * RSAES_OAEP_SHA_1
     * RSAES_OAEP_SHA_256 | CMKs of all regions and all protection levels are supported.
     * Dedicated Key Management Service (KMS) does not support RSAES_OAEP_SHA_1. |
     * | EC_SM2 | SM2PKE | CMKs whose ProtectionLevel is set to HSM are supported. The SM2 algorithm is developed and approved by the State Cryptography Administration of China. The SM2 algorithm can be used only to import key material for a CMK whose ProtectionLevel is set to HSM. You can use the SM2 algorithm only when you enable the Managed HSM feature for KMS in the Chinese mainland. For more information, see [Overview of Managed HSM](https://www.alibabacloud.com/help/en/key-management-service/latest/managed-hsm-overview). |
     * For more information, see [Import key material](https://www.alibabacloud.com/help/en/key-management-service/latest/import-key-material). This topic provides an example on how to query the parameters that are used to import key material for a CMK. The ID of the CMK is `1234abcd-12ab-34cd-56ef-12345678****`, the encryption algorithm is `RSAES_PKCS1_V1_5`, and the public key is of the `RSA_2048` type. The parameters that are returned include the ID of the CMK, the public key that is used to encrypt the key material, the token that is used to import the key material, and the time when the token expires.
     *
     * @param request - GetParametersForImportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParametersForImportResponse
     *
     * @param GetParametersForImportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetParametersForImportResponse
     */
    public function getParametersForImportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->wrappingAlgorithm) {
            @$query['WrappingAlgorithm'] = $request->wrappingAlgorithm;
        }

        if (null !== $request->wrappingKeySpec) {
            @$query['WrappingKeySpec'] = $request->wrappingKeySpec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetParametersForImport',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetParametersForImportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parameters that are used to import key material for a customer master key (CMK).
     *
     * @remarks
     * The returned parameters can be used to call the [ImportKeyMaterial](https://www.alibabacloud.com/help/en/key-management-service/latest/importkeymaterial) operation.
     * - You can import key material only for CMKs whose Origin parameter is set to EXTERNAL.
     * - The public key and token that are returned by the GetParametersForImport operation must be used together. The public key and token can be used to import key material only for the CMK that is specified when you call the operation.
     * - The public key and token that are returned vary each time you call the GetParametersForImport operation.
     * - You must specify the type of the public key and the encryption algorithm that are used to encrypt key material. The following table lists the types of public keys and the encryption algorithms allowed for each type.
     * | Public key type | Encryption algorithm | Description |
     * | --------------- | -------------------- | ----------- |
     * | RSA_2048 | RSAES_PKCS1_V1_5
     * RSAES_OAEP_SHA_1
     * RSAES_OAEP_SHA_256 | CMKs of all regions and all protection levels are supported.
     * Dedicated Key Management Service (KMS) does not support RSAES_OAEP_SHA_1. |
     * | EC_SM2 | SM2PKE | CMKs whose ProtectionLevel is set to HSM are supported. The SM2 algorithm is developed and approved by the State Cryptography Administration of China. The SM2 algorithm can be used only to import key material for a CMK whose ProtectionLevel is set to HSM. You can use the SM2 algorithm only when you enable the Managed HSM feature for KMS in the Chinese mainland. For more information, see [Overview of Managed HSM](https://www.alibabacloud.com/help/en/key-management-service/latest/managed-hsm-overview). |
     * For more information, see [Import key material](https://www.alibabacloud.com/help/en/key-management-service/latest/import-key-material). This topic provides an example on how to query the parameters that are used to import key material for a CMK. The ID of the CMK is `1234abcd-12ab-34cd-56ef-12345678****`, the encryption algorithm is `RSAES_PKCS1_V1_5`, and the public key is of the `RSA_2048` type. The parameters that are returned include the ID of the CMK, the public key that is used to encrypt the key material, the token that is used to import the key material, and the time when the token expires.
     *
     * @param request - GetParametersForImportRequest
     *
     * @returns GetParametersForImportResponse
     *
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
     * @param request - GetPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPublicKeyResponse
     *
     * @param GetPublicKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetPublicKeyResponse
     */
    public function getPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keyVersionId) {
            @$query['KeyVersionId'] = $request->keyVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPublicKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetPublicKeyRequest
     *
     * @returns GetPublicKeyResponse
     *
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
     * @param request - GetRandomPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRandomPasswordResponse
     *
     * @param GetRandomPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRandomPasswordResponse
     */
    public function getRandomPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->excludeCharacters) {
            @$query['ExcludeCharacters'] = $request->excludeCharacters;
        }

        if (null !== $request->excludeLowercase) {
            @$query['ExcludeLowercase'] = $request->excludeLowercase;
        }

        if (null !== $request->excludeNumbers) {
            @$query['ExcludeNumbers'] = $request->excludeNumbers;
        }

        if (null !== $request->excludePunctuation) {
            @$query['ExcludePunctuation'] = $request->excludePunctuation;
        }

        if (null !== $request->excludeUppercase) {
            @$query['ExcludeUppercase'] = $request->excludeUppercase;
        }

        if (null !== $request->passwordLength) {
            @$query['PasswordLength'] = $request->passwordLength;
        }

        if (null !== $request->requireEachIncludedType) {
            @$query['RequireEachIncludedType'] = $request->requireEachIncludedType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRandomPassword',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRandomPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetRandomPasswordRequest
     *
     * @returns GetRandomPasswordResponse
     *
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
     * 仅可查询名称为 default 的 Secret Policy，否则提示 Not Found。
     *
     * @param request - GetSecretPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretPolicyResponse
     *
     * @param GetSecretPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSecretPolicyResponse
     */
    public function getSecretPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecretPolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecretPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 仅可查询名称为 default 的 Secret Policy，否则提示 Not Found。
     *
     * @param request - GetSecretPolicyRequest
     *
     * @returns GetSecretPolicyResponse
     *
     * @param GetSecretPolicyRequest $request
     *
     * @return GetSecretPolicyResponse
     */
    public function getSecretPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretPolicyWithOptions($request, $runtime);
    }

    /**
     * 调用GetSecretValue接口获取凭据值。
     *
     * @remarks
     * If you do not specify a version number or stage label, Secrets Manager returns the secret value of the version marked with ACSCurrent.
     * If a customer master key (CMK) is specified to encrypt the secret value, you must also have the `kms:Decrypt` permission on the CMK to call the GetSecretValue operation.
     * In this example, the value of the secret named `secret001` is obtained. The secret value is returned in the `SecretData` parameter. The secret value is `testdata1`.
     *
     * @param request - GetSecretValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretValueResponse
     *
     * @param GetSecretValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fetchExtendedConfig) {
            @$query['FetchExtendedConfig'] = $request->fetchExtendedConfig;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        if (null !== $request->versionStage) {
            @$query['VersionStage'] = $request->versionStage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecretValue',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用GetSecretValue接口获取凭据值。
     *
     * @remarks
     * If you do not specify a version number or stage label, Secrets Manager returns the secret value of the version marked with ACSCurrent.
     * If a customer master key (CMK) is specified to encrypt the secret value, you must also have the `kms:Decrypt` permission on the CMK to call the GetSecretValue operation.
     * In this example, the value of the secret named `secret001` is obtained. The secret value is returned in the `SecretData` parameter. The secret value is `testdata1`.
     *
     * @param request - GetSecretValueRequest
     *
     * @returns GetSecretValueResponse
     *
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
     * Call the ImportKeyMaterial operation to import the key material.
     *
     * @remarks
     * Call [CreateKey](https://help.aliyun.com/document_detail/28947.html) when creating a CMK, you can select its key material source as external. **Origin** set to **EXTERNAL**. This API is used to import the key material into the CMK.
     * *   To view the CMK **Origin**, see [DescribeKey](https://help.aliyun.com/document_detail/28952.html).
     * *   Before importing key material, you need to call the [GetParametersForImport](https://help.aliyun.com/document_detail/68621.html) obtain the parameters required to import the key material, including the public key and import token.
     * > *   The key type of the pair is **Aliyun_AES_256** the key material must be 256 bits. The key type must be **Aliyun_SM4** the CMK and key material must be 128 bits.
     * > *   You can set the expiration time for the key material, or you can set it to never expire.
     * > *   You can reimport the key material and reset the expiration time for the specified CMK at any time, but the same key material must be imported.
     * > *   After the imported key material expires or is deleted, the specified CMK is unavailable until the same key material are imported again.
     * > *   A Key material can be imported to multiple cmks, but any Data or Data Key encrypted by one CMK cannot be decrypted by another CMK.
     *
     * @param request - ImportKeyMaterialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportKeyMaterialResponse
     *
     * @param ImportKeyMaterialRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportKeyMaterialResponse
     */
    public function importKeyMaterialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptedKeyMaterial) {
            @$query['EncryptedKeyMaterial'] = $request->encryptedKeyMaterial;
        }

        if (null !== $request->importToken) {
            @$query['ImportToken'] = $request->importToken;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->keyMaterialExpireUnix) {
            @$query['KeyMaterialExpireUnix'] = $request->keyMaterialExpireUnix;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportKeyMaterial',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportKeyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the ImportKeyMaterial operation to import the key material.
     *
     * @remarks
     * Call [CreateKey](https://help.aliyun.com/document_detail/28947.html) when creating a CMK, you can select its key material source as external. **Origin** set to **EXTERNAL**. This API is used to import the key material into the CMK.
     * *   To view the CMK **Origin**, see [DescribeKey](https://help.aliyun.com/document_detail/28952.html).
     * *   Before importing key material, you need to call the [GetParametersForImport](https://help.aliyun.com/document_detail/68621.html) obtain the parameters required to import the key material, including the public key and import token.
     * > *   The key type of the pair is **Aliyun_AES_256** the key material must be 256 bits. The key type must be **Aliyun_SM4** the CMK and key material must be 128 bits.
     * > *   You can set the expiration time for the key material, or you can set it to never expire.
     * > *   You can reimport the key material and reset the expiration time for the specified CMK at any time, but the same key material must be imported.
     * > *   After the imported key material expires or is deleted, the specified CMK is unavailable until the same key material are imported again.
     * > *   A Key material can be imported to multiple cmks, but any Data or Data Key encrypted by one CMK cannot be decrypted by another CMK.
     *
     * @param request - ImportKeyMaterialRequest
     *
     * @returns ImportKeyMaterialResponse
     *
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
     * Queries all aliases in the current region for the current account.
     *
     * @param request - ListAliasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAliasesResponse
     *
     * @param ListAliasesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListAliasesResponse
     */
    public function listAliasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAliases',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all aliases in the current region for the current account.
     *
     * @param request - ListAliasesRequest
     *
     * @returns ListAliasesResponse
     *
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
     * @param request - ListAliasesByKeyIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAliasesByKeyIdResponse
     *
     * @param ListAliasesByKeyIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAliasesByKeyIdResponse
     */
    public function listAliasesByKeyIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAliasesByKeyId',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAliasesByKeyIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAliasesByKeyIdRequest
     *
     * @returns ListAliasesByKeyIdResponse
     *
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
     * Queries a list of application access points (AAPs).
     *
     * @param request - ListApplicationAccessPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationAccessPointsResponse
     *
     * @param ListApplicationAccessPointsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListApplicationAccessPointsResponse
     */
    public function listApplicationAccessPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationAccessPoints',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationAccessPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of application access points (AAPs).
     *
     * @param request - ListApplicationAccessPointsRequest
     *
     * @returns ListApplicationAccessPointsResponse
     *
     * @param ListApplicationAccessPointsRequest $request
     *
     * @return ListApplicationAccessPointsResponse
     */
    public function listApplicationAccessPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationAccessPointsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListClientKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClientKeysResponse
     *
     * @param ListClientKeysRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListClientKeysResponse
     */
    public function listClientKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClientKeys',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClientKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListClientKeysRequest
     *
     * @returns ListClientKeysResponse
     *
     * @param ListClientKeysRequest $request
     *
     * @return ListClientKeysResponse
     */
    public function listClientKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientKeysWithOptions($request, $runtime);
    }

    /**
     * Queries all versions of a specified CMK.
     *
     * @param request - ListKeyVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKeyVersionsResponse
     *
     * @param ListKeyVersionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListKeyVersionsResponse
     */
    public function listKeyVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKeyVersions',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListKeyVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all versions of a specified CMK.
     *
     * @param request - ListKeyVersionsRequest
     *
     * @returns ListKeyVersionsResponse
     *
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
     * Queries all customer master keys (CMKs) of the current Alibaba Cloud account in the current region.
     *
     * @param request - ListKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKeysResponse
     *
     * @param ListKeysRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListKeysResponse
     */
    public function listKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKeys',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all customer master keys (CMKs) of the current Alibaba Cloud account in the current region.
     *
     * @param request - ListKeysRequest
     *
     * @returns ListKeysResponse
     *
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
     * Queries a list of Key Management Service (KMS) instances.
     *
     * @param request - ListKmsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKmsInstancesResponse
     *
     * @param ListKmsInstancesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListKmsInstancesResponse
     */
    public function listKmsInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKmsInstances',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListKmsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Key Management Service (KMS) instances.
     *
     * @param request - ListKmsInstancesRequest
     *
     * @returns ListKmsInstancesResponse
     *
     * @param ListKmsInstancesRequest $request
     *
     * @return ListKmsInstancesResponse
     */
    public function listKmsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKmsInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of access control rules.
     *
     * @param request - ListNetworkRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNetworkRulesResponse
     *
     * @param ListNetworkRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNetworkRulesResponse
     */
    public function listNetworkRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNetworkRules',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNetworkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of access control rules.
     *
     * @param request - ListNetworkRulesRequest
     *
     * @returns ListNetworkRulesResponse
     *
     * @param ListNetworkRulesRequest $request
     *
     * @return ListNetworkRulesResponse
     */
    public function listNetworkRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkRulesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of permission policies.
     *
     * @param request - ListPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of permission policies.
     *
     * @param request - ListPoliciesRequest
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * Request format: KeyId="string"
     *
     * @param request - ListResourceTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceTagsResponse
     *
     * @param ListResourceTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListResourceTagsResponse
     */
    public function listResourceTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceTags',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * Request format: KeyId="string"
     *
     * @param request - ListResourceTagsRequest
     *
     * @returns ListResourceTagsResponse
     *
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
     * @remarks
     * The secret value is not included in the returned version information. By default, deprecated secret versions are not returned.
     *
     * @param request - ListSecretVersionIdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretVersionIdsResponse
     *
     * @param ListSecretVersionIdsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretVersionIdsResponse
     */
    public function listSecretVersionIdsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeDeprecated) {
            @$query['IncludeDeprecated'] = $request->includeDeprecated;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecretVersionIds',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecretVersionIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * The secret value is not included in the returned version information. By default, deprecated secret versions are not returned.
     *
     * @param request - ListSecretVersionIdsRequest
     *
     * @returns ListSecretVersionIdsResponse
     *
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
     * @remarks
     * Specifies whether to return the resource tags of the secret. Valid values:
     * *   true: returns the resource tags.
     * *   false: does not return the resource tags. This is the default value.
     *
     * @param request - ListSecretsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fetchTags) {
            @$query['FetchTags'] = $request->fetchTags;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecrets',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * Specifies whether to return the resource tags of the secret. Valid values:
     * *   true: returns the resource tags.
     * *   false: does not return the resource tags. This is the default value.
     *
     * @param request - ListSecretsRequest
     *
     * @returns ListSecretsResponse
     *
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
     * Queries the tags of a key or a secret.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of a key or a secret.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Activates Key Management Service (KMS) under your Alibaba cloud account.
     *
     * @remarks
     * When you call this operation, note that:
     * - KMS is a paid service. For more information about the billing method, see [Billing description](https://www.alibabacloud.com/help/en/key-management-service/latest/billing-billing).
     * - An Alibaba Cloud account can activate KMS only once.
     * - Make sure that your Alibaba Cloud account has passed real-name authentication.
     *
     * @param request - OpenKmsServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenKmsServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return OpenKmsServiceResponse
     */
    public function openKmsServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'OpenKmsService',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenKmsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates Key Management Service (KMS) under your Alibaba cloud account.
     *
     * @remarks
     * When you call this operation, note that:
     * - KMS is a paid service. For more information about the billing method, see [Billing description](https://www.alibabacloud.com/help/en/key-management-service/latest/billing-billing).
     * - An Alibaba Cloud account can activate KMS only once.
     * - Make sure that your Alibaba Cloud account has passed real-name authentication.
     *
     * @returns OpenKmsServiceResponse
     *
     * @return OpenKmsServiceResponse
     */
    public function openKmsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openKmsServiceWithOptions($runtime);
    }

    /**
     * @remarks
     * This operation is used to store the secret values of new versions. It cannot be used to modify the secret value of an existing version.
     * By default, the newly stored secret value is marked with ACSCurrent, and the mark for the previous version of the secret value is changed from ACSCurrent to ACSPrevious. If you specify the VersionStage parameter, the newly stored secret value is marked with the stage label that you specify.
     * You must specify a version number when you call the operation. Secrets Manager performs operations based on the following rules:
     * *   If the specified version number does not exist in the secret, Secrets Manager creates the version and stores the secret value.
     * *   If the specified version number already exists in the secret and the secret value of the existing version is the same as the secret value that you specify, Secrets Manager ignores the request and returns a success message. The request is idempotent.
     * *   If the specified version number already exists in the secret but the secret value of the existing version is different from the secret value that you specify, Secrets Manager rejects the request and returns a failure message.
     * Limits: This operation is available only for standard secrets.
     * In this example, the secret value of a new version is stored into the `secret001` secret. The `VersionId` parameter is set to `00000000000000000000000000000000203` as the new version, and the `SecretData` parameter is set to `importantdata`.
     *
     * @param request - PutSecretValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutSecretValueResponse
     *
     * @param PutSecretValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutSecretValueResponse
     */
    public function putSecretValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->secretData) {
            @$query['SecretData'] = $request->secretData;
        }

        if (null !== $request->secretDataType) {
            @$query['SecretDataType'] = $request->secretDataType;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        if (null !== $request->versionStages) {
            @$query['VersionStages'] = $request->versionStages;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutSecretValue',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This operation is used to store the secret values of new versions. It cannot be used to modify the secret value of an existing version.
     * By default, the newly stored secret value is marked with ACSCurrent, and the mark for the previous version of the secret value is changed from ACSCurrent to ACSPrevious. If you specify the VersionStage parameter, the newly stored secret value is marked with the stage label that you specify.
     * You must specify a version number when you call the operation. Secrets Manager performs operations based on the following rules:
     * *   If the specified version number does not exist in the secret, Secrets Manager creates the version and stores the secret value.
     * *   If the specified version number already exists in the secret and the secret value of the existing version is the same as the secret value that you specify, Secrets Manager ignores the request and returns a success message. The request is idempotent.
     * *   If the specified version number already exists in the secret but the secret value of the existing version is different from the secret value that you specify, Secrets Manager rejects the request and returns a failure message.
     * Limits: This operation is available only for standard secrets.
     * In this example, the secret value of a new version is stored into the `secret001` secret. The `VersionId` parameter is set to `00000000000000000000000000000000203` as the new version, and the `SecretData` parameter is set to `importantdata`.
     *
     * @param request - PutSecretValueRequest
     *
     * @returns PutSecretValueResponse
     *
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
     * @remarks
     * You can call this operation in the following scenarios:
     * *   After the CMK that was used to encrypt your data is rotated, you can call this operation to use the latest CMK version to re-encrypt the data. For more information about automatic key rotation, see [Configure automatic key rotation](https://help.aliyun.com/document_detail/134270.html).
     * *   The CMK that was used to encrypt your data remains unchanged, but EncryptionContext is changed. In this scenario, you can call this operation to re-encrypt the data.
     * *   You can call this operation to use a CMK in KMS to re-encrypt data or a data key that was previously encrypted by a different CMK.
     * To use the ReEncrypt operation, you must have two permissions:
     * *   kms:ReEncryptFrom on the source CMK
     * *   kms:ReEncryptTo on the destination CMK
     * *   For simplicity, you can specify kms:ReEncrypt\\* to allow both of the preceding permissions.
     *
     * @param tmpReq - ReEncryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReEncryptResponse
     *
     * @param ReEncryptRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ReEncryptResponse
     */
    public function reEncryptWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReEncryptShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destinationEncryptionContext) {
            $request->destinationEncryptionContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destinationEncryptionContext, 'DestinationEncryptionContext', 'json');
        }

        if (null !== $tmpReq->sourceEncryptionContext) {
            $request->sourceEncryptionContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceEncryptionContext, 'SourceEncryptionContext', 'json');
        }

        $query = [];
        if (null !== $request->ciphertextBlob) {
            @$query['CiphertextBlob'] = $request->ciphertextBlob;
        }

        if (null !== $request->destinationEncryptionContextShrink) {
            @$query['DestinationEncryptionContext'] = $request->destinationEncryptionContextShrink;
        }

        if (null !== $request->destinationKeyId) {
            @$query['DestinationKeyId'] = $request->destinationKeyId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->sourceEncryptionAlgorithm) {
            @$query['SourceEncryptionAlgorithm'] = $request->sourceEncryptionAlgorithm;
        }

        if (null !== $request->sourceEncryptionContextShrink) {
            @$query['SourceEncryptionContext'] = $request->sourceEncryptionContextShrink;
        }

        if (null !== $request->sourceKeyId) {
            @$query['SourceKeyId'] = $request->sourceKeyId;
        }

        if (null !== $request->sourceKeyVersionId) {
            @$query['SourceKeyVersionId'] = $request->sourceKeyVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReEncrypt',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * You can call this operation in the following scenarios:
     * *   After the CMK that was used to encrypt your data is rotated, you can call this operation to use the latest CMK version to re-encrypt the data. For more information about automatic key rotation, see [Configure automatic key rotation](https://help.aliyun.com/document_detail/134270.html).
     * *   The CMK that was used to encrypt your data remains unchanged, but EncryptionContext is changed. In this scenario, you can call this operation to re-encrypt the data.
     * *   You can call this operation to use a CMK in KMS to re-encrypt data or a data key that was previously encrypted by a different CMK.
     * To use the ReEncrypt operation, you must have two permissions:
     * *   kms:ReEncryptFrom on the source CMK
     * *   kms:ReEncryptTo on the destination CMK
     * *   For simplicity, you can specify kms:ReEncrypt\\* to allow both of the preceding permissions.
     *
     * @param request - ReEncryptRequest
     *
     * @returns ReEncryptResponse
     *
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
     * 仅后付费实例支持释放，预付费实例需要从用户中心-退订管理释放。
     *
     * @param request - ReleaseKmsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseKmsInstanceResponse
     *
     * @param ReleaseKmsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReleaseKmsInstanceResponse
     */
    public function releaseKmsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceDeleteWithoutBackup) {
            @$query['ForceDeleteWithoutBackup'] = $request->forceDeleteWithoutBackup;
        }

        if (null !== $request->kmsInstanceId) {
            @$query['KmsInstanceId'] = $request->kmsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseKmsInstance',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseKmsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 仅后付费实例支持释放，预付费实例需要从用户中心-退订管理释放。
     *
     * @param request - ReleaseKmsInstanceRequest
     *
     * @returns ReleaseKmsInstanceResponse
     *
     * @param ReleaseKmsInstanceRequest $request
     *
     * @return ReleaseKmsInstanceResponse
     */
    public function releaseKmsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseKmsInstanceWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * You can only use this operation to restore a deleted secret that is within its recovery period. If you set **ForceDeleteWithoutRecovery** to **true** when you delete the secret, you cannot restore it.
     *
     * @param request - RestoreSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreSecretResponse
     *
     * @param RestoreSecretRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RestoreSecretResponse
     */
    public function restoreSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestoreSecret',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * You can only use this operation to restore a deleted secret that is within its recovery period. If you set **ForceDeleteWithoutRecovery** to **true** when you delete the secret, you cannot restore it.
     *
     * @param request - RestoreSecretRequest
     *
     * @returns RestoreSecretResponse
     *
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
     * @remarks
     * Limits:
     * • A secret of each Alibaba Cloud account can be rotated for a maximum of 50 times per hour.
     * • The RotateSecret operation is unavailable for standard secrets.
     * In this example, the `RdsSecret/Mysql5.4/MyCred` secret is manually rotated, and the version number of the secret is set to `000000123` after the secret is rotated.
     *
     * @param request - RotateSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RotateSecretResponse
     *
     * @param RotateSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RotateSecretResponse
     */
    public function rotateSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RotateSecret',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RotateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * Limits:
     * • A secret of each Alibaba Cloud account can be rotated for a maximum of 50 times per hour.
     * • The RotateSecret operation is unavailable for standard secrets.
     * In this example, the `RdsSecret/Mysql5.4/MyCred` secret is manually rotated, and the version number of the secret is set to `000000123` after the secret is rotated.
     *
     * @param request - RotateSecretRequest
     *
     * @returns RotateSecretResponse
     *
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
     * @remarks
     * During the scheduled period, the CMK is in the PendingDeletion state and cannot be used to encrypt data, decrypt data, or generate data keys.
     * After a CMK is deleted, it cannot be recovered. Data that is encrypted and data keys that are generated by using the CMK cannot be decrypted. To prevent accidental deletion of CMKs, Key Management Service (KMS) allows you to only schedule key deletion tasks. You cannot directly delete CMKs. If you want to delete a CMK, call the [DisableKey](https://help.aliyun.com/document_detail/35151.html) operation to disable the CMK.
     * When you call this operation, you must specify a scheduled period between 7 days to 366 days. The scheduled period starts from the time when you submit the request. You can call the [CancelKeyDeletion](https://help.aliyun.com/document_detail/44197.html) operation to cancel the key deletion task before the scheduled period ends.
     *
     * @param request - ScheduleKeyDeletionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScheduleKeyDeletionResponse
     *
     * @param ScheduleKeyDeletionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->pendingWindowInDays) {
            @$query['PendingWindowInDays'] = $request->pendingWindowInDays;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScheduleKeyDeletion',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScheduleKeyDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * During the scheduled period, the CMK is in the PendingDeletion state and cannot be used to encrypt data, decrypt data, or generate data keys.
     * After a CMK is deleted, it cannot be recovered. Data that is encrypted and data keys that are generated by using the CMK cannot be decrypted. To prevent accidental deletion of CMKs, Key Management Service (KMS) allows you to only schedule key deletion tasks. You cannot directly delete CMKs. If you want to delete a CMK, call the [DisableKey](https://help.aliyun.com/document_detail/35151.html) operation to disable the CMK.
     * When you call this operation, you must specify a scheduled period between 7 days to 366 days. The scheduled period starts from the time when you submit the request. You can call the [CancelKeyDeletion](https://help.aliyun.com/document_detail/44197.html) operation to cancel the key deletion task before the scheduled period ends.
     *
     * @param request - ScheduleKeyDeletionRequest
     *
     * @returns ScheduleKeyDeletionResponse
     *
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
     * Enables or disables deletion protection for a customer master key (CMK).
     *
     * @remarks
     *   After you enable deletion protection for a CMK, you cannot delete the CMK. If you want to delete the CMK, you must first disable deletion protection for the CMK.
     * *   Before you can call the SetDeletionProtection operation, make sure that the required CMK is not in the Pending Deletion state. You can call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the CMK status, which is specified by the KeyState parameter.
     * You can enable deletion protection for the CMK whose Alibaba Cloud Resource Name (ARN) is `acs:kms:cn-hangzhou:123213123****:key/0225f411-b21d-46d1-be5b-93931c82****` by using parameter settings provided in this topic. The CMK ARN is specified by the ProtectedResourceArn parameter.
     *
     * @param request - SetDeletionProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDeletionProtectionResponse
     *
     * @param SetDeletionProtectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletionProtectionDescription) {
            @$query['DeletionProtectionDescription'] = $request->deletionProtectionDescription;
        }

        if (null !== $request->enableDeletionProtection) {
            @$query['EnableDeletionProtection'] = $request->enableDeletionProtection;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->protectedResourceArn) {
            @$query['ProtectedResourceArn'] = $request->protectedResourceArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDeletionProtection',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables deletion protection for a customer master key (CMK).
     *
     * @remarks
     *   After you enable deletion protection for a CMK, you cannot delete the CMK. If you want to delete the CMK, you must first disable deletion protection for the CMK.
     * *   Before you can call the SetDeletionProtection operation, make sure that the required CMK is not in the Pending Deletion state. You can call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the CMK status, which is specified by the KeyState parameter.
     * You can enable deletion protection for the CMK whose Alibaba Cloud Resource Name (ARN) is `acs:kms:cn-hangzhou:123213123****:key/0225f411-b21d-46d1-be5b-93931c82****` by using parameter settings provided in this topic. The CMK ARN is specified by the ProtectedResourceArn parameter.
     *
     * @param request - SetDeletionProtectionRequest
     *
     * @returns SetDeletionProtectionResponse
     *
     * @param SetDeletionProtectionRequest $request
     *
     * @return SetDeletionProtectionResponse
     */
    public function setDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * 可以设置一条 Key Policy，且名称必须为 default。
     *
     * @param request - SetKeyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetKeyPolicyResponse
     *
     * @param SetKeyPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetKeyPolicyResponse
     */
    public function setKeyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetKeyPolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetKeyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 可以设置一条 Key Policy，且名称必须为 default。
     *
     * @param request - SetKeyPolicyRequest
     *
     * @returns SetKeyPolicyResponse
     *
     * @param SetKeyPolicyRequest $request
     *
     * @return SetKeyPolicyResponse
     */
    public function setKeyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setKeyPolicyWithOptions($request, $runtime);
    }

    /**
     * 可以设置一条 Secret Policy，且名称必须为 default。
     *
     * @param request - SetSecretPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSecretPolicyResponse
     *
     * @param SetSecretPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetSecretPolicyResponse
     */
    public function setSecretPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSecretPolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSecretPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 可以设置一条 Secret Policy，且名称必须为 default。
     *
     * @param request - SetSecretPolicyRequest
     *
     * @returns SetSecretPolicyResponse
     *
     * @param SetSecretPolicyRequest $request
     *
     * @return SetSecretPolicyResponse
     */
    public function setSecretPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSecretPolicyWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * You can add up to 10 tags to a CMK, secret, or certificate.
     * In this example, the tags `[{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]` are added to the CMK whose ID is `08c33a6f-4e0a-4a1b-a3fa-7ddf****`.
     *
     * @param request - TagResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourceResponse
     *
     * @param TagResourceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TagResourceResponse
     */
    public function tagResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResource',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * You can add up to 10 tags to a CMK, secret, or certificate.
     * In this example, the tags `[{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]` are added to the CMK whose ID is `08c33a6f-4e0a-4a1b-a3fa-7ddf****`.
     *
     * @param request - TagResourceRequest
     *
     * @returns TagResourceResponse
     *
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
     * Adds tags to keys or secrets.
     *
     * @remarks
     * You can add multiple tags to multiple keys or multiple secrets at a time.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to keys or secrets.
     *
     * @remarks
     * You can add multiple tags to multiple keys or multiple secrets at a time.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * One or more tag keys. Separate multiple tag keys with commas (,).
     * You need to specify only the tag keys, not the tag values.
     * Each tag key must be 1 to 128 bytes in length.
     *
     * @param request - UntagResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourceResponse
     *
     * @param UntagResourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UntagResourceResponse
     */
    public function untagResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->tagKeys) {
            @$query['TagKeys'] = $request->tagKeys;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResource',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * One or more tag keys. Separate multiple tag keys with commas (,).
     * You need to specify only the tag keys, not the tag values.
     * Each tag key must be 1 to 128 bytes in length.
     *
     * @param request - UntagResourceRequest
     *
     * @returns UntagResourceResponse
     *
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
     * Removes tags from keys or secrets.
     *
     * @remarks
     * You can remove multiple tags from multiple keys or multiple secrets at a time. You cannot remove tags that start with aliyun or acs:.
     * If you enter multiple tag keys in the request parameters and only some of the tag keys are associated with resources, the operation can be called and the tags whose keys are associated with resources are removed from the resources.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from keys or secrets.
     *
     * @remarks
     * You can remove multiple tags from multiple keys or multiple secrets at a time. You cannot remove tags that start with aliyun or acs:.
     * If you enter multiple tag keys in the request parameters and only some of the tag keys are associated with resources, the operation can be called and the tags whose keys are associated with resources are removed from the resources.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAliasResponse
     *
     * @param UpdateAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAliasResponse
     */
    public function updateAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasName) {
            @$query['AliasName'] = $request->aliasName;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAlias',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAliasRequest
     *
     * @returns UpdateAliasResponse
     *
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
     * @remarks
     * The update takes effect immediately after an AAP information is updated. Exercise caution when you perform this operation. You can update the description of an AAP and the permission policies that are associated with the AAP. You cannot update the name of the AAP.
     *
     * @param request - UpdateApplicationAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationAccessPointResponse
     *
     * @param UpdateApplicationAccessPointRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateApplicationAccessPointResponse
     */
    public function updateApplicationAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->policies) {
            @$query['Policies'] = $request->policies;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationAccessPoint',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * The update takes effect immediately after an AAP information is updated. Exercise caution when you perform this operation. You can update the description of an AAP and the permission policies that are associated with the AAP. You cannot update the name of the AAP.
     *
     * @param request - UpdateApplicationAccessPointRequest
     *
     * @returns UpdateApplicationAccessPointResponse
     *
     * @param UpdateApplicationAccessPointRequest $request
     *
     * @return UpdateApplicationAccessPointResponse
     */
    public function updateApplicationAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationAccessPointWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * In this example, the status of the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is updated to INACTIVE.
     *
     * @param request - UpdateCertificateStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCertificateStatusResponse
     *
     * @param UpdateCertificateStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCertificateStatusResponse
     */
    public function updateCertificateStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCertificateStatus',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCertificateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * In this example, the status of the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is updated to INACTIVE.
     *
     * @param request - UpdateCertificateStatusRequest
     *
     * @returns UpdateCertificateStatusResponse
     *
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
     * 调用UpdateKeyDescription接口更新主密钥的描述信息。
     *
     * @remarks
     * This operation replaces the description of a customer master key (CMK) with the description that you specify. The original description of the CMK is specified by the Description parameter when you call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation. You can call this operation to add, modify, or delete the description of a CMK.
     *
     * @param request - UpdateKeyDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKeyDescriptionResponse
     *
     * @param UpdateKeyDescriptionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateKeyDescriptionResponse
     */
    public function updateKeyDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateKeyDescription',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateKeyDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用UpdateKeyDescription接口更新主密钥的描述信息。
     *
     * @remarks
     * This operation replaces the description of a customer master key (CMK) with the description that you specify. The original description of the CMK is specified by the Description parameter when you call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation. You can call this operation to add, modify, or delete the description of a CMK.
     *
     * @param request - UpdateKeyDescriptionRequest
     *
     * @returns UpdateKeyDescriptionResponse
     *
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
     * Updates the virtual private cloud (VPC) that is associated with a Key Management Service (KMS) instance.
     *
     * @remarks
     * If your own applications are deployed in multiple VPCs in the same region, you can associate the VPCs except the VPC in which the KMS instance resides with the KMS instance. This topic describes how to configure the VPCs.
     * The VPCs can belong to the same Alibaba Cloud account or different Alibaba Cloud accounts. After the configuration is complete, the applications in these VPCs can access the KMS instance.
     * > If the VPCs belong to different Alibaba Cloud accounts, you must first configure resource sharing to share the vSwitches of other Alibaba Cloud accounts with the Alibaba Cloud account to which the KMS instance belongs. For more information, see [Access a KMS instance from multiple VPCs in the same region](https://help.aliyun.com/document_detail/2393236.html).
     *
     * @param request - UpdateKmsInstanceBindVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKmsInstanceBindVpcResponse
     *
     * @param UpdateKmsInstanceBindVpcRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateKmsInstanceBindVpcResponse
     */
    public function updateKmsInstanceBindVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindVpcs) {
            @$query['BindVpcs'] = $request->bindVpcs;
        }

        if (null !== $request->kmsInstanceId) {
            @$query['KmsInstanceId'] = $request->kmsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateKmsInstanceBindVpc',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateKmsInstanceBindVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the virtual private cloud (VPC) that is associated with a Key Management Service (KMS) instance.
     *
     * @remarks
     * If your own applications are deployed in multiple VPCs in the same region, you can associate the VPCs except the VPC in which the KMS instance resides with the KMS instance. This topic describes how to configure the VPCs.
     * The VPCs can belong to the same Alibaba Cloud account or different Alibaba Cloud accounts. After the configuration is complete, the applications in these VPCs can access the KMS instance.
     * > If the VPCs belong to different Alibaba Cloud accounts, you must first configure resource sharing to share the vSwitches of other Alibaba Cloud accounts with the Alibaba Cloud account to which the KMS instance belongs. For more information, see [Access a KMS instance from multiple VPCs in the same region](https://help.aliyun.com/document_detail/2393236.html).
     *
     * @param request - UpdateKmsInstanceBindVpcRequest
     *
     * @returns UpdateKmsInstanceBindVpcResponse
     *
     * @param UpdateKmsInstanceBindVpcRequest $request
     *
     * @return UpdateKmsInstanceBindVpcResponse
     */
    public function updateKmsInstanceBindVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKmsInstanceBindVpcWithOptions($request, $runtime);
    }

    /**
     * Updates an access control rule.
     *
     * @remarks
     * - You can update only private IP addresses and description of an access control rule. You cannot update the name and network type of an access control rule.
     * - Updating an access control rule affects all permission policies that are bound to the access control rule. Exercise caution when you perform this operation.
     *
     * @param request - UpdateNetworkRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNetworkRuleResponse
     *
     * @param UpdateNetworkRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateNetworkRuleResponse
     */
    public function updateNetworkRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->sourcePrivateIp) {
            @$query['SourcePrivateIp'] = $request->sourcePrivateIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNetworkRule',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an access control rule.
     *
     * @remarks
     * - You can update only private IP addresses and description of an access control rule. You cannot update the name and network type of an access control rule.
     * - Updating an access control rule affects all permission policies that are bound to the access control rule. Exercise caution when you perform this operation.
     *
     * @param request - UpdateNetworkRuleRequest
     *
     * @returns UpdateNetworkRuleResponse
     *
     * @param UpdateNetworkRuleRequest $request
     *
     * @return UpdateNetworkRuleResponse
     */
    public function updateNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * 更新一个权限策略.
     *
     * @remarks
     * - You can update the role-based access control (RBAC) permissions, accessible resources, access control rules, and description of a permission policy. You cannot update the name or scope of a permission policy.
     * - Updating a permission policy affects all application access points (AAPs) that are bound to the permission policy. Exercise caution when you perform this operation.
     *
     * @param request - UpdatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyResponse
     *
     * @param UpdatePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessControlRules) {
            @$query['AccessControlRules'] = $request->accessControlRules;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->permissions) {
            @$query['Permissions'] = $request->permissions;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新一个权限策略.
     *
     * @remarks
     * - You can update the role-based access control (RBAC) permissions, accessible resources, access control rules, and description of a permission policy. You cannot update the name or scope of a permission policy.
     * - Updating a permission policy affects all application access points (AAPs) that are bound to the permission policy. Exercise caution when you perform this operation.
     *
     * @param request - UpdatePolicyRequest
     *
     * @returns UpdatePolicyResponse
     *
     * @param UpdatePolicyRequest $request
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * When automatic key rotation is enabled, KMS automatically creates a key version after the preset rotation period arrives. In addition, KMS sets the new key version as the primary key version.
     * An automatic key rotation policy cannot be configured for the following keys:
     * *   Asymmetric key
     * *   Service-managed key
     * *   Bring your own key (BYOK) that is imported into KMS
     * *   Key that is not in the **Enabled** state
     * In this example, automatic key rotation is enabled for a CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****`. The automatic rotation period is 30 days.
     *
     * @param request - UpdateRotationPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRotationPolicyResponse
     *
     * @param UpdateRotationPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRotationPolicyResponse
     */
    public function updateRotationPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableAutomaticRotation) {
            @$query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }

        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->rotationInterval) {
            @$query['RotationInterval'] = $request->rotationInterval;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRotationPolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRotationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * When automatic key rotation is enabled, KMS automatically creates a key version after the preset rotation period arrives. In addition, KMS sets the new key version as the primary key version.
     * An automatic key rotation policy cannot be configured for the following keys:
     * *   Asymmetric key
     * *   Service-managed key
     * *   Bring your own key (BYOK) that is imported into KMS
     * *   Key that is not in the **Enabled** state
     * In this example, automatic key rotation is enabled for a CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****`. The automatic rotation period is 30 days.
     *
     * @param request - UpdateRotationPolicyRequest
     *
     * @returns UpdateRotationPolicyResponse
     *
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
     * Updates the metadata of a secret.
     *
     * @remarks
     * In this example, the metadata of the `secret001` secret is updated. The `Description` parameter is set to `datainfo`.
     *
     * @param request - UpdateSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecretResponse
     *
     * @param UpdateSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSecretResponse
     */
    public function updateSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->extendedConfig) {
            @$query['ExtendedConfig'] = $request->extendedConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSecret',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the metadata of a secret.
     *
     * @remarks
     * In this example, the metadata of the `secret001` secret is updated. The `Description` parameter is set to `datainfo`.
     *
     * @param request - UpdateSecretRequest
     *
     * @returns UpdateSecretResponse
     *
     * @param UpdateSecretRequest $request
     *
     * @return UpdateSecretResponse
     */
    public function updateSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * After automatic rotation is enabled, Secrets Manager schedules the first automatic rotation by adding the preset rotation interval to the timestamp of the last rotation.
     * Limits: The UpdateSecretRotationPolicy operation cannot be used to update the rotation policy of generic secrets.
     * In this example, the rotation policy of the `RdsSecret/Mysql5.4/MyCred` secret is updated. The following settings are modified:
     * *   The `EnableAutomaticRotation` parameter is set to `true`, which indicates that automatic rotation is enabled.
     * *   The `RotationInterval` parameter is set to `30d`, which indicates that the interval for automatic rotation is 30 days.
     *
     * @param request - UpdateSecretRotationPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecretRotationPolicyResponse
     *
     * @param UpdateSecretRotationPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateSecretRotationPolicyResponse
     */
    public function updateSecretRotationPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableAutomaticRotation) {
            @$query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }

        if (null !== $request->rotationInterval) {
            @$query['RotationInterval'] = $request->rotationInterval;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSecretRotationPolicy',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSecretRotationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * After automatic rotation is enabled, Secrets Manager schedules the first automatic rotation by adding the preset rotation interval to the timestamp of the last rotation.
     * Limits: The UpdateSecretRotationPolicy operation cannot be used to update the rotation policy of generic secrets.
     * In this example, the rotation policy of the `RdsSecret/Mysql5.4/MyCred` secret is updated. The following settings are modified:
     * *   The `EnableAutomaticRotation` parameter is set to `true`, which indicates that automatic rotation is enabled.
     * *   The `RotationInterval` parameter is set to `30d`, which indicates that the interval for automatic rotation is 30 days.
     *
     * @param request - UpdateSecretRotationPolicyRequest
     *
     * @returns UpdateSecretRotationPolicyResponse
     *
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
     * UpdateSecretVersionStage.
     *
     * @remarks
     * Updates the stage label that marks a secret version.
     *
     * @param request - UpdateSecretVersionStageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecretVersionStageResponse
     *
     * @param UpdateSecretVersionStageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->moveToVersion) {
            @$query['MoveToVersion'] = $request->moveToVersion;
        }

        if (null !== $request->removeFromVersion) {
            @$query['RemoveFromVersion'] = $request->removeFromVersion;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->versionStage) {
            @$query['VersionStage'] = $request->versionStage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSecretVersionStage',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSecretVersionStageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpdateSecretVersionStage.
     *
     * @remarks
     * Updates the stage label that marks a secret version.
     *
     * @param request - UpdateSecretVersionStageRequest
     *
     * @returns UpdateSecretVersionStageResponse
     *
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
     * @remarks
     * In this example, a certificate issued by a CA is imported into Certificates Manager. The ID of the certificate in Certificates Manager is `12345678-1234-1234-1234-12345678****`.
     *
     * @param request - UploadCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadCertificateResponse
     *
     * @param UploadCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadCertificateResponse
     */
    public function uploadCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificate) {
            @$query['Certificate'] = $request->certificate;
        }

        if (null !== $request->certificateChain) {
            @$query['CertificateChain'] = $request->certificateChain;
        }

        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadCertificate',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * In this example, a certificate issued by a CA is imported into Certificates Manager. The ID of the certificate in Certificates Manager is `12345678-1234-1234-1234-12345678****`.
     *
     * @param request - UploadCertificateRequest
     *
     * @returns UploadCertificateResponse
     *
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
