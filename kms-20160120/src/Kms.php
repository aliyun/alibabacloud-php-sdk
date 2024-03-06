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
use AlibabaCloud\SDK\Kms\V20160120\Models\ConnectKmsInstanceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ConnectKmsInstanceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateAliasRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateAliasResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateApplicationAccessPointRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateApplicationAccessPointResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateCertificateRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateCertificateResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\CreateCertificateShrinkRequest;
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
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetParametersForImportRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetParametersForImportResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetPublicKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetPublicKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetRandomPasswordRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetRandomPasswordResponse;
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
use AlibabaCloud\SDK\Kms\V20160120\Models\RestoreSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\RestoreSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\RotateSecretRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\RotateSecretResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\ScheduleKeyDeletionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ScheduleKeyDeletionResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetDeletionProtectionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetDeletionProtectionResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayPop\Client as DarabonbaGatewayPopClient;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Kms extends OpenApiClient
{
    protected $_client;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId    = 'Kms';
        $this->_client       = new DarabonbaGatewayPopClient();
        $this->_spi          = $this->_client;
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
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table lists supported encryption algorithms.
     *   * | KeySpec | Algorithm | Description | Maximum length in bytes |
     *   * | ------- | --------- | ----------- | ----------------------- |
     *   * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 256 |
     *   * | RSA_2048 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 256 |
     *   * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 384 |
     *   * | RSA_3072 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 384 |
     *   * | EC_SM2 | SM2PKE | SM2 public key encryption algorithm based on elliptic curves | 6144 |
     *   * In this example, the asymmetric key whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the decryption algorithm `RSAES_OAEP_SHA_1` are used to decrypt the ciphertext `BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1W****==`.
     *   *
     * @param AsymmetricDecryptRequest $request AsymmetricDecryptRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AsymmetricDecryptResponse AsymmetricDecryptResponse
     */
    public function asymmetricDecryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keyVersionId)) {
            $query['KeyVersionId'] = $request->keyVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AsymmetricDecrypt',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AsymmetricDecryptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AsymmetricDecryptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table lists supported encryption algorithms.
     *   * | KeySpec | Algorithm | Description | Maximum length in bytes |
     *   * | ------- | --------- | ----------- | ----------------------- |
     *   * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 256 |
     *   * | RSA_2048 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 256 |
     *   * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 384 |
     *   * | RSA_3072 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 384 |
     *   * | EC_SM2 | SM2PKE | SM2 public key encryption algorithm based on elliptic curves | 6144 |
     *   * In this example, the asymmetric key whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the decryption algorithm `RSAES_OAEP_SHA_1` are used to decrypt the ciphertext `BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1W****==`.
     *   *
     * @param AsymmetricDecryptRequest $request AsymmetricDecryptRequest
     *
     * @return AsymmetricDecryptResponse AsymmetricDecryptResponse
     */
    public function asymmetricDecrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricDecryptWithOptions($request, $runtime);
    }

    /**
     * This operation is supported only for asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table lists the supported encryption algorithms:
     *   * | KeySpec | Algorithm | Description | Maximum number of bytes that can be encrypted |
     *   * | ------- | --------- | ----------- | --------------------------------------------- |
     *   * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 190 |
     *   * | RSA_2048 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 214 |
     *   * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 318 |
     *   * | RSA_3072 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 342 |
     *   * | EC_SM2 | SM2PKE | SM2 public key encryption algorithm based on elliptic curves | 6047 |
     *   * You can use the asymmetric CMK whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the algorithm `RSAES_OAEP_SHA_1` to encrypt the plaintext `SGVsbG8gd29ybGQ=` based on the parameter settings provided in this topic.
     *   *
     * @param AsymmetricEncryptRequest $request AsymmetricEncryptRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AsymmetricEncryptResponse AsymmetricEncryptResponse
     */
    public function asymmetricEncryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keyVersionId)) {
            $query['KeyVersionId'] = $request->keyVersionId;
        }
        if (!Utils::isUnset($request->plaintext)) {
            $query['Plaintext'] = $request->plaintext;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AsymmetricEncrypt',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AsymmetricEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AsymmetricEncryptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation is supported only for asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table lists the supported encryption algorithms:
     *   * | KeySpec | Algorithm | Description | Maximum number of bytes that can be encrypted |
     *   * | ------- | --------- | ----------- | --------------------------------------------- |
     *   * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 190 |
     *   * | RSA_2048 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 214 |
     *   * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256 | 318 |
     *   * | RSA_3072 | RSAES_OAEP_SHA_1 | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 342 |
     *   * | EC_SM2 | SM2PKE | SM2 public key encryption algorithm based on elliptic curves | 6047 |
     *   * You can use the asymmetric CMK whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the algorithm `RSAES_OAEP_SHA_1` to encrypt the plaintext `SGVsbG8gd29ybGQ=` based on the parameter settings provided in this topic.
     *   *
     * @param AsymmetricEncryptRequest $request AsymmetricEncryptRequest
     *
     * @return AsymmetricEncryptResponse AsymmetricEncryptResponse
     */
    public function asymmetricEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricEncryptWithOptions($request, $runtime);
    }

    /**
     * Generates a signature by using an asymmetric key.
     *   *
     * @param AsymmetricSignRequest $request AsymmetricSignRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AsymmetricSignResponse AsymmetricSignResponse
     */
    public function asymmetricSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->digest)) {
            $query['Digest'] = $request->digest;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keyVersionId)) {
            $query['KeyVersionId'] = $request->keyVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AsymmetricSign',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AsymmetricSignResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AsymmetricSignResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Generates a signature by using an asymmetric key.
     *   *
     * @param AsymmetricSignRequest $request AsymmetricSignRequest
     *
     * @return AsymmetricSignResponse AsymmetricSignResponse
     */
    public function asymmetricSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricSignWithOptions($request, $runtime);
    }

    /**
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **SIGN/VERIFY**. The following table describes the supported signature algorithms.
     *   * | KeySpec | Algorithm | Description |
     *   * | ------- | --------- | ----------- |
     *   * | RSA_2048 | RSA_PSS_SHA_256 | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |
     *   * | RSA_2048 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256 |
     *   * | RSA_3072 | RSA_PSS_SHA_256 | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |
     *   * | RSA_3072 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256 |
     *   * | EC_P256 | ECDSA_SHA_256 | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest |
     *   * | EC_P256K | ECDSA_SHA_256 | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |
     *   * | EC_SM2 | SM2DSA | SM2 elliptic curve public key encryption algorithm |
     *   * >  When you calculate the SM2 signature based on GB/T 32918, the **Digest** parameter is used to calculate the digest value of the combination of Z(A) and M, rather than the SM3 digest value. M indicates the original message to be signed. Z(A) indicates the hash value for User A. The hash value is defined in GB/T 32918.  In this example, the asymmetric key whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the signature algorithm RSA_PSS_SHA_256 are used to verify the signature `M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==` of the digest `ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuyjfzw=`.
     *   *
     * @param AsymmetricVerifyRequest $request AsymmetricVerifyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AsymmetricVerifyResponse AsymmetricVerifyResponse
     */
    public function asymmetricVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->digest)) {
            $query['Digest'] = $request->digest;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keyVersionId)) {
            $query['KeyVersionId'] = $request->keyVersionId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AsymmetricVerify',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AsymmetricVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AsymmetricVerifyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **SIGN/VERIFY**. The following table describes the supported signature algorithms.
     *   * | KeySpec | Algorithm | Description |
     *   * | ------- | --------- | ----------- |
     *   * | RSA_2048 | RSA_PSS_SHA_256 | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |
     *   * | RSA_2048 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256 |
     *   * | RSA_3072 | RSA_PSS_SHA_256 | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |
     *   * | RSA_3072 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256 |
     *   * | EC_P256 | ECDSA_SHA_256 | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest |
     *   * | EC_P256K | ECDSA_SHA_256 | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |
     *   * | EC_SM2 | SM2DSA | SM2 elliptic curve public key encryption algorithm |
     *   * >  When you calculate the SM2 signature based on GB/T 32918, the **Digest** parameter is used to calculate the digest value of the combination of Z(A) and M, rather than the SM3 digest value. M indicates the original message to be signed. Z(A) indicates the hash value for User A. The hash value is defined in GB/T 32918.  In this example, the asymmetric key whose ID is `5c438b18-05be-40ad-b6c2-3be6752c****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` and the signature algorithm RSA_PSS_SHA_256 are used to verify the signature `M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==` of the digest `ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuyjfzw=`.
     *   *
     * @param AsymmetricVerifyRequest $request AsymmetricVerifyRequest
     *
     * @return AsymmetricVerifyResponse AsymmetricVerifyResponse
     */
    public function asymmetricVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asymmetricVerifyWithOptions($request, $runtime);
    }

    /**
     * If the deletion task of a CMK is canceled, the CMK returns to the Enabled state.
     *   *
     * @param CancelKeyDeletionRequest $request CancelKeyDeletionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelKeyDeletionResponse CancelKeyDeletionResponse
     */
    public function cancelKeyDeletionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelKeyDeletion',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelKeyDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelKeyDeletionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If the deletion task of a CMK is canceled, the CMK returns to the Enabled state.
     *   *
     * @param CancelKeyDeletionRequest $request CancelKeyDeletionRequest
     *
     * @return CancelKeyDeletionResponse CancelKeyDeletionResponse
     */
    public function cancelKeyDeletion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelKeyDeletionWithOptions($request, $runtime);
    }

    /**
     * Limit: The encryption algorithm in the request parameters must match the key type.
     *   * The following table describes the mapping between encryption algorithms and key types.
     *   * | Algorithm | Key Spec |
     *   * | --------- | -------- |
     *   * | RSAES_OAEP_SHA_1 | RSA_2048 |
     *   * | RSAES_OAEP_SHA_256 | RSA_2048 |
     *   * | SM2PKE | EC_SM2 |
     *   * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the encryption algorithm `RSAES_OAEP_SHA_256` are used to decrypt the data `ZOyIygCyaOW6Gj****MlNKiuyjfzw=`.
     *   *
     * @param CertificatePrivateKeyDecryptRequest $request CertificatePrivateKeyDecryptRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CertificatePrivateKeyDecryptResponse CertificatePrivateKeyDecryptResponse
     */
    public function certificatePrivateKeyDecryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CertificatePrivateKeyDecrypt',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CertificatePrivateKeyDecryptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CertificatePrivateKeyDecryptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Limit: The encryption algorithm in the request parameters must match the key type.
     *   * The following table describes the mapping between encryption algorithms and key types.
     *   * | Algorithm | Key Spec |
     *   * | --------- | -------- |
     *   * | RSAES_OAEP_SHA_1 | RSA_2048 |
     *   * | RSAES_OAEP_SHA_256 | RSA_2048 |
     *   * | SM2PKE | EC_SM2 |
     *   * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the encryption algorithm `RSAES_OAEP_SHA_256` are used to decrypt the data `ZOyIygCyaOW6Gj****MlNKiuyjfzw=`.
     *   *
     * @param CertificatePrivateKeyDecryptRequest $request CertificatePrivateKeyDecryptRequest
     *
     * @return CertificatePrivateKeyDecryptResponse CertificatePrivateKeyDecryptResponse
     */
    public function certificatePrivateKeyDecrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificatePrivateKeyDecryptWithOptions($request, $runtime);
    }

    /**
     * The signature algorithm in the request parameters must match the key type. The following table describes the mapping between signature algorithms and key types.
     *   * | Algorithm | Key Spec |
     *   * | --------- | -------- |
     *   * | RSA_PKCS1_SHA_256 | RSA_2048 |
     *   * | RSA_PSS_SHA_256 | RSA_2048 |
     *   * | ECDSA_SHA_256 | EC_P256 |
     *   * | SM2DSA | EC_SM2 |
     *   * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the signature algorithm `ECDSA_SHA_256` are used to generate a signature for the raw data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *   *
     * @param CertificatePrivateKeySignRequest $request CertificatePrivateKeySignRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CertificatePrivateKeySignResponse CertificatePrivateKeySignResponse
     */
    public function certificatePrivateKeySignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->messageType)) {
            $query['MessageType'] = $request->messageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CertificatePrivateKeySign',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CertificatePrivateKeySignResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CertificatePrivateKeySignResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The signature algorithm in the request parameters must match the key type. The following table describes the mapping between signature algorithms and key types.
     *   * | Algorithm | Key Spec |
     *   * | --------- | -------- |
     *   * | RSA_PKCS1_SHA_256 | RSA_2048 |
     *   * | RSA_PSS_SHA_256 | RSA_2048 |
     *   * | ECDSA_SHA_256 | EC_P256 |
     *   * | SM2DSA | EC_SM2 |
     *   * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the signature algorithm `ECDSA_SHA_256` are used to generate a signature for the raw data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *   *
     * @param CertificatePrivateKeySignRequest $request CertificatePrivateKeySignRequest
     *
     * @return CertificatePrivateKeySignResponse CertificatePrivateKeySignResponse
     */
    public function certificatePrivateKeySign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificatePrivateKeySignWithOptions($request, $runtime);
    }

    /**
     * Limit: The encryption algorithm in the request parameters must match the key type.
     *   * The following table describes the mapping between encryption algorithms and key types.
     *   * | Algorithm | Key Spec |
     *   * | --------- | -------- |
     *   * | RSAES_OAEP_SHA_1 | RSA_2048 |
     *   * | RSAES_OAEP_SHA_256 | RSA_2048 |
     *   * | SM2PKE | EC_SM2 |
     *   * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the encryption algorithm `RSAES_OAEP_SHA_256` are used to encrypt the data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *   *
     * @param CertificatePublicKeyEncryptRequest $request CertificatePublicKeyEncryptRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CertificatePublicKeyEncryptResponse CertificatePublicKeyEncryptResponse
     */
    public function certificatePublicKeyEncryptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->plaintext)) {
            $query['Plaintext'] = $request->plaintext;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CertificatePublicKeyEncrypt',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CertificatePublicKeyEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CertificatePublicKeyEncryptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Limit: The encryption algorithm in the request parameters must match the key type.
     *   * The following table describes the mapping between encryption algorithms and key types.
     *   * | Algorithm | Key Spec |
     *   * | --------- | -------- |
     *   * | RSAES_OAEP_SHA_1 | RSA_2048 |
     *   * | RSAES_OAEP_SHA_256 | RSA_2048 |
     *   * | SM2PKE | EC_SM2 |
     *   * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the encryption algorithm `RSAES_OAEP_SHA_256` are used to encrypt the data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *   *
     * @param CertificatePublicKeyEncryptRequest $request CertificatePublicKeyEncryptRequest
     *
     * @return CertificatePublicKeyEncryptResponse CertificatePublicKeyEncryptResponse
     */
    public function certificatePublicKeyEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificatePublicKeyEncryptWithOptions($request, $runtime);
    }

    /**
     * The signature algorithm in the request parameters must match the key type. The following table describes the mapping between signature algorithms and key types.
     *   * | Algorithm | Key Spec |
     *   * | --------- | -------- |
     *   * | RSA_PKCS1_SHA_256 | RSA_2048 |
     *   * | RSA_PSS_SHA_256 | RSA_2048 |
     *   * | ECDSA_SHA_256 | EC_P256 |
     *   * | SM2DSA | EC_SM2 |
     *   * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the signature algorithm `ECDSA_SHA_256` are used to verify the digital signature `ZOyIygCyaOW6Gj****MlNKiuyjfzw=` of the raw data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *   *
     * @param CertificatePublicKeyVerifyRequest $request CertificatePublicKeyVerifyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CertificatePublicKeyVerifyResponse CertificatePublicKeyVerifyResponse
     */
    public function certificatePublicKeyVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithm)) {
            $query['Algorithm'] = $request->algorithm;
        }
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->messageType)) {
            $query['MessageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->signatureValue)) {
            $query['SignatureValue'] = $request->signatureValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CertificatePublicKeyVerify',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CertificatePublicKeyVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CertificatePublicKeyVerifyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The signature algorithm in the request parameters must match the key type. The following table describes the mapping between signature algorithms and key types.
     *   * | Algorithm | Key Spec |
     *   * | --------- | -------- |
     *   * | RSA_PKCS1_SHA_256 | RSA_2048 |
     *   * | RSA_PSS_SHA_256 | RSA_2048 |
     *   * | ECDSA_SHA_256 | EC_P256 |
     *   * | SM2DSA | EC_SM2 |
     *   * In this example, the certificate whose ID is `12345678-1234-1234-1234-12345678****` and the signature algorithm `ECDSA_SHA_256` are used to verify the digital signature `ZOyIygCyaOW6Gj****MlNKiuyjfzw=` of the raw data `VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`.
     *   *
     * @param CertificatePublicKeyVerifyRequest $request CertificatePublicKeyVerifyRequest
     *
     * @return CertificatePublicKeyVerifyResponse CertificatePublicKeyVerifyResponse
     */
    public function certificatePublicKeyVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->certificatePublicKeyVerifyWithOptions($request, $runtime);
    }

    /**
     * ### [](#)Limits
     *   * You can enable only instances of the software key management type. You cannot enable instances of the hardware key management type.
     *   *
     * @param ConnectKmsInstanceRequest $request ConnectKmsInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ConnectKmsInstanceResponse ConnectKmsInstanceResponse
     */
    public function connectKmsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->KMProvider)) {
            $query['KMProvider'] = $request->KMProvider;
        }
        if (!Utils::isUnset($request->kmsInstanceId)) {
            $query['KmsInstanceId'] = $request->kmsInstanceId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneIds)) {
            $query['ZoneIds'] = $request->zoneIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConnectKmsInstance',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConnectKmsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConnectKmsInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * ### [](#)Limits
     *   * You can enable only instances of the software key management type. You cannot enable instances of the hardware key management type.
     *   *
     * @param ConnectKmsInstanceRequest $request ConnectKmsInstanceRequest
     *
     * @return ConnectKmsInstanceResponse ConnectKmsInstanceResponse
     */
    public function connectKmsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->connectKmsInstanceWithOptions($request, $runtime);
    }

    /**
     * *   Each alias can be bound to only one CMK at a time.
     *   * *   The aliases of CMKs in the same region must be unique.
     *   * In this topic, an alias named `alias/example` is created for a CMK named `7906979c-8e06-46a2-be2d-68e3ccbc****`.
     *   *
     * @param CreateAliasRequest $request CreateAliasRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAliasResponse CreateAliasResponse
     */
    public function createAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAlias',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAliasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * *   Each alias can be bound to only one CMK at a time.
     *   * *   The aliases of CMKs in the same region must be unique.
     *   * In this topic, an alias named `alias/example` is created for a CMK named `7906979c-8e06-46a2-be2d-68e3ccbc****`.
     *   *
     * @param CreateAliasRequest $request CreateAliasRequest
     *
     * @return CreateAliasResponse CreateAliasResponse
     */
    public function createAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAliasWithOptions($request, $runtime);
    }

    /**
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based AAP:
     *   * 1.Create a network access rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access KMS. For more information, see [CreateNetworkRule](~~2539407~~).
     *   * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind network access rules to the keys and secrets. For more information, see [CreatePolicy](~~2539454~~).
     *   * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. This topic describes how to create an AAP.
     *   * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](~~2539509~~).
     *   *
     * @param CreateApplicationAccessPointRequest $request CreateApplicationAccessPointRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationAccessPointResponse CreateApplicationAccessPointResponse
     */
    public function createApplicationAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authenticationMethod)) {
            $query['AuthenticationMethod'] = $request->authenticationMethod;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policies)) {
            $query['Policies'] = $request->policies;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplicationAccessPoint',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateApplicationAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateApplicationAccessPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based AAP:
     *   * 1.Create a network access rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access KMS. For more information, see [CreateNetworkRule](~~2539407~~).
     *   * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind network access rules to the keys and secrets. For more information, see [CreatePolicy](~~2539454~~).
     *   * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. This topic describes how to create an AAP.
     *   * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](~~2539509~~).
     *   *
     * @param CreateApplicationAccessPointRequest $request CreateApplicationAccessPointRequest
     *
     * @return CreateApplicationAccessPointResponse CreateApplicationAccessPointResponse
     */
    public function createApplicationAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationAccessPointWithOptions($request, $runtime);
    }

    /**
     * To create a certificate, you must specify the type of the asymmetric key. Certificates Manager generates a private key and returns a certificate signing request (CSR). Submit the CSR in the Privacy Enhanced Mail (PEM) format to a certificate authority (CA) to obtain the formal certificate and certificate chain. Then, call the [UploadCertificate](~~212136~~) operation to import the certificate into Certificates Manager.
     *   * In this example, a certificate is created and the CSR is obtained.
     *   *
     * @param CreateCertificateRequest $tmpReq  CreateCertificateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCertificateResponse CreateCertificateResponse
     */
    public function createCertificateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCertificateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->subjectAlternativeNames)) {
            $request->subjectAlternativeNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subjectAlternativeNames, 'SubjectAlternativeNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->exportablePrivateKey)) {
            $query['ExportablePrivateKey'] = $request->exportablePrivateKey;
        }
        if (!Utils::isUnset($request->keySpec)) {
            $query['KeySpec'] = $request->keySpec;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->subjectAlternativeNamesShrink)) {
            $query['SubjectAlternativeNames'] = $request->subjectAlternativeNamesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCertificate',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * To create a certificate, you must specify the type of the asymmetric key. Certificates Manager generates a private key and returns a certificate signing request (CSR). Submit the CSR in the Privacy Enhanced Mail (PEM) format to a certificate authority (CA) to obtain the formal certificate and certificate chain. Then, call the [UploadCertificate](~~212136~~) operation to import the certificate into Certificates Manager.
     *   * In this example, a certificate is created and the CSR is obtained.
     *   *
     * @param CreateCertificateRequest $request CreateCertificateRequest
     *
     * @return CreateCertificateResponse CreateCertificateResponse
     */
    public function createCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithOptions($request, $runtime);
    }

    /**
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based application access point (AAP):
     *   * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance. For more information, see [CreateNetworkRule](~~2539407~~).
     *   * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets. For more information, see [CreatePolicy](~~2539454~~).
     *   * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](~~2539467~~).
     *   * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP.
     *   * ### Precautions
     *   * A client key has a validity period. After a client key expires, applications into which the client key is integrated cannot access the required KMS instance. You must replace the client key before the client key expires. We recommend that you delete the expired client key in KMS after the new client key is used.
     *   *
     * @param CreateClientKeyRequest $request CreateClientKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClientKeyResponse CreateClientKeyResponse
     */
    public function createClientKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aapName)) {
            $query['AapName'] = $request->aapName;
        }
        if (!Utils::isUnset($request->notAfter)) {
            $query['NotAfter'] = $request->notAfter;
        }
        if (!Utils::isUnset($request->notBefore)) {
            $query['NotBefore'] = $request->notBefore;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClientKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateClientKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClientKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based application access point (AAP):
     *   * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance. For more information, see [CreateNetworkRule](~~2539407~~).
     *   * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets. For more information, see [CreatePolicy](~~2539454~~).
     *   * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](~~2539467~~).
     *   * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP.
     *   * ### Precautions
     *   * A client key has a validity period. After a client key expires, applications into which the client key is integrated cannot access the required KMS instance. You must replace the client key before the client key expires. We recommend that you delete the expired client key in KMS after the new client key is used.
     *   *
     * @param CreateClientKeyRequest $request CreateClientKeyRequest
     *
     * @return CreateClientKeyResponse CreateClientKeyResponse
     */
    public function createClientKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientKeyWithOptions($request, $runtime);
    }

    /**
     * KMS supports common symmetric keys and asymmetric keys. For more information, see [Key types and specifications](~~480161~~).
     *   *
     * @param CreateKeyRequest $request CreateKeyRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKeyResponse CreateKeyResponse
     */
    public function createKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DKMSInstanceId)) {
            $query['DKMSInstanceId'] = $request->DKMSInstanceId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableAutomaticRotation)) {
            $query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }
        if (!Utils::isUnset($request->keySpec)) {
            $query['KeySpec'] = $request->keySpec;
        }
        if (!Utils::isUnset($request->keyUsage)) {
            $query['KeyUsage'] = $request->keyUsage;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['Origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->protectionLevel)) {
            $query['ProtectionLevel'] = $request->protectionLevel;
        }
        if (!Utils::isUnset($request->rotationInterval)) {
            $query['RotationInterval'] = $request->rotationInterval;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * KMS supports common symmetric keys and asymmetric keys. For more information, see [Key types and specifications](~~480161~~).
     *   *
     * @param CreateKeyRequest $request CreateKeyRequest
     *
     * @return CreateKeyResponse CreateKeyResponse
     */
    public function createKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyWithOptions($request, $runtime);
    }

    /**
     * *   You can create a version only for an asymmetric CMK that is in the Enabled state. You can call the [CreateKey](~~28947~~) operation to create an asymmetric CMK and the [DescribeKey](~~28952~~) operation to query the status of the CMK. The status is specified by the KeyState parameter.
     *   * *   The minimum interval for creating a version of the same CMK is seven days. You can call the [DescribeKey](~~28952~~) operation to query the time when the last version of a CMK was created. The time is specified by the LastRotationDate parameter.
     *   * *   If a CMK is in a private key store, you cannot create a version for the CMK.
     *   * *   You can create a maximum of 50 versions for a CMK in the same region.
     *   * You can create a version for the CMK whose ID is `0b30658a-ed1a-4922-b8f7-a673ca9c****` by using the parameter settings provided in this topic.
     *   *
     * @param CreateKeyVersionRequest $request CreateKeyVersionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKeyVersionResponse CreateKeyVersionResponse
     */
    public function createKeyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKeyVersion',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateKeyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateKeyVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * *   You can create a version only for an asymmetric CMK that is in the Enabled state. You can call the [CreateKey](~~28947~~) operation to create an asymmetric CMK and the [DescribeKey](~~28952~~) operation to query the status of the CMK. The status is specified by the KeyState parameter.
     *   * *   The minimum interval for creating a version of the same CMK is seven days. You can call the [DescribeKey](~~28952~~) operation to query the time when the last version of a CMK was created. The time is specified by the LastRotationDate parameter.
     *   * *   If a CMK is in a private key store, you cannot create a version for the CMK.
     *   * *   You can create a maximum of 50 versions for a CMK in the same region.
     *   * You can create a version for the CMK whose ID is `0b30658a-ed1a-4922-b8f7-a673ca9c****` by using the parameter settings provided in this topic.
     *   *
     * @param CreateKeyVersionRequest $request CreateKeyVersionRequest
     *
     * @return CreateKeyVersionResponse CreateKeyVersionResponse
     */
    public function createKeyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyVersionWithOptions($request, $runtime);
    }

    /**
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a KMS instance. The following process shows how to create a client key-based application access point (AAP):
     *   * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance.
     *   * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets. For more information, see [CreatePolicy](~~2539454~~).
     *   * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](~~2539467~~).
     *   * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](~~2539509~~).
     *   *
     * @param CreateNetworkRuleRequest $request CreateNetworkRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkRuleResponse CreateNetworkRuleResponse
     */
    public function createNetworkRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourcePrivateIp)) {
            $query['SourcePrivateIp'] = $request->sourcePrivateIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkRule',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNetworkRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a KMS instance. The following process shows how to create a client key-based application access point (AAP):
     *   * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance.
     *   * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets. For more information, see [CreatePolicy](~~2539454~~).
     *   * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](~~2539467~~).
     *   * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](~~2539509~~).
     *   *
     * @param CreateNetworkRuleRequest $request CreateNetworkRuleRequest
     *
     * @return CreateNetworkRuleResponse CreateNetworkRuleResponse
     */
    public function createNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based application access point (AAP):
     *   * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance. For more information, see [CreateNetworkRule](~~2539407~~).
     *   * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets.
     *   * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](~~2539467~~).
     *   * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](~~2539509~~).
     *   *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessControlRules)) {
            $query['AccessControlRules'] = $request->accessControlRules;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->kmsInstance)) {
            $query['KmsInstance'] = $request->kmsInstance;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->permissions)) {
            $query['Permissions'] = $request->permissions;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicy',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * To perform cryptographic operations and retrieve secret values, self-managed applications must use a client key to access a Key Management Service (KMS) instance. The following process shows how to create a client key-based application access point (AAP):
     *   * 1.Create an access control rule: You can configure the private IP addresses or private CIDR blocks that are allowed to access a KMS instance. For more information, see [CreateNetworkRule](~~2539407~~).
     *   * 2.Create a permission policy: You can configure the keys and secrets that are allowed to access and bind access control rules to the keys and secrets.
     *   * 3.Create an AAP: You can configure an authentication method and bind a permission policy to an AAP. For more information, see [CreateApplicationAccessPoint](~~2539467~~).
     *   * 4.Create a client key: You can configure the encryption password and validity period of a client key and bind the client key to an AAP. For more information, see [CreateClientKey](~~2539509~~).
     *   *
     * @param CreatePolicyRequest $request CreatePolicyRequest
     *
     * @return CreatePolicyResponse CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * The name of the secret.
     *   * The value must be 1 to 64 characters in length and can contain letters, digits, underscores (\\_), forward slashes (/), plus signs (+), equal signs (=), periods (.), hyphens (-), and at signs (@). The following list describes the name requirements for different types of secrets:
     *   * *   If the SecretType parameter is set to Generic or Rds, the name cannot start with `acs/`.
     *   * *   If the SecretType parameter is set to RAMCredentials, set the SecretName parameter to `$Auto`. In this case, KMS automatically generates a secret name that starts with `acs/ram/user/`. The name includes the display name of RAM user.
     *   * *   If the SecretType parameter is set to ECS, the name must start with `acs/ecs/`.
     *   *
     * @param CreateSecretRequest $tmpReq  CreateSecretRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSecretResponse CreateSecretResponse
     */
    public function createSecretWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSecretShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendedConfig)) {
            $request->extendedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendedConfig, 'ExtendedConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->DKMSInstanceId)) {
            $query['DKMSInstanceId'] = $request->DKMSInstanceId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableAutomaticRotation)) {
            $query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }
        if (!Utils::isUnset($request->encryptionKeyId)) {
            $query['EncryptionKeyId'] = $request->encryptionKeyId;
        }
        if (!Utils::isUnset($request->extendedConfigShrink)) {
            $query['ExtendedConfig'] = $request->extendedConfigShrink;
        }
        if (!Utils::isUnset($request->rotationInterval)) {
            $query['RotationInterval'] = $request->rotationInterval;
        }
        if (!Utils::isUnset($request->secretData)) {
            $query['SecretData'] = $request->secretData;
        }
        if (!Utils::isUnset($request->secretDataType)) {
            $query['SecretDataType'] = $request->secretDataType;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->secretType)) {
            $query['SecretType'] = $request->secretType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecret',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The name of the secret.
     *   * The value must be 1 to 64 characters in length and can contain letters, digits, underscores (\\_), forward slashes (/), plus signs (+), equal signs (=), periods (.), hyphens (-), and at signs (@). The following list describes the name requirements for different types of secrets:
     *   * *   If the SecretType parameter is set to Generic or Rds, the name cannot start with `acs/`.
     *   * *   If the SecretType parameter is set to RAMCredentials, set the SecretName parameter to `$Auto`. In this case, KMS automatically generates a secret name that starts with `acs/ram/user/`. The name includes the display name of RAM user.
     *   * *   If the SecretType parameter is set to ECS, the name must start with `acs/ecs/`.
     *   *
     * @param CreateSecretRequest $request CreateSecretRequest
     *
     * @return CreateSecretResponse CreateSecretResponse
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
        $query = [];
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        if (!Utils::isUnset($request->encryptionContextShrink)) {
            $query['EncryptionContext'] = $request->encryptionContextShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Decrypt',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DecryptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DecryptResponse::fromMap($this->execute($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlias',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAliasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAliasResponse::fromMap($this->execute($params, $req, $runtime));
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
     * Before you delete an AAP, make sure that the AAP is no longer in use. If you delete an AAP that is in use, applications that use the AAP cannot access Key Management Service (KMS). Exercise caution when you delete an AAP.
     *   *
     * @param DeleteApplicationAccessPointRequest $request DeleteApplicationAccessPointRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationAccessPointResponse DeleteApplicationAccessPointResponse
     */
    public function deleteApplicationAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplicationAccessPoint',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteApplicationAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteApplicationAccessPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Before you delete an AAP, make sure that the AAP is no longer in use. If you delete an AAP that is in use, applications that use the AAP cannot access Key Management Service (KMS). Exercise caution when you delete an AAP.
     *   *
     * @param DeleteApplicationAccessPointRequest $request DeleteApplicationAccessPointRequest
     *
     * @return DeleteApplicationAccessPointResponse DeleteApplicationAccessPointResponse
     */
    public function deleteApplicationAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationAccessPointWithOptions($request, $runtime);
    }

    /**
     * After the certificate and its private key and certificate chain are deleted, they cannot be restored. Proceed with caution.
     *   * In this example, the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` and its private key and certificate chain are deleted.
     *   *
     * @param DeleteCertificateRequest $request DeleteCertificateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCertificateResponse DeleteCertificateResponse
     */
    public function deleteCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCertificate',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * After the certificate and its private key and certificate chain are deleted, they cannot be restored. Proceed with caution.
     *   * In this example, the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` and its private key and certificate chain are deleted.
     *   *
     * @param DeleteCertificateRequest $request DeleteCertificateRequest
     *
     * @return DeleteCertificateResponse DeleteCertificateResponse
     */
    public function deleteCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCertificateWithOptions($request, $runtime);
    }

    /**
     * Before you delete a client key, make sure that the client key is no longer in use. If you delete a client key that is in use, applications that use the client key cannot access Key Management Service (KMS). Exercise caution when you delete a client key.
     *   *
     * @param DeleteClientKeyRequest $request DeleteClientKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClientKeyResponse DeleteClientKeyResponse
     */
    public function deleteClientKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientKeyId)) {
            $query['ClientKeyId'] = $request->clientKeyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClientKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteClientKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClientKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Before you delete a client key, make sure that the client key is no longer in use. If you delete a client key that is in use, applications that use the client key cannot access Key Management Service (KMS). Exercise caution when you delete a client key.
     *   *
     * @param DeleteClientKeyRequest $request DeleteClientKeyRequest
     *
     * @return DeleteClientKeyResponse DeleteClientKeyResponse
     */
    public function deleteClientKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientKeyWithOptions($request, $runtime);
    }

    /**
     * This operation does not delete the CMK that is created by using the key material.
     *   * If the CMK is in the PendingDeletion state, the state of the CMK and the scheduled deletion time do not change after you call this operation. If the CMK is not in the PendingDeletion state, the state of the CMK changes to PendingImport after you call this operation.
     *   * After you delete the key material, you can upload only the same key material into the CMK.
     *   *
     * @param DeleteKeyMaterialRequest $request DeleteKeyMaterialRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKeyMaterialResponse DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteKeyMaterial',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteKeyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKeyMaterialResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation does not delete the CMK that is created by using the key material.
     *   * If the CMK is in the PendingDeletion state, the state of the CMK and the scheduled deletion time do not change after you call this operation. If the CMK is not in the PendingDeletion state, the state of the CMK changes to PendingImport after you call this operation.
     *   * After you delete the key material, you can upload only the same key material into the CMK.
     *   *
     * @param DeleteKeyMaterialRequest $request DeleteKeyMaterialRequest
     *
     * @return DeleteKeyMaterialResponse DeleteKeyMaterialResponse
     */
    public function deleteKeyMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyMaterialWithOptions($request, $runtime);
    }

    /**
     * Before you delete a network access rule, make sure that the network access rule is not bound to permission policies. Otherwise, related applications cannot access Key Management Service (KMS).
     *   *
     * @param DeleteNetworkRuleRequest $request DeleteNetworkRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkRuleResponse DeleteNetworkRuleResponse
     */
    public function deleteNetworkRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkRule',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNetworkRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Before you delete a network access rule, make sure that the network access rule is not bound to permission policies. Otherwise, related applications cannot access Key Management Service (KMS).
     *   *
     * @param DeleteNetworkRuleRequest $request DeleteNetworkRuleRequest
     *
     * @return DeleteNetworkRuleResponse DeleteNetworkRuleResponse
     */
    public function deleteNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * Before you delete a permission policy, make sure that the permission policy is not associated with application access points (AAPs). Otherwise, related applications cannot access Key Management Service (KMS).
     *   *
     * @param DeletePolicyRequest $request DeletePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicy',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Before you delete a permission policy, make sure that the permission policy is not associated with application access points (AAPs). Otherwise, related applications cannot access Key Management Service (KMS).
     *   *
     * @param DeletePolicyRequest $request DeletePolicyRequest
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * If you call this operation without specifying a recovery period, the deleted secret can be recovered within 30 days.
     *   * If you specify a recovery period, the deleted secret can be recovered within the recovery period. You can also forcibly delete a secret. A forcibly deleted secret cannot be recovered.
     *   *
     * @param DeleteSecretRequest $request DeleteSecretRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecretResponse DeleteSecretResponse
     */
    public function deleteSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceDeleteWithoutRecovery)) {
            $query['ForceDeleteWithoutRecovery'] = $request->forceDeleteWithoutRecovery;
        }
        if (!Utils::isUnset($request->recoveryWindowInDays)) {
            $query['RecoveryWindowInDays'] = $request->recoveryWindowInDays;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecret',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you call this operation without specifying a recovery period, the deleted secret can be recovered within 30 days.
     *   * If you specify a recovery period, the deleted secret can be recovered within the recovery period. You can also forcibly delete a secret. A forcibly deleted secret cannot be recovered.
     *   *
     * @param DeleteSecretRequest $request DeleteSecretRequest
     *
     * @return DeleteSecretResponse DeleteSecretResponse
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
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAccountKmsStatus',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeAccountKmsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAccountKmsStatusResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @param DescribeApplicationAccessPointRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeApplicationAccessPointResponse
     */
    public function describeApplicationAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationAccessPoint',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeApplicationAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeApplicationAccessPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * In this example, the information about the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is queried. The certificate information includes the certificate ID, creation time, certificate issuer, validity period, serial number, and signature algorithm.
     *   *
     * @param DescribeCertificateRequest $request DescribeCertificateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCertificateResponse DescribeCertificateResponse
     */
    public function describeCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCertificate',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * In this example, the information about the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is queried. The certificate information includes the certificate ID, creation time, certificate issuer, validity period, serial number, and signature algorithm.
     *   *
     * @param DescribeCertificateRequest $request DescribeCertificateRequest
     *
     * @return DescribeCertificateResponse DescribeCertificateResponse
     */
    public function describeCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificateWithOptions($request, $runtime);
    }

    /**
     * You can query the information about the CMK `05754286-3ba2-4fa6-8d41-4323aca6****` by using parameter settings provided in this topic. The information includes the creator, creation time, status, and deletion protection status of the CMK.
     *   *
     * @param DescribeKeyRequest $request DescribeKeyRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKeyResponse DescribeKeyResponse
     */
    public function describeKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can query the information about the CMK `05754286-3ba2-4fa6-8d41-4323aca6****` by using parameter settings provided in this topic. The information includes the creator, creation time, status, and deletion protection status of the CMK.
     *   *
     * @param DescribeKeyRequest $request DescribeKeyRequest
     *
     * @return DescribeKeyResponse DescribeKeyResponse
     */
    public function describeKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to query the information about a version of the CMK `1234abcd-12ab-34cd-56ef-12345678****`. The ID of the CMK version is `2ab1a983-7072-4bbc-a582-584b5bd8****`. The response shows that the creation time of the CMK version is `2016-03-25T10:42:40Z`.
     *   *
     * @param DescribeKeyVersionRequest $request DescribeKeyVersionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKeyVersionResponse DescribeKeyVersionResponse
     */
    public function describeKeyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keyVersionId)) {
            $query['KeyVersionId'] = $request->keyVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKeyVersion',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeKeyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeKeyVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to query the information about a version of the CMK `1234abcd-12ab-34cd-56ef-12345678****`. The ID of the CMK version is `2ab1a983-7072-4bbc-a582-584b5bd8****`. The response shows that the creation time of the CMK version is `2016-03-25T10:42:40Z`.
     *   *
     * @param DescribeKeyVersionRequest $request DescribeKeyVersionRequest
     *
     * @return DescribeKeyVersionResponse DescribeKeyVersionResponse
     */
    public function describeKeyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNetworkRuleResponse
     */
    public function describeNetworkRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkRule',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNetworkRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param DescribePolicyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribePolicyResponse
     */
    public function describePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicy',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * ## Debugging
     *   * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Kms\\&api=DescribeRegions\\&type=RPC\\&version=2016-01-20).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * ## Debugging
     *   * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Kms\\&api=DescribeRegions\\&type=RPC\\&version=2016-01-20).
     *   *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * This operation returns the metadata of a secret. This operation does not return the secret value.
     *   * In this example, the metadata of the secret named `secret001` is queried.
     *   *
     * @param DescribeSecretRequest $request DescribeSecretRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecretResponse DescribeSecretResponse
     */
    public function describeSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fetchTags)) {
            $query['FetchTags'] = $request->fetchTags;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecret',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation returns the metadata of a secret. This operation does not return the secret value.
     *   * In this example, the metadata of the secret named `secret001` is queried.
     *   *
     * @param DescribeSecretRequest $request DescribeSecretRequest
     *
     * @return DescribeSecretResponse DescribeSecretResponse
     */
    public function describeSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecretWithOptions($request, $runtime);
    }

    /**
     * If a customer master key (CMK) is disabled, the ciphertext encrypted by using this CMK cannot be decrypted until you re-enable it. You can call the [EnableKey](~~35150~~) operation to enable the CMK.
     *   * In this example, the CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****` is disabled.
     *   *
     * @param DisableKeyRequest $request DisableKeyRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableKeyResponse DisableKeyResponse
     */
    public function disableKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If a customer master key (CMK) is disabled, the ciphertext encrypted by using this CMK cannot be decrypted until you re-enable it. You can call the [EnableKey](~~35150~~) operation to enable the CMK.
     *   * In this example, the CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****` is disabled.
     *   *
     * @param DisableKeyRequest $request DisableKeyRequest
     *
     * @return DisableKeyResponse DisableKeyResponse
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
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableKeyResponse::fromMap($this->execute($params, $req, $runtime));
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
     * *   KMS uses the primary version of a specified CMK to encrypt data.
     *   * *   Only data of 6 KB or less can be encrypted. For example, you can call this operation to encrypt RSA keys, database access passwords, or other sensitive information.
     *   * *   When you migrate encrypted data across regions, you can call this operation in the destination region to encrypt the plaintext of the data key that is used to encrypt the migrated data in the source region. This way, the ciphertext of the data key is generated in the destination region. You can also call the [Decrypt](~~28950~~) operation to decrypt the data key.
     *   *
     * @param EncryptRequest $tmpReq  EncryptRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EncryptResponse EncryptResponse
     */
    public function encryptWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EncryptShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->encryptionContextShrink)) {
            $query['EncryptionContext'] = $request->encryptionContextShrink;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->plaintext)) {
            $query['Plaintext'] = $request->plaintext;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Encrypt',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EncryptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EncryptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * *   KMS uses the primary version of a specified CMK to encrypt data.
     *   * *   Only data of 6 KB or less can be encrypted. For example, you can call this operation to encrypt RSA keys, database access passwords, or other sensitive information.
     *   * *   When you migrate encrypted data across regions, you can call this operation in the destination region to encrypt the plaintext of the data key that is used to encrypt the migrated data in the source region. This way, the ciphertext of the data key is generated in the destination region. You can also call the [Decrypt](~~28950~~) operation to decrypt the data key.
     *   *
     * @param EncryptRequest $request EncryptRequest
     *
     * @return EncryptResponse EncryptResponse
     */
    public function encrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptWithOptions($request, $runtime);
    }

    /**
     * You can call the [GenerateDataKeyWithoutPlaintext](~~134043~~) operation to generate a data key, which is encrypted by a CMK. If you want to distribute the data key to other regions or cryptographic modules, you can call the ExportDataKey operation to use a public key to encrypt the data key.
     *   * Then, you can import the ciphertext of the data key to the cryptographic module where the private key is stored. This way, the data key is securely distributed from KMS to the cryptographic module. After the data key is imported to the cryptographic module, you can use it to encrypt or decrypt data.
     *   *
     * @param ExportDataKeyRequest $tmpReq  ExportDataKeyRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportDataKeyResponse ExportDataKeyResponse
     */
    public function exportDataKeyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportDataKeyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        if (!Utils::isUnset($request->encryptionContextShrink)) {
            $query['EncryptionContext'] = $request->encryptionContextShrink;
        }
        if (!Utils::isUnset($request->publicKeyBlob)) {
            $query['PublicKeyBlob'] = $request->publicKeyBlob;
        }
        if (!Utils::isUnset($request->wrappingAlgorithm)) {
            $query['WrappingAlgorithm'] = $request->wrappingAlgorithm;
        }
        if (!Utils::isUnset($request->wrappingKeySpec)) {
            $query['WrappingKeySpec'] = $request->wrappingKeySpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportDataKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExportDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportDataKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call the [GenerateDataKeyWithoutPlaintext](~~134043~~) operation to generate a data key, which is encrypted by a CMK. If you want to distribute the data key to other regions or cryptographic modules, you can call the ExportDataKey operation to use a public key to encrypt the data key.
     *   * Then, you can import the ciphertext of the data key to the cryptographic module where the private key is stored. This way, the data key is securely distributed from KMS to the cryptographic module. After the data key is imported to the cryptographic module, you can use it to encrypt or decrypt data.
     *   *
     * @param ExportDataKeyRequest $request ExportDataKeyRequest
     *
     * @return ExportDataKeyResponse ExportDataKeyResponse
     */
    public function exportDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDataKeyWithOptions($request, $runtime);
    }

    /**
     * We recommend that you perform the following steps to import your data key to a cryptographic module:
     *   * *   Call the GenerateAndExportDataKey operation to generate a data key and obtain both the ciphertext of the data key encrypted by using the CMK and that encrypted by using the public key.
     *   * *   Store the ciphertext of the data key encrypted by using the CMK in KMS Secrets Manager or in a storage service such as ApsaraDB. This ciphertext is used for backup and restoration.
     *   * *   Import the ciphertext of the data key encrypted by using the public key to the cryptographic module where the private key is stored. Then, you can use the data key to encrypt or decrypt data.
     *   * >  The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the data keys randomly generated by calling this operation. You must take note of the data keys and the returned ciphertext.
     *   *
     * @param GenerateAndExportDataKeyRequest $tmpReq  GenerateAndExportDataKeyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateAndExportDataKeyResponse GenerateAndExportDataKeyResponse
     */
    public function generateAndExportDataKeyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateAndExportDataKeyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->encryptionContextShrink)) {
            $query['EncryptionContext'] = $request->encryptionContextShrink;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keySpec)) {
            $query['KeySpec'] = $request->keySpec;
        }
        if (!Utils::isUnset($request->numberOfBytes)) {
            $query['NumberOfBytes'] = $request->numberOfBytes;
        }
        if (!Utils::isUnset($request->publicKeyBlob)) {
            $query['PublicKeyBlob'] = $request->publicKeyBlob;
        }
        if (!Utils::isUnset($request->wrappingAlgorithm)) {
            $query['WrappingAlgorithm'] = $request->wrappingAlgorithm;
        }
        if (!Utils::isUnset($request->wrappingKeySpec)) {
            $query['WrappingKeySpec'] = $request->wrappingKeySpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateAndExportDataKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateAndExportDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateAndExportDataKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * We recommend that you perform the following steps to import your data key to a cryptographic module:
     *   * *   Call the GenerateAndExportDataKey operation to generate a data key and obtain both the ciphertext of the data key encrypted by using the CMK and that encrypted by using the public key.
     *   * *   Store the ciphertext of the data key encrypted by using the CMK in KMS Secrets Manager or in a storage service such as ApsaraDB. This ciphertext is used for backup and restoration.
     *   * *   Import the ciphertext of the data key encrypted by using the public key to the cryptographic module where the private key is stored. Then, you can use the data key to encrypt or decrypt data.
     *   * >  The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the data keys randomly generated by calling this operation. You must take note of the data keys and the returned ciphertext.
     *   *
     * @param GenerateAndExportDataKeyRequest $request GenerateAndExportDataKeyRequest
     *
     * @return GenerateAndExportDataKeyResponse GenerateAndExportDataKeyResponse
     */
    public function generateAndExportDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAndExportDataKeyWithOptions($request, $runtime);
    }

    /**
     * This operation creates a random data key, encrypts the data key by using the specified customer master key (CMK), and returns the plaintext and ciphertext of the data key. You can use the plaintext of the data key to locally encrypt your data without using KMS and store the encrypted data together with the ciphertext of the data key. You can obtain the plaintext of the data key from the Plaintext parameter in the response and the ciphertext of the data key from the CiphertextBlob parameter in the response.
     *   * The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the generated data key. Therefore, you need to store the ciphertext of the data key in persistent storage.
     *   * We recommend that you locally encrypt data by performing the following steps:
     *   * 1\\. Call the GenerateDataKey operation.
     *   * 2\\. Use the plaintext of the data key that you obtain to locally encrypt data without using KMS. Then, delete the plaintext of the data key from the memory.
     *   * 3\\. Store the encrypted data together with the ciphertext of the data key that you obtain.
     *   * We recommend that you locally decrypt data by performing the following steps:
     *   * *   Call the [Decrypt](~~28950~~) operation to decrypt the locally stored ciphertext of the data key. The plaintext of data key is then returned.
     *   * *   Use the plaintext of the data key to locally decrypt data and then delete the plaintext of the data key from the memory.
     *   * In this example, a random data key is generated for the CMK whose ID is `7906979c-8e06-46a2-be2d-68e3ccbc****`.
     *   *
     * @param GenerateDataKeyRequest $tmpReq  GenerateDataKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateDataKeyResponse GenerateDataKeyResponse
     */
    public function generateDataKeyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateDataKeyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->encryptionContextShrink)) {
            $query['EncryptionContext'] = $request->encryptionContextShrink;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keySpec)) {
            $query['KeySpec'] = $request->keySpec;
        }
        if (!Utils::isUnset($request->numberOfBytes)) {
            $query['NumberOfBytes'] = $request->numberOfBytes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDataKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateDataKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation creates a random data key, encrypts the data key by using the specified customer master key (CMK), and returns the plaintext and ciphertext of the data key. You can use the plaintext of the data key to locally encrypt your data without using KMS and store the encrypted data together with the ciphertext of the data key. You can obtain the plaintext of the data key from the Plaintext parameter in the response and the ciphertext of the data key from the CiphertextBlob parameter in the response.
     *   * The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the generated data key. Therefore, you need to store the ciphertext of the data key in persistent storage.
     *   * We recommend that you locally encrypt data by performing the following steps:
     *   * 1\\. Call the GenerateDataKey operation.
     *   * 2\\. Use the plaintext of the data key that you obtain to locally encrypt data without using KMS. Then, delete the plaintext of the data key from the memory.
     *   * 3\\. Store the encrypted data together with the ciphertext of the data key that you obtain.
     *   * We recommend that you locally decrypt data by performing the following steps:
     *   * *   Call the [Decrypt](~~28950~~) operation to decrypt the locally stored ciphertext of the data key. The plaintext of data key is then returned.
     *   * *   Use the plaintext of the data key to locally decrypt data and then delete the plaintext of the data key from the memory.
     *   * In this example, a random data key is generated for the CMK whose ID is `7906979c-8e06-46a2-be2d-68e3ccbc****`.
     *   *
     * @param GenerateDataKeyRequest $request GenerateDataKeyRequest
     *
     * @return GenerateDataKeyResponse GenerateDataKeyResponse
     */
    public function generateDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDataKeyWithOptions($request, $runtime);
    }

    /**
     * This operation creates a random data key, encrypts the data key by using a specific symmetric CMK, and returns the ciphertext of the data key. This operation serves the same purpose as the [GenerateDataKey](~~28948~~) operation. The only difference is that this operation does not return the plaintext of the data key.
     *   * The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the generated data key.
     *   * > * This operation applies to the scenario when you do not need to use the data key to immediately encrypt data. Before you can use the data key to encrypt data, you must call the [Decrypt](~~28950~~) operation to decrypt the ciphertext of the data key.
     *   * > * This operation is also suitable for a distributed system with different trust levels. For example, a system stores data in different partitions based on a preset trust policy. A module creates different partitions and generates different data keys for each partition in advance. This module is not involved in data production and consumption after it completes initialization of the control plane. This module is the key provider. When producing and consuming data, modules on the control plane obtain the ciphertext of the data key for a partition first. After decrypting the ciphertext of the data key, modules on the control plane use the plaintext of the data key to encrypt or decrypt data and then clear the plaintext of the data key from the memory. In such a system, the key provider does not need to obtain the plaintext of the data key. It only needs to have the permissions to call the GenerateDataKeyWithoutPlaintext operation. The data producers or consumers do not need to generate new data keys. They only need to have the permissions to call the Decrypt operation.
     *   *
     * @param GenerateDataKeyWithoutPlaintextRequest $tmpReq  GenerateDataKeyWithoutPlaintextRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateDataKeyWithoutPlaintextResponse GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintextWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateDataKeyWithoutPlaintextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encryptionContext)) {
            $request->encryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encryptionContext, 'EncryptionContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->encryptionContextShrink)) {
            $query['EncryptionContext'] = $request->encryptionContextShrink;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keySpec)) {
            $query['KeySpec'] = $request->keySpec;
        }
        if (!Utils::isUnset($request->numberOfBytes)) {
            $query['NumberOfBytes'] = $request->numberOfBytes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDataKeyWithoutPlaintext',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateDataKeyWithoutPlaintextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateDataKeyWithoutPlaintextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation creates a random data key, encrypts the data key by using a specific symmetric CMK, and returns the ciphertext of the data key. This operation serves the same purpose as the [GenerateDataKey](~~28948~~) operation. The only difference is that this operation does not return the plaintext of the data key.
     *   * The CMK that you specify in the request of this operation is only used to encrypt the data key and is not involved in the generation of the data key. KMS does not record or store the generated data key.
     *   * > * This operation applies to the scenario when you do not need to use the data key to immediately encrypt data. Before you can use the data key to encrypt data, you must call the [Decrypt](~~28950~~) operation to decrypt the ciphertext of the data key.
     *   * > * This operation is also suitable for a distributed system with different trust levels. For example, a system stores data in different partitions based on a preset trust policy. A module creates different partitions and generates different data keys for each partition in advance. This module is not involved in data production and consumption after it completes initialization of the control plane. This module is the key provider. When producing and consuming data, modules on the control plane obtain the ciphertext of the data key for a partition first. After decrypting the ciphertext of the data key, modules on the control plane use the plaintext of the data key to encrypt or decrypt data and then clear the plaintext of the data key from the memory. In such a system, the key provider does not need to obtain the plaintext of the data key. It only needs to have the permissions to call the GenerateDataKeyWithoutPlaintext operation. The data producers or consumers do not need to generate new data keys. They only need to have the permissions to call the Decrypt operation.
     *   *
     * @param GenerateDataKeyWithoutPlaintextRequest $request GenerateDataKeyWithoutPlaintextRequest
     *
     * @return GenerateDataKeyWithoutPlaintextResponse GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintext($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDataKeyWithoutPlaintextWithOptions($request, $runtime);
    }

    /**
     * In this example, the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is queried. The certificate, certificate chain, certificate ID, and certificate signing request (CSR) are returned.
     *   *
     * @param GetCertificateRequest $request GetCertificateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCertificateResponse GetCertificateResponse
     */
    public function getCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCertificate',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * In this example, the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is queried. The certificate, certificate chain, certificate ID, and certificate signing request (CSR) are returned.
     *   *
     * @param GetCertificateRequest $request GetCertificateRequest
     *
     * @return GetCertificateResponse GetCertificateResponse
     */
    public function getCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertificateWithOptions($request, $runtime);
    }

    /**
     * @param GetClientKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetClientKeyResponse
     */
    public function getClientKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClientKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClientKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClientKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param GetKmsInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetKmsInstanceResponse
     */
    public function getKmsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->kmsInstanceId)) {
            $query['KmsInstanceId'] = $request->kmsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKmsInstance',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetKmsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKmsInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * The returned parameters can be used to call the [ImportKeyMaterial](https://www.alibabacloud.com/help/en/key-management-service/latest/importkeymaterial) operation.
     *   * - You can import key material only for CMKs whose Origin parameter is set to EXTERNAL.
     *   * - The public key and token that are returned by the GetParametersForImport operation must be used together. The public key and token can be used to import key material only for the CMK that is specified when you call the operation.
     *   * - The public key and token that are returned vary each time you call the GetParametersForImport operation.
     *   * - You must specify the type of the public key and the encryption algorithm that are used to encrypt key material. The following table lists the types of public keys and the encryption algorithms allowed for each type.
     *   * | Public key type | Encryption algorithm | Description |
     *   * | --------------- | -------------------- | ----------- |
     *   * | RSA_2048 | RSAES_PKCS1_V1_5
     *   * RSAES_OAEP_SHA_1
     *   * RSAES_OAEP_SHA_256 | CMKs of all regions and all protection levels are supported.
     *   * Dedicated Key Management Service (KMS) does not support RSAES_OAEP_SHA_1. |
     *   * | EC_SM2 | SM2PKE | CMKs whose ProtectionLevel is set to HSM are supported. The SM2 algorithm is developed and approved by the State Cryptography Administration of China. The SM2 algorithm can be used only to import key material for a CMK whose ProtectionLevel is set to HSM. You can use the SM2 algorithm only when you enable the Managed HSM feature for KMS in the Chinese mainland. For more information, see [Overview of Managed HSM](https://www.alibabacloud.com/help/en/key-management-service/latest/managed-hsm-overview). |
     *   * For more information, see [Import key material](https://www.alibabacloud.com/help/en/key-management-service/latest/import-key-material). This topic provides an example on how to query the parameters that are used to import key material for a CMK. The ID of the CMK is `1234abcd-12ab-34cd-56ef-12345678****`, the encryption algorithm is `RSAES_PKCS1_V1_5`, and the public key is of the `RSA_2048` type. The parameters that are returned include the ID of the CMK, the public key that is used to encrypt the key material, the token that is used to import the key material, and the time when the token expires.
     *   *
     * @param GetParametersForImportRequest $request GetParametersForImportRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetParametersForImportResponse GetParametersForImportResponse
     */
    public function getParametersForImportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->wrappingAlgorithm)) {
            $query['WrappingAlgorithm'] = $request->wrappingAlgorithm;
        }
        if (!Utils::isUnset($request->wrappingKeySpec)) {
            $query['WrappingKeySpec'] = $request->wrappingKeySpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetParametersForImport',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetParametersForImportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetParametersForImportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The returned parameters can be used to call the [ImportKeyMaterial](https://www.alibabacloud.com/help/en/key-management-service/latest/importkeymaterial) operation.
     *   * - You can import key material only for CMKs whose Origin parameter is set to EXTERNAL.
     *   * - The public key and token that are returned by the GetParametersForImport operation must be used together. The public key and token can be used to import key material only for the CMK that is specified when you call the operation.
     *   * - The public key and token that are returned vary each time you call the GetParametersForImport operation.
     *   * - You must specify the type of the public key and the encryption algorithm that are used to encrypt key material. The following table lists the types of public keys and the encryption algorithms allowed for each type.
     *   * | Public key type | Encryption algorithm | Description |
     *   * | --------------- | -------------------- | ----------- |
     *   * | RSA_2048 | RSAES_PKCS1_V1_5
     *   * RSAES_OAEP_SHA_1
     *   * RSAES_OAEP_SHA_256 | CMKs of all regions and all protection levels are supported.
     *   * Dedicated Key Management Service (KMS) does not support RSAES_OAEP_SHA_1. |
     *   * | EC_SM2 | SM2PKE | CMKs whose ProtectionLevel is set to HSM are supported. The SM2 algorithm is developed and approved by the State Cryptography Administration of China. The SM2 algorithm can be used only to import key material for a CMK whose ProtectionLevel is set to HSM. You can use the SM2 algorithm only when you enable the Managed HSM feature for KMS in the Chinese mainland. For more information, see [Overview of Managed HSM](https://www.alibabacloud.com/help/en/key-management-service/latest/managed-hsm-overview). |
     *   * For more information, see [Import key material](https://www.alibabacloud.com/help/en/key-management-service/latest/import-key-material). This topic provides an example on how to query the parameters that are used to import key material for a CMK. The ID of the CMK is `1234abcd-12ab-34cd-56ef-12345678****`, the encryption algorithm is `RSAES_PKCS1_V1_5`, and the public key is of the `RSA_2048` type. The parameters that are returned include the ID of the CMK, the public key that is used to encrypt the key material, the token that is used to import the key material, and the time when the token expires.
     *   *
     * @param GetParametersForImportRequest $request GetParametersForImportRequest
     *
     * @return GetParametersForImportResponse GetParametersForImportResponse
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
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keyVersionId)) {
            $query['KeyVersionId'] = $request->keyVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublicKey',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPublicKeyResponse::fromMap($this->execute($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->excludeCharacters)) {
            $query['ExcludeCharacters'] = $request->excludeCharacters;
        }
        if (!Utils::isUnset($request->excludeLowercase)) {
            $query['ExcludeLowercase'] = $request->excludeLowercase;
        }
        if (!Utils::isUnset($request->excludeNumbers)) {
            $query['ExcludeNumbers'] = $request->excludeNumbers;
        }
        if (!Utils::isUnset($request->excludePunctuation)) {
            $query['ExcludePunctuation'] = $request->excludePunctuation;
        }
        if (!Utils::isUnset($request->excludeUppercase)) {
            $query['ExcludeUppercase'] = $request->excludeUppercase;
        }
        if (!Utils::isUnset($request->passwordLength)) {
            $query['PasswordLength'] = $request->passwordLength;
        }
        if (!Utils::isUnset($request->requireEachIncludedType)) {
            $query['RequireEachIncludedType'] = $request->requireEachIncludedType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRandomPassword',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRandomPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRandomPasswordResponse::fromMap($this->execute($params, $req, $runtime));
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
     * If you do not specify a version number or stage label, Secrets Manager returns the secret value of the version marked with ACSCurrent.
     *   * If a customer master key (CMK) is specified to encrypt the secret value, you must also have the `kms:Decrypt` permission on the CMK to call the GetSecretValue operation.
     *   * In this example, the value of the secret named `secret001` is obtained. The secret value is returned in the `SecretData` parameter. The secret value is `testdata1`.
     *   *
     * @param GetSecretValueRequest $request GetSecretValueRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSecretValueResponse GetSecretValueResponse
     */
    public function getSecretValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fetchExtendedConfig)) {
            $query['FetchExtendedConfig'] = $request->fetchExtendedConfig;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        if (!Utils::isUnset($request->versionStage)) {
            $query['VersionStage'] = $request->versionStage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSecretValue',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSecretValueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you do not specify a version number or stage label, Secrets Manager returns the secret value of the version marked with ACSCurrent.
     *   * If a customer master key (CMK) is specified to encrypt the secret value, you must also have the `kms:Decrypt` permission on the CMK to call the GetSecretValue operation.
     *   * In this example, the value of the secret named `secret001` is obtained. The secret value is returned in the `SecretData` parameter. The secret value is `testdata1`.
     *   *
     * @param GetSecretValueRequest $request GetSecretValueRequest
     *
     * @return GetSecretValueResponse GetSecretValueResponse
     */
    public function getSecretValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretValueWithOptions($request, $runtime);
    }

    /**
     * Call [CreateKey](~~28947~~) when creating a CMK, you can select its key material source as external. **Origin** set to **EXTERNAL**. This API is used to import the key material into the CMK.
     *   * *   To view the CMK **Origin**, see [DescribeKey](~~28952~~).
     *   * *   Before importing key material, you need to call the [GetParametersForImport](~~68621~~) obtain the parameters required to import the key material, including the public key and import token.
     *   * > *   The key type of the pair is **Aliyun\\_AES\\_256** the key material must be 256 bits. The key type must be **Aliyun\\_SM4** the CMK and key material must be 128 bits.
     *   * > *   You can set the expiration time for the key material, or you can set it to never expire.
     *   * > *   You can reimport the key material and reset the expiration time for the specified CMK at any time, but the same key material must be imported.
     *   * > *   After the imported key material expires or is deleted, the specified CMK is unavailable until the same key material are imported again.
     *   * > *   A Key material can be imported to multiple cmks, but any Data or Data Key encrypted by one CMK cannot be decrypted by another CMK.
     *   *
     * @param ImportKeyMaterialRequest $request ImportKeyMaterialRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportKeyMaterialResponse ImportKeyMaterialResponse
     */
    public function importKeyMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encryptedKeyMaterial)) {
            $query['EncryptedKeyMaterial'] = $request->encryptedKeyMaterial;
        }
        if (!Utils::isUnset($request->importToken)) {
            $query['ImportToken'] = $request->importToken;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->keyMaterialExpireUnix)) {
            $query['KeyMaterialExpireUnix'] = $request->keyMaterialExpireUnix;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportKeyMaterial',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ImportKeyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportKeyMaterialResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Call [CreateKey](~~28947~~) when creating a CMK, you can select its key material source as external. **Origin** set to **EXTERNAL**. This API is used to import the key material into the CMK.
     *   * *   To view the CMK **Origin**, see [DescribeKey](~~28952~~).
     *   * *   Before importing key material, you need to call the [GetParametersForImport](~~68621~~) obtain the parameters required to import the key material, including the public key and import token.
     *   * > *   The key type of the pair is **Aliyun\\_AES\\_256** the key material must be 256 bits. The key type must be **Aliyun\\_SM4** the CMK and key material must be 128 bits.
     *   * > *   You can set the expiration time for the key material, or you can set it to never expire.
     *   * > *   You can reimport the key material and reset the expiration time for the specified CMK at any time, but the same key material must be imported.
     *   * > *   After the imported key material expires or is deleted, the specified CMK is unavailable until the same key material are imported again.
     *   * > *   A Key material can be imported to multiple cmks, but any Data or Data Key encrypted by one CMK cannot be decrypted by another CMK.
     *   *
     * @param ImportKeyMaterialRequest $request ImportKeyMaterialRequest
     *
     * @return ImportKeyMaterialResponse ImportKeyMaterialResponse
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
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAliases',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAliasesResponse::fromMap($this->execute($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAliasesByKeyId',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAliasesByKeyIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAliasesByKeyIdResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @param ListApplicationAccessPointsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListApplicationAccessPointsResponse
     */
    public function listApplicationAccessPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationAccessPoints',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListApplicationAccessPointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationAccessPointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param ListClientKeysRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListClientKeysResponse
     */
    public function listClientKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClientKeys',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListClientKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClientKeysResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param ListKeyVersionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListKeyVersionsResponse
     */
    public function listKeyVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListKeyVersions',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListKeyVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListKeyVersionsResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @param ListKeysRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListKeysResponse
     */
    public function listKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListKeys',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListKeysResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @param ListKmsInstancesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListKmsInstancesResponse
     */
    public function listKmsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListKmsInstances',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListKmsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListKmsInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param ListNetworkRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNetworkRulesResponse
     */
    public function listNetworkRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNetworkRules',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListNetworkRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNetworkRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicies',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * Request format: KeyId="string".
     *   *
     * @param ListResourceTagsRequest $request ListResourceTagsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceTagsResponse ListResourceTagsResponse
     */
    public function listResourceTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceTags',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListResourceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResourceTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Request format: KeyId="string".
     *   *
     * @param ListResourceTagsRequest $request ListResourceTagsRequest
     *
     * @return ListResourceTagsResponse ListResourceTagsResponse
     */
    public function listResourceTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTagsWithOptions($request, $runtime);
    }

    /**
     * The secret value is not included in the returned version information. By default, deprecated secret versions are not returned.
     *   *
     * @param ListSecretVersionIdsRequest $request ListSecretVersionIdsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSecretVersionIdsResponse ListSecretVersionIdsResponse
     */
    public function listSecretVersionIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeDeprecated)) {
            $query['IncludeDeprecated'] = $request->includeDeprecated;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecretVersionIds',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSecretVersionIdsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSecretVersionIdsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The secret value is not included in the returned version information. By default, deprecated secret versions are not returned.
     *   *
     * @param ListSecretVersionIdsRequest $request ListSecretVersionIdsRequest
     *
     * @return ListSecretVersionIdsResponse ListSecretVersionIdsResponse
     */
    public function listSecretVersionIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretVersionIdsWithOptions($request, $runtime);
    }

    /**
     * Specifies whether to return the resource tags of the secret. Valid values:
     *   * *   true: returns the resource tags.
     *   * *   false: does not return the resource tags. This is the default value.
     *   *
     * @param ListSecretsRequest $request ListSecretsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSecretsResponse ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fetchTags)) {
            $query['FetchTags'] = $request->fetchTags;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecrets',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSecretsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Specifies whether to return the resource tags of the secret. Valid values:
     *   * *   true: returns the resource tags.
     *   * *   false: does not return the resource tags. This is the default value.
     *   *
     * @param ListSecretsRequest $request ListSecretsRequest
     *
     * @return ListSecretsResponse ListSecretsResponse
     */
    public function listSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * When you call this operation, note that:
     *   * - KMS is a paid service. For more information about the billing method, see [Billing description](https://www.alibabacloud.com/help/en/key-management-service/latest/billing-billing).
     *   * - An Alibaba Cloud account can activate KMS only once.
     *   * - Make sure that your Alibaba Cloud account has passed real-name authentication.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenKmsServiceResponse OpenKmsServiceResponse
     */
    public function openKmsServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenKmsService',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return OpenKmsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenKmsServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * When you call this operation, note that:
     *   * - KMS is a paid service. For more information about the billing method, see [Billing description](https://www.alibabacloud.com/help/en/key-management-service/latest/billing-billing).
     *   * - An Alibaba Cloud account can activate KMS only once.
     *   * - Make sure that your Alibaba Cloud account has passed real-name authentication.
     *   *
     * @return OpenKmsServiceResponse OpenKmsServiceResponse
     */
    public function openKmsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openKmsServiceWithOptions($runtime);
    }

    /**
     * This operation is used to store the secret values of new versions. It cannot be used to modify the secret value of an existing version.
     *   * By default, the newly stored secret value is marked with ACSCurrent, and the mark for the previous version of the secret value is changed from ACSCurrent to ACSPrevious. If you specify the VersionStage parameter, the newly stored secret value is marked with the stage label that you specify.
     *   * You must specify a version number when you call the operation. Secrets Manager performs operations based on the following rules:
     *   * *   If the specified version number does not exist in the secret, Secrets Manager creates the version and stores the secret value.
     *   * *   If the specified version number already exists in the secret and the secret value of the existing version is the same as the secret value that you specify, Secrets Manager ignores the request and returns a success message. The request is idempotent.
     *   * *   If the specified version number already exists in the secret but the secret value of the existing version is different from the secret value that you specify, Secrets Manager rejects the request and returns a failure message.
     *   * Limits: This operation is available only for standard secrets.
     *   * In this example, the secret value of a new version is stored into the `secret001` secret. The `VersionId` parameter is set to `00000000000000000000000000000000203` as the new version, and the `SecretData` parameter is set to `importantdata`.
     *   *
     * @param PutSecretValueRequest $request PutSecretValueRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return PutSecretValueResponse PutSecretValueResponse
     */
    public function putSecretValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->secretData)) {
            $query['SecretData'] = $request->secretData;
        }
        if (!Utils::isUnset($request->secretDataType)) {
            $query['SecretDataType'] = $request->secretDataType;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        if (!Utils::isUnset($request->versionStages)) {
            $query['VersionStages'] = $request->versionStages;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutSecretValue',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PutSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutSecretValueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation is used to store the secret values of new versions. It cannot be used to modify the secret value of an existing version.
     *   * By default, the newly stored secret value is marked with ACSCurrent, and the mark for the previous version of the secret value is changed from ACSCurrent to ACSPrevious. If you specify the VersionStage parameter, the newly stored secret value is marked with the stage label that you specify.
     *   * You must specify a version number when you call the operation. Secrets Manager performs operations based on the following rules:
     *   * *   If the specified version number does not exist in the secret, Secrets Manager creates the version and stores the secret value.
     *   * *   If the specified version number already exists in the secret and the secret value of the existing version is the same as the secret value that you specify, Secrets Manager ignores the request and returns a success message. The request is idempotent.
     *   * *   If the specified version number already exists in the secret but the secret value of the existing version is different from the secret value that you specify, Secrets Manager rejects the request and returns a failure message.
     *   * Limits: This operation is available only for standard secrets.
     *   * In this example, the secret value of a new version is stored into the `secret001` secret. The `VersionId` parameter is set to `00000000000000000000000000000000203` as the new version, and the `SecretData` parameter is set to `importantdata`.
     *   *
     * @param PutSecretValueRequest $request PutSecretValueRequest
     *
     * @return PutSecretValueResponse PutSecretValueResponse
     */
    public function putSecretValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putSecretValueWithOptions($request, $runtime);
    }

    /**
     * You can call this operation in the following scenarios:
     *   * *   After the CMK that was used to encrypt your data is rotated, you can call this operation to use the latest CMK version to re-encrypt the data. For more information about automatic key rotation, see [Configure automatic key rotation](~~134270~~).
     *   * *   The CMK that was used to encrypt your data remains unchanged, but EncryptionContext is changed. In this scenario, you can call this operation to re-encrypt the data.
     *   * *   You can call this operation to use a CMK in KMS to re-encrypt data or a data key that was previously encrypted by a different CMK.
     *   * To use the ReEncrypt operation, you must have two permissions:
     *   * *   kms:ReEncryptFrom on the source CMK
     *   * *   kms:ReEncryptTo on the destination CMK
     *   * *   For simplicity, you can specify kms:ReEncrypt\\* to allow both of the preceding permissions.
     *   *
     * @param ReEncryptRequest $tmpReq  ReEncryptRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ReEncryptResponse ReEncryptResponse
     */
    public function reEncryptWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReEncryptShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destinationEncryptionContext)) {
            $request->destinationEncryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destinationEncryptionContext, 'DestinationEncryptionContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceEncryptionContext)) {
            $request->sourceEncryptionContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceEncryptionContext, 'SourceEncryptionContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        if (!Utils::isUnset($request->destinationEncryptionContextShrink)) {
            $query['DestinationEncryptionContext'] = $request->destinationEncryptionContextShrink;
        }
        if (!Utils::isUnset($request->destinationKeyId)) {
            $query['DestinationKeyId'] = $request->destinationKeyId;
        }
        if (!Utils::isUnset($request->sourceEncryptionAlgorithm)) {
            $query['SourceEncryptionAlgorithm'] = $request->sourceEncryptionAlgorithm;
        }
        if (!Utils::isUnset($request->sourceEncryptionContextShrink)) {
            $query['SourceEncryptionContext'] = $request->sourceEncryptionContextShrink;
        }
        if (!Utils::isUnset($request->sourceKeyId)) {
            $query['SourceKeyId'] = $request->sourceKeyId;
        }
        if (!Utils::isUnset($request->sourceKeyVersionId)) {
            $query['SourceKeyVersionId'] = $request->sourceKeyVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReEncrypt',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReEncryptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation in the following scenarios:
     *   * *   After the CMK that was used to encrypt your data is rotated, you can call this operation to use the latest CMK version to re-encrypt the data. For more information about automatic key rotation, see [Configure automatic key rotation](~~134270~~).
     *   * *   The CMK that was used to encrypt your data remains unchanged, but EncryptionContext is changed. In this scenario, you can call this operation to re-encrypt the data.
     *   * *   You can call this operation to use a CMK in KMS to re-encrypt data or a data key that was previously encrypted by a different CMK.
     *   * To use the ReEncrypt operation, you must have two permissions:
     *   * *   kms:ReEncryptFrom on the source CMK
     *   * *   kms:ReEncryptTo on the destination CMK
     *   * *   For simplicity, you can specify kms:ReEncrypt\\* to allow both of the preceding permissions.
     *   *
     * @param ReEncryptRequest $request ReEncryptRequest
     *
     * @return ReEncryptResponse ReEncryptResponse
     */
    public function reEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reEncryptWithOptions($request, $runtime);
    }

    /**
     * You can only use this operation to restore a deleted secret that is within its recovery period. If you set **ForceDeleteWithoutRecovery** to **true** when you delete the secret, you cannot restore it.
     *   *
     * @param RestoreSecretRequest $request RestoreSecretRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreSecretResponse RestoreSecretResponse
     */
    public function restoreSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreSecret',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RestoreSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestoreSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can only use this operation to restore a deleted secret that is within its recovery period. If you set **ForceDeleteWithoutRecovery** to **true** when you delete the secret, you cannot restore it.
     *   *
     * @param RestoreSecretRequest $request RestoreSecretRequest
     *
     * @return RestoreSecretResponse RestoreSecretResponse
     */
    public function restoreSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreSecretWithOptions($request, $runtime);
    }

    /**
     * Limits:
     *   * • A secret of each Alibaba Cloud account can be rotated for a maximum of 50 times per hour.
     *   * • The RotateSecret operation is unavailable for standard secrets.
     *   * In this example, the `RdsSecret/Mysql5.4/MyCred` secret is manually rotated, and the version number of the secret is set to `000000123` after the secret is rotated.
     *   *
     * @param RotateSecretRequest $request RotateSecretRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RotateSecretResponse RotateSecretResponse
     */
    public function rotateSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RotateSecret',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RotateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RotateSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Limits:
     *   * • A secret of each Alibaba Cloud account can be rotated for a maximum of 50 times per hour.
     *   * • The RotateSecret operation is unavailable for standard secrets.
     *   * In this example, the `RdsSecret/Mysql5.4/MyCred` secret is manually rotated, and the version number of the secret is set to `000000123` after the secret is rotated.
     *   *
     * @param RotateSecretRequest $request RotateSecretRequest
     *
     * @return RotateSecretResponse RotateSecretResponse
     */
    public function rotateSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rotateSecretWithOptions($request, $runtime);
    }

    /**
     * During the scheduled period, the CMK is in the PendingDeletion state and cannot be used to encrypt data, decrypt data, or generate data keys.
     *   * After a CMK is deleted, it cannot be recovered. Data that is encrypted and data keys that are generated by using the CMK cannot be decrypted. To prevent accidental deletion of CMKs, Key Management Service (KMS) allows you to only schedule key deletion tasks. You cannot directly delete CMKs. If you want to delete a CMK, call the [DisableKey](~~35151~~) operation to disable the CMK.
     *   * When you call this operation, you must specify a scheduled period between 7 days to 366 days. The scheduled period starts from the time when you submit the request. You can call the [CancelKeyDeletion](~~44197~~) operation to cancel the key deletion task before the scheduled period ends.
     *   *
     * @param ScheduleKeyDeletionRequest $request ScheduleKeyDeletionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ScheduleKeyDeletionResponse ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->pendingWindowInDays)) {
            $query['PendingWindowInDays'] = $request->pendingWindowInDays;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScheduleKeyDeletion',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ScheduleKeyDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScheduleKeyDeletionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * During the scheduled period, the CMK is in the PendingDeletion state and cannot be used to encrypt data, decrypt data, or generate data keys.
     *   * After a CMK is deleted, it cannot be recovered. Data that is encrypted and data keys that are generated by using the CMK cannot be decrypted. To prevent accidental deletion of CMKs, Key Management Service (KMS) allows you to only schedule key deletion tasks. You cannot directly delete CMKs. If you want to delete a CMK, call the [DisableKey](~~35151~~) operation to disable the CMK.
     *   * When you call this operation, you must specify a scheduled period between 7 days to 366 days. The scheduled period starts from the time when you submit the request. You can call the [CancelKeyDeletion](~~44197~~) operation to cancel the key deletion task before the scheduled period ends.
     *   *
     * @param ScheduleKeyDeletionRequest $request ScheduleKeyDeletionRequest
     *
     * @return ScheduleKeyDeletionResponse ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scheduleKeyDeletionWithOptions($request, $runtime);
    }

    /**
     * *   After you enable deletion protection for a CMK, you cannot delete the CMK. If you want to delete the CMK, you must first disable deletion protection for the CMK.
     *   * *   Before you can call the SetDeletionProtection operation, make sure that the required CMK is not in the Pending Deletion state. You can call the [DescribeKey](~~28952~~) operation to query the CMK status, which is specified by the KeyState parameter.
     *   * You can enable deletion protection for the CMK whose Alibaba Cloud Resource Name (ARN) is `acs:kms:cn-hangzhou:123213123****:key/0225f411-b21d-46d1-be5b-93931c82****` by using parameter settings provided in this topic. The CMK ARN is specified by the ProtectedResourceArn parameter.
     *   *
     * @param SetDeletionProtectionRequest $request SetDeletionProtectionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDeletionProtectionResponse SetDeletionProtectionResponse
     */
    public function setDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletionProtectionDescription)) {
            $query['DeletionProtectionDescription'] = $request->deletionProtectionDescription;
        }
        if (!Utils::isUnset($request->enableDeletionProtection)) {
            $query['EnableDeletionProtection'] = $request->enableDeletionProtection;
        }
        if (!Utils::isUnset($request->protectedResourceArn)) {
            $query['ProtectedResourceArn'] = $request->protectedResourceArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDeletionProtection',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetDeletionProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * *   After you enable deletion protection for a CMK, you cannot delete the CMK. If you want to delete the CMK, you must first disable deletion protection for the CMK.
     *   * *   Before you can call the SetDeletionProtection operation, make sure that the required CMK is not in the Pending Deletion state. You can call the [DescribeKey](~~28952~~) operation to query the CMK status, which is specified by the KeyState parameter.
     *   * You can enable deletion protection for the CMK whose Alibaba Cloud Resource Name (ARN) is `acs:kms:cn-hangzhou:123213123****:key/0225f411-b21d-46d1-be5b-93931c82****` by using parameter settings provided in this topic. The CMK ARN is specified by the ProtectedResourceArn parameter.
     *   *
     * @param SetDeletionProtectionRequest $request SetDeletionProtectionRequest
     *
     * @return SetDeletionProtectionResponse SetDeletionProtectionResponse
     */
    public function setDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * You can add up to 10 tags to a CMK, secret, or certificate.
     *   * In this example, the tags `[{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]` are added to the CMK whose ID is `08c33a6f-4e0a-4a1b-a3fa-7ddf****`.
     *   *
     * @param TagResourceRequest $request TagResourceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourceResponse TagResourceResponse
     */
    public function tagResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResource',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can add up to 10 tags to a CMK, secret, or certificate.
     *   * In this example, the tags `[{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]` are added to the CMK whose ID is `08c33a6f-4e0a-4a1b-a3fa-7ddf****`.
     *   *
     * @param TagResourceRequest $request TagResourceRequest
     *
     * @return TagResourceResponse TagResourceResponse
     */
    public function tagResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourceWithOptions($request, $runtime);
    }

    /**
     * You can add multiple tags to multiple keys or multiple secrets at a time.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can add multiple tags to multiple keys or multiple secrets at a time.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * One or more tag keys. Separate multiple tag keys with commas (,).
     *   * You need to specify only the tag keys, not the tag values.
     *   * Each tag key must be 1 to 128 bytes in length.
     *   *
     * @param UntagResourceRequest $request UntagResourceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourceResponse UntagResourceResponse
     */
    public function untagResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            $query['TagKeys'] = $request->tagKeys;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResource',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UntagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * One or more tag keys. Separate multiple tag keys with commas (,).
     *   * You need to specify only the tag keys, not the tag values.
     *   * Each tag key must be 1 to 128 bytes in length.
     *   *
     * @param UntagResourceRequest $request UntagResourceRequest
     *
     * @return UntagResourceResponse UntagResourceResponse
     */
    public function untagResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourceWithOptions($request, $runtime);
    }

    /**
     * You can remove multiple tags from multiple keys or multiple secrets at a time. You cannot remove tags that start with aliyun or acs:.
     *   * If you enter multiple tag keys in the request parameters and only some of the tag keys are associated with resources, the operation can be called and the tags whose keys are associated with resources are removed from the resources.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can remove multiple tags from multiple keys or multiple secrets at a time. You cannot remove tags that start with aliyun or acs:.
     *   * If you enter multiple tag keys in the request parameters and only some of the tag keys are associated with resources, the operation can be called and the tags whose keys are associated with resources are removed from the resources.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlias',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAliasResponse::fromMap($this->execute($params, $req, $runtime));
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
     * The update takes effect immediately after an AAP information is updated. Exercise caution when you perform this operation. You can update the description of an AAP and the permission policies that are associated with the AAP. You cannot update the name of the AAP.
     *   *
     * @param UpdateApplicationAccessPointRequest $request UpdateApplicationAccessPointRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationAccessPointResponse UpdateApplicationAccessPointResponse
     */
    public function updateApplicationAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policies)) {
            $query['Policies'] = $request->policies;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationAccessPoint',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateApplicationAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateApplicationAccessPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The update takes effect immediately after an AAP information is updated. Exercise caution when you perform this operation. You can update the description of an AAP and the permission policies that are associated with the AAP. You cannot update the name of the AAP.
     *   *
     * @param UpdateApplicationAccessPointRequest $request UpdateApplicationAccessPointRequest
     *
     * @return UpdateApplicationAccessPointResponse UpdateApplicationAccessPointResponse
     */
    public function updateApplicationAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationAccessPointWithOptions($request, $runtime);
    }

    /**
     * In this example, the status of the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is updated to INACTIVE.
     *   *
     * @param UpdateCertificateStatusRequest $request UpdateCertificateStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCertificateStatusResponse UpdateCertificateStatusResponse
     */
    public function updateCertificateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCertificateStatus',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCertificateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCertificateStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * In this example, the status of the certificate whose ID is `9a28de48-8d8b-484d-a766-dec4****` is updated to INACTIVE.
     *   *
     * @param UpdateCertificateStatusRequest $request UpdateCertificateStatusRequest
     *
     * @return UpdateCertificateStatusResponse UpdateCertificateStatusResponse
     */
    public function updateCertificateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCertificateStatusWithOptions($request, $runtime);
    }

    /**
     * This operation replaces the description of a customer master key (CMK) with the description that you specify. The original description of the CMK is specified by the Description parameter when you call the [DescribeKey](~~28952~~) operation. You can call this operation to add, modify, or delete the description of a CMK.
     *   *
     * @param UpdateKeyDescriptionRequest $request UpdateKeyDescriptionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateKeyDescriptionResponse UpdateKeyDescriptionResponse
     */
    public function updateKeyDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateKeyDescription',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateKeyDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateKeyDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This operation replaces the description of a customer master key (CMK) with the description that you specify. The original description of the CMK is specified by the Description parameter when you call the [DescribeKey](~~28952~~) operation. You can call this operation to add, modify, or delete the description of a CMK.
     *   *
     * @param UpdateKeyDescriptionRequest $request UpdateKeyDescriptionRequest
     *
     * @return UpdateKeyDescriptionResponse UpdateKeyDescriptionResponse
     */
    public function updateKeyDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKeyDescriptionWithOptions($request, $runtime);
    }

    /**
     * If your own applications are deployed in multiple VPCs in the same region, you can associate the VPCs except the VPC in which the KMS instance resides with the KMS instance. This topic describes how to configure the VPCs.
     *   * The VPCs can belong to the same Alibaba Cloud account or different Alibaba Cloud accounts. After the configuration is complete, the applications in these VPCs can access the KMS instance.
     *   * > If the VPCs belong to different Alibaba Cloud accounts, you must first configure resource sharing to share the vSwitches of other Alibaba Cloud accounts with the Alibaba Cloud account to which the KMS instance belongs. For more information, see [Access a KMS instance from multiple VPCs in the same region](~~2393236~~).
     *   *
     * @param UpdateKmsInstanceBindVpcRequest $request UpdateKmsInstanceBindVpcRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateKmsInstanceBindVpcResponse UpdateKmsInstanceBindVpcResponse
     */
    public function updateKmsInstanceBindVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateKmsInstanceBindVpc',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateKmsInstanceBindVpcResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateKmsInstanceBindVpcResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If your own applications are deployed in multiple VPCs in the same region, you can associate the VPCs except the VPC in which the KMS instance resides with the KMS instance. This topic describes how to configure the VPCs.
     *   * The VPCs can belong to the same Alibaba Cloud account or different Alibaba Cloud accounts. After the configuration is complete, the applications in these VPCs can access the KMS instance.
     *   * > If the VPCs belong to different Alibaba Cloud accounts, you must first configure resource sharing to share the vSwitches of other Alibaba Cloud accounts with the Alibaba Cloud account to which the KMS instance belongs. For more information, see [Access a KMS instance from multiple VPCs in the same region](~~2393236~~).
     *   *
     * @param UpdateKmsInstanceBindVpcRequest $request UpdateKmsInstanceBindVpcRequest
     *
     * @return UpdateKmsInstanceBindVpcResponse UpdateKmsInstanceBindVpcResponse
     */
    public function updateKmsInstanceBindVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKmsInstanceBindVpcWithOptions($request, $runtime);
    }

    /**
     * - You can update only private IP addresses and description of an access control rule. You cannot update the name and network type of an access control rule.
     *   * - Updating an access control rule affects all permission policies that are bound to the access control rule. Exercise caution when you perform this operation.
     *   *
     * @param UpdateNetworkRuleRequest $request UpdateNetworkRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNetworkRuleResponse UpdateNetworkRuleResponse
     */
    public function updateNetworkRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourcePrivateIp)) {
            $query['SourcePrivateIp'] = $request->sourcePrivateIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNetworkRule',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateNetworkRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNetworkRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * - You can update only private IP addresses and description of an access control rule. You cannot update the name and network type of an access control rule.
     *   * - Updating an access control rule affects all permission policies that are bound to the access control rule. Exercise caution when you perform this operation.
     *   *
     * @param UpdateNetworkRuleRequest $request UpdateNetworkRuleRequest
     *
     * @return UpdateNetworkRuleResponse UpdateNetworkRuleResponse
     */
    public function updateNetworkRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkRuleWithOptions($request, $runtime);
    }

    /**
     * - You can update the role-based access control (RBAC) permissions, accessible resources, access control rules, and description of a permission policy. You cannot update the name or scope of a permission policy.
     *   * - Updating a permission policy affects all application access points (AAPs) that are bound to the permission policy. Exercise caution when you perform this operation.
     *   *
     * @param UpdatePolicyRequest $request UpdatePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePolicyResponse UpdatePolicyResponse
     */
    public function updatePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessControlRules)) {
            $query['AccessControlRules'] = $request->accessControlRules;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->permissions)) {
            $query['Permissions'] = $request->permissions;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePolicy',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * - You can update the role-based access control (RBAC) permissions, accessible resources, access control rules, and description of a permission policy. You cannot update the name or scope of a permission policy.
     *   * - Updating a permission policy affects all application access points (AAPs) that are bound to the permission policy. Exercise caution when you perform this operation.
     *   *
     * @param UpdatePolicyRequest $request UpdatePolicyRequest
     *
     * @return UpdatePolicyResponse UpdatePolicyResponse
     */
    public function updatePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyWithOptions($request, $runtime);
    }

    /**
     * When automatic key rotation is enabled, KMS automatically creates a key version after the preset rotation period arrives. In addition, KMS sets the new key version as the primary key version.
     *   * An automatic key rotation policy cannot be configured for the following keys:
     *   * *   Asymmetric key
     *   * *   Service-managed key
     *   * *   Bring your own key (BYOK) that is imported into KMS
     *   * *   Key that is not in the **Enabled** state
     *   * In this example, automatic key rotation is enabled for a CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****`. The automatic rotation period is 30 days.
     *   *
     * @param UpdateRotationPolicyRequest $request UpdateRotationPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRotationPolicyResponse UpdateRotationPolicyResponse
     */
    public function updateRotationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableAutomaticRotation)) {
            $query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->rotationInterval)) {
            $query['RotationInterval'] = $request->rotationInterval;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRotationPolicy',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateRotationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRotationPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * When automatic key rotation is enabled, KMS automatically creates a key version after the preset rotation period arrives. In addition, KMS sets the new key version as the primary key version.
     *   * An automatic key rotation policy cannot be configured for the following keys:
     *   * *   Asymmetric key
     *   * *   Service-managed key
     *   * *   Bring your own key (BYOK) that is imported into KMS
     *   * *   Key that is not in the **Enabled** state
     *   * In this example, automatic key rotation is enabled for a CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****`. The automatic rotation period is 30 days.
     *   *
     * @param UpdateRotationPolicyRequest $request UpdateRotationPolicyRequest
     *
     * @return UpdateRotationPolicyResponse UpdateRotationPolicyResponse
     */
    public function updateRotationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRotationPolicyWithOptions($request, $runtime);
    }

    /**
     * In this example, the metadata of the `secret001` secret is updated. The `Description` parameter is set to `datainfo`.
     *   *
     * @param UpdateSecretRequest $request UpdateSecretRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSecretResponse UpdateSecretResponse
     */
    public function updateSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->extendedConfig)) {
            $query['ExtendedConfig'] = $request->extendedConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSecret',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSecretResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * In this example, the metadata of the `secret001` secret is updated. The `Description` parameter is set to `datainfo`.
     *   *
     * @param UpdateSecretRequest $request UpdateSecretRequest
     *
     * @return UpdateSecretResponse UpdateSecretResponse
     */
    public function updateSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretWithOptions($request, $runtime);
    }

    /**
     * After automatic rotation is enabled, Secrets Manager schedules the first automatic rotation by adding the preset rotation interval to the timestamp of the last rotation.
     *   * Limits: The UpdateSecretRotationPolicy operation cannot be used to update the rotation policy of generic secrets.
     *   * In this example, the rotation policy of the `RdsSecret/Mysql5.4/MyCred` secret is updated. The following settings are modified:
     *   * *   The `EnableAutomaticRotation` parameter is set to `true`, which indicates that automatic rotation is enabled.
     *   * *   The `RotationInterval` parameter is set to `30d`, which indicates that the interval for automatic rotation is 30 days.
     *   *
     * @param UpdateSecretRotationPolicyRequest $request UpdateSecretRotationPolicyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSecretRotationPolicyResponse UpdateSecretRotationPolicyResponse
     */
    public function updateSecretRotationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableAutomaticRotation)) {
            $query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }
        if (!Utils::isUnset($request->rotationInterval)) {
            $query['RotationInterval'] = $request->rotationInterval;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSecretRotationPolicy',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSecretRotationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSecretRotationPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * After automatic rotation is enabled, Secrets Manager schedules the first automatic rotation by adding the preset rotation interval to the timestamp of the last rotation.
     *   * Limits: The UpdateSecretRotationPolicy operation cannot be used to update the rotation policy of generic secrets.
     *   * In this example, the rotation policy of the `RdsSecret/Mysql5.4/MyCred` secret is updated. The following settings are modified:
     *   * *   The `EnableAutomaticRotation` parameter is set to `true`, which indicates that automatic rotation is enabled.
     *   * *   The `RotationInterval` parameter is set to `30d`, which indicates that the interval for automatic rotation is 30 days.
     *   *
     * @param UpdateSecretRotationPolicyRequest $request UpdateSecretRotationPolicyRequest
     *
     * @return UpdateSecretRotationPolicyResponse UpdateSecretRotationPolicyResponse
     */
    public function updateSecretRotationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretRotationPolicyWithOptions($request, $runtime);
    }

    /**
     * Updates the stage label that marks a secret version.
     *   *
     * @param UpdateSecretVersionStageRequest $request UpdateSecretVersionStageRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSecretVersionStageResponse UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->moveToVersion)) {
            $query['MoveToVersion'] = $request->moveToVersion;
        }
        if (!Utils::isUnset($request->removeFromVersion)) {
            $query['RemoveFromVersion'] = $request->removeFromVersion;
        }
        if (!Utils::isUnset($request->secretName)) {
            $query['SecretName'] = $request->secretName;
        }
        if (!Utils::isUnset($request->versionStage)) {
            $query['VersionStage'] = $request->versionStage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSecretVersionStage',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSecretVersionStageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSecretVersionStageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the stage label that marks a secret version.
     *   *
     * @param UpdateSecretVersionStageRequest $request UpdateSecretVersionStageRequest
     *
     * @return UpdateSecretVersionStageResponse UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecretVersionStageWithOptions($request, $runtime);
    }

    /**
     * In this example, a certificate issued by a CA is imported into Certificates Manager. The ID of the certificate in Certificates Manager is `12345678-1234-1234-1234-12345678****`.
     *   *
     * @param UploadCertificateRequest $request UploadCertificateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadCertificateResponse UploadCertificateResponse
     */
    public function uploadCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificate)) {
            $query['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->certificateChain)) {
            $query['CertificateChain'] = $request->certificateChain;
        }
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadCertificate',
            'version'     => '2016-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UploadCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * In this example, a certificate issued by a CA is imported into Certificates Manager. The ID of the certificate in Certificates Manager is `12345678-1234-1234-1234-12345678****`.
     *   *
     * @param UploadCertificateRequest $request UploadCertificateRequest
     *
     * @return UploadCertificateResponse UploadCertificateResponse
     */
    public function uploadCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCertificateWithOptions($request, $runtime);
    }
}
