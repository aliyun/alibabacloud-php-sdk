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
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateMacRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GenerateMacResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetClientKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetClientKeyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetDefaultKmsInstanceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKeyPolicyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKeyPolicyResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceQuotaInfosRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceQuotaInfosResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponse;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetManagedDataKeyRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetManagedDataKeyResponse;
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
use AlibabaCloud\SDK\Kms\V20160120\Models\ListManagedDataKeyVersionsRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListManagedDataKeyVersionsResponse;
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
use AlibabaCloud\SDK\Kms\V20160120\Models\VerifyMacRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\VerifyMacResponse;
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
        $this->_endpointMap = [
            'us-west-1' => 'kms.us-west-1.aliyuncs.com',
            'us-east-1' => 'kms.us-east-1.aliyuncs.com',
            'me-east-1' => 'kms.me-east-1.aliyuncs.com',
            'me-central-1' => 'kms.me-central-1.aliyuncs.com',
            'eu-west-1' => 'kms.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'kms.eu-central-1.aliyuncs.com',
            'cn-zhengzhou-jva' => 'kms.cn-zhengzhou-jva.aliyuncs.com',
            'cn-zhangjiakou' => 'kms.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu' => 'kms.cn-wulanchabu.aliyuncs.com',
            'cn-wuhan-lr' => 'kms.cn-wuhan-lr.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'kms.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-shenzhen' => 'kms.cn-shenzhen.aliyuncs.com',
            'cn-shanghai-finance-1' => 'kms.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shanghai' => 'kms.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'kms.cn-qingdao.aliyuncs.com',
            'cn-huhehaote' => 'kms.cn-huhehaote.aliyuncs.com',
            'cn-hongkong' => 'kms.cn-hongkong.aliyuncs.com',
            'cn-heyuan' => 'kms.cn-heyuan.aliyuncs.com',
            'cn-hangzhou-finance' => 'kms.cn-hangzhou-finance.aliyuncs.com',
            'cn-hangzhou' => 'kms.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'kms.cn-guangzhou.aliyuncs.com',
            'cn-fuzhou' => 'kms.cn-fuzhou.aliyuncs.com',
            'cn-chengdu' => 'kms.cn-chengdu.aliyuncs.com',
            'cn-beijing-finance-1' => 'kms.cn-beijing-finance-1.aliyuncs.com',
            'cn-beijing' => 'kms.cn-beijing.aliyuncs.com',
            'ap-southeast-7' => 'kms.ap-southeast-7.aliyuncs.com',
            'ap-southeast-6' => 'kms.ap-southeast-6.aliyuncs.com',
            'ap-southeast-5' => 'kms.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'kms.ap-southeast-3.aliyuncs.com',
            'ap-southeast-1' => 'kms.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2' => 'kms.ap-northeast-2.aliyuncs.com',
            'ap-northeast-1' => 'kms.ap-northeast-1.aliyuncs.com',
        ];
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
     * Decrypts data by using the private key of an asymmetric CMK.
     *
     * @remarks
     * ### Usage notes
     * - For information about the access policy required for a RAM user or RAM role to call this API operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. To access KMS over the Internet, you must enable the public endpoint. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - If you use a shared gateway, the queries per second (QPS) limit for each Alibaba Cloud account is 200. If the QPS exceeds the limit, the API call is throttled. This can affect your business. We recommend that you plan your calls to avoid exceeding this limit.
     * - If you use a dedicated gateway, the QPS limit for each Alibaba Cloud account is subject to the performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table describes the supported encryption algorithms.
     * | KeySpec   | Algorithm             | Description                                        | Ciphertext length (bytes) |
     * | --------- | --------------------- | -------------------------------------------------- | ------------------------- |
     * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256     | 256                       |
     * | RSA_2048 | RSAES_OAEP_SHA_1   | RSAES-OAEP using SHA1 and MGF1 with SHA1           | 256                       |
     * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256     | 384                       |
     * | RSA_3072 | RSAES_OAEP_SHA_1   | RSAES-OAEP using SHA1 and MGF1 with SHA1           | 384                       |
     * | EC_SM2   | SM2PKE                | SM2 elliptic curve public key encryption algorithm | Maximum 6,144             |
     * This topic provides an example of how to use the asymmetric key whose ID is `key-hzz630494463ejqjx****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` to decrypt the ciphertext `BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1W****==` using the `RSAES_OAEP_SHA_1` decryption algorithm.
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
     * Decrypts data by using the private key of an asymmetric CMK.
     *
     * @remarks
     * ### Usage notes
     * - For information about the access policy required for a RAM user or RAM role to call this API operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. To access KMS over the Internet, you must enable the public endpoint. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - If you use a shared gateway, the queries per second (QPS) limit for each Alibaba Cloud account is 200. If the QPS exceeds the limit, the API call is throttled. This can affect your business. We recommend that you plan your calls to avoid exceeding this limit.
     * - If you use a dedicated gateway, the QPS limit for each Alibaba Cloud account is subject to the performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **ENCRYPT/DECRYPT**. The following table describes the supported encryption algorithms.
     * | KeySpec   | Algorithm             | Description                                        | Ciphertext length (bytes) |
     * | --------- | --------------------- | -------------------------------------------------- | ------------------------- |
     * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256     | 256                       |
     * | RSA_2048 | RSAES_OAEP_SHA_1   | RSAES-OAEP using SHA1 and MGF1 with SHA1           | 256                       |
     * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256     | 384                       |
     * | RSA_3072 | RSAES_OAEP_SHA_1   | RSAES-OAEP using SHA1 and MGF1 with SHA1           | 384                       |
     * | EC_SM2   | SM2PKE                | SM2 elliptic curve public key encryption algorithm | Maximum 6,144             |
     * This topic provides an example of how to use the asymmetric key whose ID is `key-hzz630494463ejqjx****` and version ID is `2ab1a983-7072-4bbc-a582-584b5bd8****` to decrypt the ciphertext `BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1W****==` using the `RSAES_OAEP_SHA_1` decryption algorithm.
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
     * Encrypts data by using the public key of an asymmetric CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the permissions that are required to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or using a VPC domain name. To access KMS over the Internet, you must enable Internet access. For more information, see [Access a key in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - If you use a shared gateway: The number of queries per second (QPS) for a single user is limited to 200. If the limit is exceeded, API calls are throttled. This may affect your business. We recommend that you plan your API calls to avoid exceeding this limit.
     * - If you use a dedicated gateway: The QPS limit for a single user depends on the computing performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation supports only asymmetric keys that have the **Usage** parameter set to **ENCRYPT/DECRYPT**. The following table describes the supported encryption algorithms.
     * | KeySpec   | Algorithm             | Description                                        | Maximum number of bytes that can be encrypted |
     * | --------- | --------------------- | -------------------------------------------------- | --------------------------------------------- |
     * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256     | 190                                           |
     * | RSA_2048 | RSAES_OAEP_SHA_1   | RSAES-OAEP using SHA1 and MGF1 with SHA1           | 214                                           |
     * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256     | 318                                           |
     * | RSA_3072 | RSAES_OAEP_SHA_1   | RSAES-OAEP using SHA1 and MGF1 with SHA1           | 342                                           |
     * | EC_SM2   | SM2PKE                | SM2 elliptic curve public key encryption algorithm | 6047                                          |
     * In this example, the plaintext `SGVsbG8gd29ybGQ=` is encrypted using an asymmetric key with the key ID `key-hzz630494463ejqjx****`, the key version ID `2ab1a983-7072-4bbc-a582-584b5bd8****`, and the `RSAES_OAEP_SHA_1` encryption algorithm.
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
     * Encrypts data by using the public key of an asymmetric CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the permissions that are required to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or using a VPC domain name. To access KMS over the Internet, you must enable Internet access. For more information, see [Access a key in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - If you use a shared gateway: The number of queries per second (QPS) for a single user is limited to 200. If the limit is exceeded, API calls are throttled. This may affect your business. We recommend that you plan your API calls to avoid exceeding this limit.
     * - If you use a dedicated gateway: The QPS limit for a single user depends on the computing performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation supports only asymmetric keys that have the **Usage** parameter set to **ENCRYPT/DECRYPT**. The following table describes the supported encryption algorithms.
     * | KeySpec   | Algorithm             | Description                                        | Maximum number of bytes that can be encrypted |
     * | --------- | --------------------- | -------------------------------------------------- | --------------------------------------------- |
     * | RSA_2048 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256     | 190                                           |
     * | RSA_2048 | RSAES_OAEP_SHA_1   | RSAES-OAEP using SHA1 and MGF1 with SHA1           | 214                                           |
     * | RSA_3072 | RSAES_OAEP_SHA_256 | RSAES-OAEP using SHA-256 and MGF1 with SHA-256     | 318                                           |
     * | RSA_3072 | RSAES_OAEP_SHA_1   | RSAES-OAEP using SHA1 and MGF1 with SHA1           | 342                                           |
     * | EC_SM2   | SM2PKE                | SM2 elliptic curve public key encryption algorithm | 6047                                          |
     * In this example, the plaintext `SGVsbG8gd29ybGQ=` is encrypted using an asymmetric key with the key ID `key-hzz630494463ejqjx****`, the key version ID `2ab1a983-7072-4bbc-a582-584b5bd8****`, and the `RSAES_OAEP_SHA_1` encryption algorithm.
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
     * Generates a digital signature by using an asymmetric CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policies that are required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. This method requires you to enable Internet access. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - Shared gateway: This operation is limited to 200 queries per second (QPS) for each user. If the limit is exceeded, API calls are throttled, which may affect your business. We recommend that you call this operation at a reasonable rate.
     * - Dedicated gateway: The QPS for each user is limited by the performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **SIGN/VERIFY**. The following table describes the supported signature algorithms.
     * | KeySpec   | Algorithm            | Description                                                |
     * | --------- | -------------------- | ---------------------------------------------------------- |
     * | RSA_2048 | RSA_PSS_SHA_256   | RSASSA-PSS using SHA-256 and MGF1 with SHA-256             |
     * | RSA_2048 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256                           |
     * | RSA_3072 | RSA_PSS_SHA_256   | RSASSA-PSS using SHA-256 and MGF1 with SHA-256             |
     * | RSA_3072 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256                           |
     * | EC_P256  | ECDSA_SHA_256      | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest  |
     * | EC_P256K | ECDSA_SHA_256      | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |
     * | EC_SM2   | SM2DSA               | SM2 elliptic curve digital signature algorithm             |
     * > According to the GB/T 32918.2 standard "Information security technology - SM2 elliptic curve public key cryptography - Part 2: Digital signature algorithm", when you calculate an SM2 signature, the value of the **Digest** parameter is not the SM3 hash value of the original message. Instead, the value is the SM3 hash value of the result of concatenating Z(A) and M. M is the original message to be signed. Z(A) is the hash value of user A, as defined in GB/T 32918.2.
     * This topic provides an example of how to use an asymmetric key with the key ID `5c438b18-05be-40ad-b6c2-3be6752c****` and the key version ID `2ab1a983-7072-4bbc-a582-584b5bd8****` to sign the digest `ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuy****=` using the `RSA_PSS_SHA_256` signature algorithm.
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
     * Generates a digital signature by using an asymmetric CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policies that are required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. This method requires you to enable Internet access. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - Shared gateway: This operation is limited to 200 queries per second (QPS) for each user. If the limit is exceeded, API calls are throttled, which may affect your business. We recommend that you call this operation at a reasonable rate.
     * - Dedicated gateway: The QPS for each user is limited by the performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **SIGN/VERIFY**. The following table describes the supported signature algorithms.
     * | KeySpec   | Algorithm            | Description                                                |
     * | --------- | -------------------- | ---------------------------------------------------------- |
     * | RSA_2048 | RSA_PSS_SHA_256   | RSASSA-PSS using SHA-256 and MGF1 with SHA-256             |
     * | RSA_2048 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256                           |
     * | RSA_3072 | RSA_PSS_SHA_256   | RSASSA-PSS using SHA-256 and MGF1 with SHA-256             |
     * | RSA_3072 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256                           |
     * | EC_P256  | ECDSA_SHA_256      | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest  |
     * | EC_P256K | ECDSA_SHA_256      | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |
     * | EC_SM2   | SM2DSA               | SM2 elliptic curve digital signature algorithm             |
     * > According to the GB/T 32918.2 standard "Information security technology - SM2 elliptic curve public key cryptography - Part 2: Digital signature algorithm", when you calculate an SM2 signature, the value of the **Digest** parameter is not the SM3 hash value of the original message. Instead, the value is the SM3 hash value of the result of concatenating Z(A) and M. M is the original message to be signed. Z(A) is the hash value of user A, as defined in GB/T 32918.2.
     * This topic provides an example of how to use an asymmetric key with the key ID `5c438b18-05be-40ad-b6c2-3be6752c****` and the key version ID `2ab1a983-7072-4bbc-a582-584b5bd8****` to sign the digest `ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuy****=` using the `RSA_PSS_SHA_256` signature algorithm.
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
     * Verifies a digital signature by using the public key of an asymmetric CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy required for a RAM user or RAM role to call this API operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or through a VPC. To access KMS over the Internet, you must enable the public endpoint. For more information, see [Access KMS instances over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - If you use a shared gateway, the queries per second (QPS) limit for this operation is 200 for a single user. If you exceed this limit, API calls are throttled, which may impact your business. We recommend that you manage your call frequency to stay within the QPS limit.
     * - If you use a dedicated gateway, the QPS limit for this operation for a single user is determined by the computing performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **SIGN/VERIFY**. The following table lists the supported signature algorithms.
     * | KeySpec   | Algorithm            | Description                                                |
     * | --------- | -------------------- | ---------------------------------------------------------- |
     * | RSA_2048 | RSA_PSS_SHA_256   | RSASSA-PSS using SHA-256 and MGF1 with SHA-256             |
     * | RSA_2048 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256                           |
     * | RSA_3072 | RSA_PSS_SHA_256   | RSASSA-PSS using SHA-256 and MGF1 with SHA-256             |
     * | RSA_3072 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256                           |
     * | EC_P256  | ECDSA_SHA_256      | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest  |
     * | EC_P256K | ECDSA_SHA_256      | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |
     * | EC_SM2   | SM2DSA               | SM2 elliptic curve digital signature algorithm             |
     * > In accordance with the GBT32918 standard, when an SM2 signature is calculated, the value of the **Digest** parameter is not the SM3 hash value of the original message. Instead, the value is the SM3 hash value of the result generated by concatenating Z(A) and M. In this formula, M is the original message to be signed, and Z(A) is the hash value of user A as defined in GBT32918.
     * This topic provides an example of how to use an asymmetric key with the key ID \\`5c438b18-05be-40ad-b6c2-3be6752c\\*\\*\\*\\*\\` and the key version ID \\`2ab1a983-7072-4bbc-a582-584b5bd8\\*\\*\\*\\*\\` to verify the signature \\`M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq\\*\\*\\*\\*==\\` for the digest \\`ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuyjfzw=\\` using the RSA_PSS_SHA_256 signature algorithm.
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
     * Verifies a digital signature by using the public key of an asymmetric CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy required for a RAM user or RAM role to call this API operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or through a VPC. To access KMS over the Internet, you must enable the public endpoint. For more information, see [Access KMS instances over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - If you use a shared gateway, the queries per second (QPS) limit for this operation is 200 for a single user. If you exceed this limit, API calls are throttled, which may impact your business. We recommend that you manage your call frequency to stay within the QPS limit.
     * - If you use a dedicated gateway, the QPS limit for this operation for a single user is determined by the computing performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation supports only asymmetric keys for which the **Usage** parameter is set to **SIGN/VERIFY**. The following table lists the supported signature algorithms.
     * | KeySpec   | Algorithm            | Description                                                |
     * | --------- | -------------------- | ---------------------------------------------------------- |
     * | RSA_2048 | RSA_PSS_SHA_256   | RSASSA-PSS using SHA-256 and MGF1 with SHA-256             |
     * | RSA_2048 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256                           |
     * | RSA_3072 | RSA_PSS_SHA_256   | RSASSA-PSS using SHA-256 and MGF1 with SHA-256             |
     * | RSA_3072 | RSA_PKCS1_SHA_256 | RSASSA-PKCS1-v1_5 using SHA-256                           |
     * | EC_P256  | ECDSA_SHA_256      | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest  |
     * | EC_P256K | ECDSA_SHA_256      | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |
     * | EC_SM2   | SM2DSA               | SM2 elliptic curve digital signature algorithm             |
     * > In accordance with the GBT32918 standard, when an SM2 signature is calculated, the value of the **Digest** parameter is not the SM3 hash value of the original message. Instead, the value is the SM3 hash value of the result generated by concatenating Z(A) and M. In this formula, M is the original message to be signed, and Z(A) is the hash value of user A as defined in GBT32918.
     * This topic provides an example of how to use an asymmetric key with the key ID \\`5c438b18-05be-40ad-b6c2-3be6752c\\*\\*\\*\\*\\` and the key version ID \\`2ab1a983-7072-4bbc-a582-584b5bd8\\*\\*\\*\\*\\` to verify the signature \\`M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq\\*\\*\\*\\*==\\` for the digest \\`ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuyjfzw=\\` using the RSA_PSS_SHA_256 signature algorithm.
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
     * Cancels the deletion task of a CMK.
     *
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
     * Cancels the deletion task of a CMK.
     *
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
     * Creates an alias for a key.
     *
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
     * Creates an alias for a key.
     *
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
     * Creates a customer master key (CMK) for envelope encryption, digital signatures, or other cryptographic operations.
     *
     * @remarks
     * - For information about the access policies required for a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Alibaba Cloud Key Management Service (KMS) supports common specifications for symmetric and asymmetric keys. For more information, see [Key management types and key specifications](https://help.aliyun.com/document_detail/480161.html).
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
     * Creates a customer master key (CMK) for envelope encryption, digital signatures, or other cryptographic operations.
     *
     * @remarks
     * - For information about the access policies required for a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Alibaba Cloud Key Management Service (KMS) supports common specifications for symmetric and asymmetric keys. For more information, see [Key management types and key specifications](https://help.aliyun.com/document_detail/480161.html).
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
     * Creates a version for a customer master key (CMK).
     *
     * @remarks
     * - You can create a version only for an asymmetric CMK that is in the Enabled state. You can call the [CreateKey](https://help.aliyun.com/document_detail/28947.html) operation to create an asymmetric CMK and the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the status of the CMK. The status is specified by the KeyState parameter.
     * - The minimum interval for creating a version of the same CMK is seven days. You can call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the time when the last version of a CMK was created. The time is specified by the LastRotationDate parameter.
     * - If a CMK is in a private key store, you cannot create a version for the CMK.
     * - You can create a maximum of 50 versions for a CMK in the same region.
     * You can create a version for the CMK whose ID is `0b30658a-ed1a-4922-b8f7-a673ca9c****` by using the parameter settings provided in this topic.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Creates a version for a customer master key (CMK).
     *
     * @remarks
     * - You can create a version only for an asymmetric CMK that is in the Enabled state. You can call the [CreateKey](https://help.aliyun.com/document_detail/28947.html) operation to create an asymmetric CMK and the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the status of the CMK. The status is specified by the KeyState parameter.
     * - The minimum interval for creating a version of the same CMK is seven days. You can call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the time when the last version of a CMK was created. The time is specified by the LastRotationDate parameter.
     * - If a CMK is in a private key store, you cannot create a version for the CMK.
     * - You can create a maximum of 50 versions for a CMK in the same region.
     * You can create a version for the CMK whose ID is `0b30658a-ed1a-4922-b8f7-a673ca9c****` by using the parameter settings provided in this topic.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Creates a network access rule to configure the private IP addresses or private CIDR blocks that are allowed to access a Key Management Service (KMS) instance.
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
     * Creates a network access rule to configure the private IP addresses or private CIDR blocks that are allowed to access a Key Management Service (KMS) instance.
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
     * Creates a secret and stores its initial version.
     *
     * @remarks
     * - For information about the access policy required for a Resource Access Management (RAM) user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Specify the secret name, the secret value for the initial version, and the version number. The initial version is marked with the ACSCurrent stage label.
     * - Key Management Service (KMS) uses the key that you specify to encrypt the secret value. The key and the secret must be in the same KMS instance. The key must be a symmetric key.
     *   > KMS encrypts the secret value of each version. Metadata such as the secret name, version number, and version stage labels are not encrypted.
     * - Before you encrypt the secret value, you must have the `kms:GenerateDataKey` permission on the key.
     * This topic provides an example of how to create an RDS secret. The secret is named `mydbconninfo`. The `VersionId` of the initial version is `v1`. The `SecretData` is `{"Accounts":[{"AccountName":"user1","AccountPassword":"****"}]}`.
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
     * Creates a secret and stores its initial version.
     *
     * @remarks
     * - For information about the access policy required for a Resource Access Management (RAM) user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Specify the secret name, the secret value for the initial version, and the version number. The initial version is marked with the ACSCurrent stage label.
     * - Key Management Service (KMS) uses the key that you specify to encrypt the secret value. The key and the secret must be in the same KMS instance. The key must be a symmetric key.
     *   > KMS encrypts the secret value of each version. Metadata such as the secret name, version number, and version stage labels are not encrypted.
     * - Before you encrypt the secret value, you must have the `kms:GenerateDataKey` permission on the key.
     * This topic provides an example of how to create an RDS secret. The secret is named `mydbconninfo`. The `VersionId` of the initial version is `v1`. The `SecretData` is `{"Accounts":[{"AccountName":"user1","AccountPassword":"****"}]}`.
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
     * Decrypts ciphertext that was encrypted by using a CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or using a VPC domain name. To use a shared gateway, you must enable Internet access. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - Shared gateway: The queries per second (QPS) limit for a single user for this operation is 1,000. If this limit is exceeded, API calls are throttled, which may affect your business. We recommend that you plan your calls accordingly.
     * - Dedicated gateway: The QPS limit for a single user for this operation is subject to the performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
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

        if (null !== $request->recipient) {
            @$query['Recipient'] = $request->recipient;
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
     * Decrypts ciphertext that was encrypted by using a CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or using a VPC domain name. To use a shared gateway, you must enable Internet access. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - Shared gateway: The queries per second (QPS) limit for a single user for this operation is 1,000. If this limit is exceeded, API calls are throttled, which may affect your business. We recommend that you plan your calls accordingly.
     * - Dedicated gateway: The QPS limit for a single user for this operation is subject to the performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
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
     * Deletes an alias.
     *
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
     * Deletes an alias.
     *
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
     * - For information about the access policy that a RAM user or RAM role requires to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Before you delete an AAP, make sure that it is no longer in use. If you delete an AAP that is in use, related applications cannot access KMS. Proceed with caution.
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
     * - For information about the access policy that a RAM user or RAM role requires to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Before you delete an AAP, make sure that it is no longer in use. If you delete an AAP that is in use, related applications cannot access KMS. Proceed with caution.
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
     * Deletes a client key.
     *
     * @remarks
     * - For information about the access policy required for a RAM user or RAM role to call this API operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Before you delete a ClientKey, make sure that it is no longer in use. Deleting a ClientKey that is in use prevents related applications from accessing KMS. Proceed with caution.
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
     * Deletes a client key.
     *
     * @remarks
     * - For information about the access policy required for a RAM user or RAM role to call this API operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Before you delete a ClientKey, make sure that it is no longer in use. Deleting a ClientKey that is in use prevents related applications from accessing KMS. Proceed with caution.
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
     * Deletes the imported key material from a CMK. After deletion, the CMK enters the PendingImport state until you re-import key material.
     *
     * @remarks
     * This operation does not delete the CMK that is created by using the key material.
     * If the CMK is in the PendingDeletion state, the state of the CMK and the scheduled deletion time do not change after you call this operation. If the CMK is not in the PendingDeletion state, the state of the CMK changes to PendingImport after you call this operation.
     * After you delete the key material, you can upload only the same key material into the CMK.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Deletes the imported key material from a CMK. After deletion, the CMK enters the PendingImport state until you re-import key material.
     *
     * @remarks
     * This operation does not delete the CMK that is created by using the key material.
     * If the CMK is in the PendingDeletion state, the state of the CMK and the scheduled deletion time do not change after you call this operation. If the CMK is not in the PendingDeletion state, the state of the CMK changes to PendingImport after you call this operation.
     * After you delete the key material, you can upload only the same key material into the CMK.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * - For information about the access policy that is required to call this OpenAPI as a Resource Access Management (RAM) user or RAM role, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Before deleting the network control rule, ensure that it is not attached to any access policies. Otherwise, related applications cannot access KMS as expected.
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
     * - For information about the access policy that is required to call this OpenAPI as a Resource Access Management (RAM) user or RAM role, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Before deleting the network control rule, ensure that it is not attached to any access policies. Otherwise, related applications cannot access KMS as expected.
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
     * Deletes a secret.
     *
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
     * Deletes a secret.
     *
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
     * Queries the status of Key Management Service (KMS) within your Alibaba Cloud account.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     *
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
     * Queries the status of Key Management Service (KMS) within your Alibaba Cloud account.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     *
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
     * Retrieves the details of an application access point (AAP).
     *
     * @remarks
     * For information about the access policy that a Resource Access Management (RAM) user or RAM role must have to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Retrieves the details of an application access point (AAP).
     *
     * @remarks
     * For information about the access policy that a Resource Access Management (RAM) user or RAM role must have to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the metadata of a CMK, such as the key state, usage, and rotation configuration.
     *
     * @remarks
     * You can query the information about the CMK `05754286-3ba2-4fa6-8d41-4323aca6****` by using parameter settings provided in this topic. The information includes the creator, creation time, status, and deletion protection status of the CMK.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the metadata of a CMK, such as the key state, usage, and rotation configuration.
     *
     * @remarks
     * You can query the information about the CMK `05754286-3ba2-4fa6-8d41-4323aca6****` by using parameter settings provided in this topic. The information includes the creator, creation time, status, and deletion protection status of the CMK.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the metadata of a specific CMK version.
     *
     * @remarks
     * This topic provides an example on how to query the information about a version of the CMK `1234abcd-12ab-34cd-56ef-12345678****`. The ID of the CMK version is `2ab1a983-7072-4bbc-a582-584b5bd8****`. The response shows that the creation time of the CMK version is `2016-03-25T10:42:40Z`.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the metadata of a specific CMK version.
     *
     * @remarks
     * This topic provides an example on how to query the information about a version of the CMK `1234abcd-12ab-34cd-56ef-12345678****`. The ID of the CMK version is `2ab1a983-7072-4bbc-a582-584b5bd8****`. The response shows that the creation time of the CMK version is `2016-03-25T10:42:40Z`.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Retrieves the details of a network access rule.
     *
     * @remarks
     * For information about the required access policy for a Resource Access Management (RAM) user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Retrieves the details of a network access rule.
     *
     * @remarks
     * For information about the required access policy for a Resource Access Management (RAM) user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Retrieves the details of a permission policy.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Retrieves the details of a permission policy.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the regions where KMS is available.
     *
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
     * Queries the regions where KMS is available.
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
     * Queries the metadata of a secret.
     *
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
     * Queries the metadata of a secret.
     *
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
     * Disables a key.
     *
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
     * Disables a key.
     *
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
     * Enables a key to encrypt and decrypt data.
     *
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
     * Enables a key to encrypt and decrypt data.
     *
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
     * Encrypts plaintext by using a symmetric CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy required to allow a RAM user or RAM role to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. To use this method, you must enable Internet access. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - When accessed through a shared gateway, the queries per second (QPS) limit for a single user is 1,000. If the limit is exceeded, requests are throttled, which can affect your business. We recommend that you stay within this limit to avoid throttling.
     * - When accessed through a dedicated gateway, the QPS limit for a single user is subject to the computing performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * - KMS encrypts the specified data using the primary version of a specified key.
     * - You can encrypt a maximum of 6 KB of data, such as an RSA key, a database password, or other sensitive information.
     * - If you migrate encrypted data from one region to another, you can call the Encrypt operation in the destination region to re-encrypt the plaintext data key from the source region. This generates a new encrypted data key. You can then call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt this new key in the destination region.
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
     * Encrypts plaintext by using a symmetric CMK.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy required to allow a RAM user or RAM role to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. To use this method, you must enable Internet access. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - When accessed through a shared gateway, the queries per second (QPS) limit for a single user is 1,000. If the limit is exceeded, requests are throttled, which can affect your business. We recommend that you stay within this limit to avoid throttling.
     * - When accessed through a dedicated gateway, the QPS limit for a single user is subject to the computing performance specifications of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * - KMS encrypts the specified data using the primary version of a specified key.
     * - You can encrypt a maximum of 6 KB of data, such as an RSA key, a database password, or other sensitive information.
     * - If you migrate encrypted data from one region to another, you can call the Encrypt operation in the destination region to re-encrypt the plaintext data key from the source region. This generates a new encrypted data key. You can then call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt this new key in the destination region.
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
     * Exports a data key encrypted by a CMK. The data key is re-encrypted by a public key that you specify for secure transmission.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy required for a RAM user or RAM role to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS using the public endpoint or a VPC endpoint. To use the public endpoint, you must first enable it. For more information, see [Access the key in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of the KMS instance: `<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`.
     * ### Description
     * After you call the [GenerateDataKeyWithoutPlaintext](https://help.aliyun.com/document_detail/134043.html) operation to obtain a data key encrypted by a master key (CMK), you can use the ExportDataKey operation to distribute the data key to other regions or cryptographic modules. The ExportDataKey operation returns the ciphertext of the data key, re-encrypted with the specified public key.
     * You can import the exported ciphertext into the cryptographic module that holds the corresponding private key. This process lets you securely distribute the data key from KMS to a cryptographic module. After the data key is imported into the cryptographic module, you can use it to encrypt or decrypt data.
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
     * Exports a data key encrypted by a CMK. The data key is re-encrypted by a public key that you specify for secure transmission.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy required for a RAM user or RAM role to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS using the public endpoint or a VPC endpoint. To use the public endpoint, you must first enable it. For more information, see [Access the key in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of the KMS instance: `<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`.
     * ### Description
     * After you call the [GenerateDataKeyWithoutPlaintext](https://help.aliyun.com/document_detail/134043.html) operation to obtain a data key encrypted by a master key (CMK), you can use the ExportDataKey operation to distribute the data key to other regions or cryptographic modules. The ExportDataKey operation returns the ciphertext of the data key, re-encrypted with the specified public key.
     * You can import the exported ciphertext into the cryptographic module that holds the corresponding private key. This process lets you securely distribute the data key from KMS to a cryptographic module. After the data key is imported into the cryptographic module, you can use it to encrypt or decrypt data.
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
     * Generates a random data key, encrypts it by using a CMK and a public key that you specify, and returns both ciphertexts.
     *
     * @remarks
     * ### Notes
     * - For more information about the access policy required for a RAM user or RAM role to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. To access KMS over the Internet, you must enable Internet access. For more information, see [Access KMS instances over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### Description
     * We recommend that you import the data key to a cryptographic module for data encryption and data decryption as follows:
     * 1\\. Call the GenerateAndExportDataKey operation to obtain the data key encrypted by a KMS key and a specified public key.
     * 2\\. Save the ciphertext of the data key that is encrypted by the KMS key to KMS or a storage service, such as ApsaraDB, for key backup and recovery.
     * 3\\. Import the ciphertext of the data key that is encrypted by the public key to the cryptographic module that contains the corresponding private key. This process distributes the key from KMS to the cryptographic module. You can then use the data key to encrypt and decrypt data.
     * > The KMS key that you specify in the request is used only to encrypt the data key and is not used to generate the data key. KMS does not record or store the randomly generated data key. You are responsible for recording the data key or its ciphertext.
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
     * Generates a random data key, encrypts it by using a CMK and a public key that you specify, and returns both ciphertexts.
     *
     * @remarks
     * ### Notes
     * - For more information about the access policy required for a RAM user or RAM role to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. To access KMS over the Internet, you must enable Internet access. For more information, see [Access KMS instances over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### Description
     * We recommend that you import the data key to a cryptographic module for data encryption and data decryption as follows:
     * 1\\. Call the GenerateAndExportDataKey operation to obtain the data key encrypted by a KMS key and a specified public key.
     * 2\\. Save the ciphertext of the data key that is encrypted by the KMS key to KMS or a storage service, such as ApsaraDB, for key backup and recovery.
     * 3\\. Import the ciphertext of the data key that is encrypted by the public key to the cryptographic module that contains the corresponding private key. This process distributes the key from KMS to the cryptographic module. You can then use the data key to encrypt and decrypt data.
     * > The KMS key that you specify in the request is used only to encrypt the data key and is not used to generate the data key. KMS does not record or store the randomly generated data key. You are responsible for recording the data key or its ciphertext.
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
     * Generates a random data key for envelope encryption. The data key is returned in both plaintext and ciphertext forms.
     *
     * @remarks
     * - For information about the permissions that are required to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called using a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. To access KMS over the Internet, you must enable the public endpoint. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - If you use a shared gateway to call this operation, the queries per second (QPS) limit for a single user is 1,000. If the limit is exceeded, API calls are throttled. This may affect your business. We recommend that you call this operation at a reasonable rate.
     * - If you use a dedicated gateway to call this operation, the QPS limit for a single user is based on the computing performance of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation generates a random data key, encrypts the data key using the specified customer master key (CMK), and returns the plaintext and ciphertext of the data key. You can use the plaintext of the data key to encrypt data locally and outside of KMS. When you store the encrypted data, you must also store the ciphertext of the data key. You can obtain the plaintext of the data key from the Plaintext field and the ciphertext of the data key from the CiphertextBlob field in the response.
     * The CMK that you specify in the request is used only to encrypt the data key. It is not involved in the generation of the data key. KMS does not record or store the randomly generated data key. You are responsible for the persistence of the ciphertext of the data key.
     * We recommend that you perform the following steps to encrypt data locally:
     * 1\\. Call the GenerateDataKey operation to obtain a data key for data encryption.
     * 2\\. Use the plaintext of the data key returned in the Plaintext field of the response to encrypt data locally. Then, clear the plaintext of the data key from memory.
     * 3\\. Store the ciphertext of the data key returned in the CiphertextBlob field of the response together with the encrypted data.
     * To decrypt data locally:
     * - Call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt the stored ciphertext of the data key. This operation returns the plaintext of the data key.
     * - Use the plaintext of the data key to decrypt data locally. Then, clear the plaintext of the data key from memory.
     * This topic provides an example of how to generate a random data key for a key with the ID `key-hzz630494463ejqjx****`.
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

        if (null !== $request->recipient) {
            @$query['Recipient'] = $request->recipient;
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
     * Generates a random data key for envelope encryption. The data key is returned in both plaintext and ciphertext forms.
     *
     * @remarks
     * - For information about the permissions that are required to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation can be called using a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or a VPC. To access KMS over the Internet, you must enable the public endpoint. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - If you use a shared gateway to call this operation, the queries per second (QPS) limit for a single user is 1,000. If the limit is exceeded, API calls are throttled. This may affect your business. We recommend that you call this operation at a reasonable rate.
     * - If you use a dedicated gateway to call this operation, the QPS limit for a single user is based on the computing performance of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Description
     * This operation generates a random data key, encrypts the data key using the specified customer master key (CMK), and returns the plaintext and ciphertext of the data key. You can use the plaintext of the data key to encrypt data locally and outside of KMS. When you store the encrypted data, you must also store the ciphertext of the data key. You can obtain the plaintext of the data key from the Plaintext field and the ciphertext of the data key from the CiphertextBlob field in the response.
     * The CMK that you specify in the request is used only to encrypt the data key. It is not involved in the generation of the data key. KMS does not record or store the randomly generated data key. You are responsible for the persistence of the ciphertext of the data key.
     * We recommend that you perform the following steps to encrypt data locally:
     * 1\\. Call the GenerateDataKey operation to obtain a data key for data encryption.
     * 2\\. Use the plaintext of the data key returned in the Plaintext field of the response to encrypt data locally. Then, clear the plaintext of the data key from memory.
     * 3\\. Store the ciphertext of the data key returned in the CiphertextBlob field of the response together with the encrypted data.
     * To decrypt data locally:
     * - Call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation to decrypt the stored ciphertext of the data key. This operation returns the plaintext of the data key.
     * - Use the plaintext of the data key to decrypt data locally. Then, clear the plaintext of the data key from memory.
     * This topic provides an example of how to generate a random data key for a key with the ID `key-hzz630494463ejqjx****`.
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
     * Generates a random data key in only ciphertext form, without the plaintext copy.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy that a RAM user or RAM role needs to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: Access KMS over the Internet or through a VPC domain name. This method requires Internet access to be enabled. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: Access KMS through a KMS private endpoint (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - Calls through a shared gateway: The queries per second (QPS) limit for a single user is 1,000. If you exceed this limit, requests are throttled, which may affect your business. We recommend that you stay within this limit.
     * - Calls through a dedicated gateway: The QPS limit for a single user depends on the computing performance of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Details
     * This operation generates a random data key, encrypts it with a specified symmetric customer master key (CMK), and returns the ciphertext of the data key. This operation provides the same features as [GenerateDataKey](https://help.aliyun.com/document_detail/28948.html). The only difference is that this operation does not return the plaintext of the data key.
     * The CMK that you specify in the request is used only to encrypt the data key. It is not used to generate the data key. KMS does not record or store the randomly generated data key.
     * > - This operation is suitable for systems that do not need to immediately use the data key for data encryption. When encryption is required, the system calls the [Decrypt](https://help.aliyun.com/document_detail/28950.html) API to decrypt the ciphertext of the data key.
     * >
     * > - This operation is also suitable for distributed systems with different trust levels. For example, your system stores data in different partitions based on a defined policy. A module pre-creates these data partitions and generates a unique data key for each one. After this module initializes the control plane, it acts as a key distributor and does not produce or consume data. When data plane modules produce and consume data, they first retrieve the ciphertext of the data key for a partition. They then decrypt the ciphertext and use the plaintext data key to encrypt or decrypt data. Finally, they purge the plaintext data key from memory. In such a system, the key distributor does not need to access the plaintext of the data key. It only requires the \\`GenerateDataKeyWithoutPlaintext\\` permission for the relevant CMK. Data producers and consumers do not need to generate new data keys. They only require the \\`Decrypt\\` permission for the relevant CMK.
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
     * Generates a random data key in only ciphertext form, without the plaintext copy.
     *
     * @remarks
     * ### Precautions
     * - For information about the access policy that a RAM user or RAM role needs to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible through a shared gateway or a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: Access KMS over the Internet or through a VPC domain name. This method requires Internet access to be enabled. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: Access KMS through a KMS private endpoint (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     * ### QPS limits
     * - Calls through a shared gateway: The queries per second (QPS) limit for a single user is 1,000. If you exceed this limit, requests are throttled, which may affect your business. We recommend that you stay within this limit.
     * - Calls through a dedicated gateway: The QPS limit for a single user depends on the computing performance of your KMS instance. For more information, see [Performance metrics](https://help.aliyun.com/document_detail/480120.html).
     * ### Details
     * This operation generates a random data key, encrypts it with a specified symmetric customer master key (CMK), and returns the ciphertext of the data key. This operation provides the same features as [GenerateDataKey](https://help.aliyun.com/document_detail/28948.html). The only difference is that this operation does not return the plaintext of the data key.
     * The CMK that you specify in the request is used only to encrypt the data key. It is not used to generate the data key. KMS does not record or store the randomly generated data key.
     * > - This operation is suitable for systems that do not need to immediately use the data key for data encryption. When encryption is required, the system calls the [Decrypt](https://help.aliyun.com/document_detail/28950.html) API to decrypt the ciphertext of the data key.
     * >
     * > - This operation is also suitable for distributed systems with different trust levels. For example, your system stores data in different partitions based on a defined policy. A module pre-creates these data partitions and generates a unique data key for each one. After this module initializes the control plane, it acts as a key distributor and does not produce or consume data. When data plane modules produce and consume data, they first retrieve the ciphertext of the data key for a partition. They then decrypt the ciphertext and use the plaintext data key to encrypt or decrypt data. Finally, they purge the plaintext data key from memory. In such a system, the key distributor does not need to access the plaintext of the data key. It only requires the \\`GenerateDataKeyWithoutPlaintext\\` permission for the relevant CMK. Data producers and consumers do not need to generate new data keys. They only require the \\`Decrypt\\` permission for the relevant CMK.
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
     * Generates an HMAC message authentication code for a message by using a specified key.
     *
     * @remarks
     * For details about the access policy required when a RAM user or RAM role invokes this operation, refer to access control.
     * This operation can be invoked through a shared gateway or a dedicated gateway. For more information, refer to Alibaba Cloud SDK.
     * - Shared gateway: Access KMS through a public or VPC endpoint. This method requires you to enable the public network access switch. For more information, refer to accessing keys in a KMS instance over the Internet.
     * - Dedicated gateway: Access KMS through a KMS private endpoint (<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com).
     *
     * @param request - GenerateMacRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateMacResponse
     *
     * @param GenerateMacRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GenerateMacResponse
     */
    public function generateMacWithOptions($request, $runtime)
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

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateMac',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateMacResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates an HMAC message authentication code for a message by using a specified key.
     *
     * @remarks
     * For details about the access policy required when a RAM user or RAM role invokes this operation, refer to access control.
     * This operation can be invoked through a shared gateway or a dedicated gateway. For more information, refer to Alibaba Cloud SDK.
     * - Shared gateway: Access KMS through a public or VPC endpoint. This method requires you to enable the public network access switch. For more information, refer to accessing keys in a KMS instance over the Internet.
     * - Dedicated gateway: Access KMS through a KMS private endpoint (<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com).
     *
     * @param request - GenerateMacRequest
     *
     * @returns GenerateMacResponse
     *
     * @param GenerateMacRequest $request
     *
     * @return GenerateMacResponse
     */
    public function generateMac($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateMacWithOptions($request, $runtime);
    }

    /**
     * Retrieves information about a client key.
     *
     * @remarks
     * For information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Retrieves information about a client key.
     *
     * @remarks
     * For information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the default KMS instance in a specified region.
     *
     * @remarks
     * - For information about the access policy that is required to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This API is for users who migrate from KMS 1.0 to KMS 3.0. After the migration is complete, if you create an Asset without specifying a KMS instance, the Asset is created in the default KMS instance.
     *
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
     * Queries the default KMS instance in a specified region.
     *
     * @remarks
     * - For information about the access policy that is required to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This API is for users who migrate from KMS 1.0 to KMS 3.0. After the migration is complete, if you create an Asset without specifying a KMS instance, the Asset is created in the default KMS instance.
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
     * Queries the key policy of a CMK in a KMS instance.
     *
     * @remarks
     * - For more information about the access policy required for a Resource Access Management (RAM) user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Because the key policy name can only be set to default, you must set the PolicyName parameter to default when you query the key policy. Otherwise, a `Not Found` error is returned.
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
     * Queries the key policy of a CMK in a KMS instance.
     *
     * @remarks
     * - For more information about the access policy required for a Resource Access Management (RAM) user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Because the key policy name can only be set to default, you must set the PolicyName parameter to default when you query the key policy. Otherwise, a `Not Found` error is returned.
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
     * Retrieves the details of a KMS instance.
     *
     * @remarks
     * Refer to [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html) for the access policy required to call this OpenAPI as a RAM user or RAM role.
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
     * Retrieves the details of a KMS instance.
     *
     * @remarks
     * Refer to [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html) for the access policy required to call this OpenAPI as a RAM user or RAM role.
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
     * Queries the quota usage and limits for a KMS instance.
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
     * Queries the quota usage and limits for a KMS instance.
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
     * Retrieves the plaintext of a managed data key (DK).
     *
     * @remarks
     * For information about the access policy that must be granted to a RAM user or RAM role to call this operation, refer to access control.
     * This operation can be called through a shared gateway. For more information, refer to Alibaba Cloud SDK.
     * - Shared gateway: Access KMS through public or VPC endpoints.
     *
     * @param request - GetManagedDataKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetManagedDataKeyResponse
     *
     * @param GetManagedDataKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetManagedDataKeyResponse
     */
    public function getManagedDataKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataKeyName) {
            @$query['DataKeyName'] = $request->dataKeyName;
        }

        if (null !== $request->dataKeyVersionId) {
            @$query['DataKeyVersionId'] = $request->dataKeyVersionId;
        }

        if (null !== $request->useLatest) {
            @$query['UseLatest'] = $request->useLatest;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetManagedDataKey',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetManagedDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the plaintext of a managed data key (DK).
     *
     * @remarks
     * For information about the access policy that must be granted to a RAM user or RAM role to call this operation, refer to access control.
     * This operation can be called through a shared gateway. For more information, refer to Alibaba Cloud SDK.
     * - Shared gateway: Access KMS through public or VPC endpoints.
     *
     * @param request - GetManagedDataKeyRequest
     *
     * @returns GetManagedDataKeyResponse
     *
     * @param GetManagedDataKeyRequest $request
     *
     * @return GetManagedDataKeyResponse
     */
    public function getManagedDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagedDataKeyWithOptions($request, $runtime);
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
     * Retrieves the public key of an asymmetric key. You can use the public key to encrypt data or verify a signature on your device.
     *
     * @remarks
     * - For more information about the access policy required for a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation supports both shared gateways and dedicated gateways. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or using a VPC domain name. If you access KMS over the Internet, you must enable Internet access. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     *
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
     * Retrieves the public key of an asymmetric key. You can use the public key to encrypt data or verify a signature on your device.
     *
     * @remarks
     * - For more information about the access policy required for a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation supports both shared gateways and dedicated gateways. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   - Shared gateway: You can access KMS over the Internet or using a VPC domain name. If you access KMS over the Internet, you must enable Internet access. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     *   - Dedicated gateway: You can access KMS using the private endpoint of KMS (`<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com`).
     *
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
     * Generates a random password string.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     *
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
     * Generates a random password string.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     *
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
     * Queries the access policy of a specified secret in a KMS instance.
     *
     * @remarks
     * - For information about the access policy required for a RAM user or RAM role to call this OpenAPI, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - A credential policy name can be set only to default. Therefore, you must set the PolicyName parameter to default when you query the credential policy. Otherwise, a `Not Found` error is returned.
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
     * Queries the access policy of a specified secret in a KMS instance.
     *
     * @remarks
     * - For information about the access policy required for a RAM user or RAM role to call this OpenAPI, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - A credential policy name can be set only to default. Therefore, you must set the PolicyName parameter to default when you query the credential policy. Otherwise, a `Not Found` error is returned.
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
     * Retrieve the credential value.
     *
     * @remarks
     * - For details about the access policy that must be granted to a Resource Access Management (RAM) user or RAM role to invoke this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - If you do not specify a version number or version status, Key Management Service (KMS) returns the credential value of the version marked as ACSCurrent by default.
     * - If a customer-managed key is used to protect the credential value, the caller must also have the `kms:Decrypt` permission on the corresponding master key.
     * This topic provides a sample request to retrieve the credential value of a credential named `secret001`. The returned result shows that the credential value `SecretData` is `testdata1`.
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
     * Retrieve the credential value.
     *
     * @remarks
     * - For details about the access policy that must be granted to a Resource Access Management (RAM) user or RAM role to invoke this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - If you do not specify a version number or version status, Key Management Service (KMS) returns the credential value of the version marked as ACSCurrent by default.
     * - If a customer-managed key is used to protect the credential value, the caller must also have the `kms:Decrypt` permission on the corresponding master key.
     * This topic provides a sample request to retrieve the credential value of a credential named `secret001`. The returned result shows that the credential value `SecretData` is `testdata1`.
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
     * Imports externally generated key material into a CMK whose origin is EXTERNAL.
     *
     * @remarks
     * When you call [CreateKey](https://help.aliyun.com/document_detail/28947.html) to create a CMK, you can set **Origin** to **EXTERNAL** to specify that the key material comes from an external source. Use this operation to import the key material into such a CMK.
     * - To view the CMK **Origin**, see [DescribeKey](https://help.aliyun.com/document_detail/28952.html).
     * - Before importing key material, call [GetParametersForImport](https://help.aliyun.com/document_detail/68621.html) to obtain the parameters required for the import, including the public key and import token.
     * > * For a CMK of type **Aliyun_AES_256**, the key material must be 256 bits. For a CMK of type **Aliyun_SM4**, the key material must be 128 bits.
     * >
     * > * You can set the expiration time for the key material, or you can set it to never expire.
     * >
     * > * You can reimport the key material and reset the expiration time for the specified CMK at any time, but the same key material must be imported.
     * >
     * > * After the imported key material expires or is deleted, the specified CMK becomes unavailable until the same key material is imported again.
     * >
     * > * The same key material can be imported into multiple CMKs, but data or data keys encrypted by one CMK cannot be decrypted by another CMK.
     * For more information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Imports externally generated key material into a CMK whose origin is EXTERNAL.
     *
     * @remarks
     * When you call [CreateKey](https://help.aliyun.com/document_detail/28947.html) to create a CMK, you can set **Origin** to **EXTERNAL** to specify that the key material comes from an external source. Use this operation to import the key material into such a CMK.
     * - To view the CMK **Origin**, see [DescribeKey](https://help.aliyun.com/document_detail/28952.html).
     * - Before importing key material, call [GetParametersForImport](https://help.aliyun.com/document_detail/68621.html) to obtain the parameters required for the import, including the public key and import token.
     * > * For a CMK of type **Aliyun_AES_256**, the key material must be 256 bits. For a CMK of type **Aliyun_SM4**, the key material must be 128 bits.
     * >
     * > * You can set the expiration time for the key material, or you can set it to never expire.
     * >
     * > * You can reimport the key material and reset the expiration time for the specified CMK at any time, but the same key material must be imported.
     * >
     * > * After the imported key material expires or is deleted, the specified CMK becomes unavailable until the same key material is imported again.
     * >
     * > * The same key material can be imported into multiple CMKs, but data or data keys encrypted by one CMK cannot be decrypted by another CMK.
     * For more information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries all aliases that are bound to a key.
     *
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
     * Queries all aliases that are bound to a key.
     *
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
     * Queries all application access points (AAPs) in the current region.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries all application access points (AAPs) in the current region.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries all client keys within an AAP.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     *
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
     * Queries all client keys within an AAP.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     *
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
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the IDs and ARNs of all CMKs in the current region.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the IDs and ARNs of all CMKs in the current region.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries all KMS instances in the current region.
     *
     * @remarks
     * For more information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries all KMS instances in the current region.
     *
     * @remarks
     * For more information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Lists the key versions of a specified managed data key (DK).
     *
     * @remarks
     * For details about the access policy required when a RAM user or RAM role invokes this operation, refer to access control.
     * This operation can be invoked through the shared gateway. For more information, refer to Alibaba Cloud SDK.
     * - Shared gateway: Access KMS through public or VPC endpoints.
     *
     * @param request - ListManagedDataKeyVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListManagedDataKeyVersionsResponse
     *
     * @param ListManagedDataKeyVersionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListManagedDataKeyVersionsResponse
     */
    public function listManagedDataKeyVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataKeyName) {
            @$query['DataKeyName'] = $request->dataKeyName;
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
            'action' => 'ListManagedDataKeyVersions',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListManagedDataKeyVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the key versions of a specified managed data key (DK).
     *
     * @remarks
     * For details about the access policy required when a RAM user or RAM role invokes this operation, refer to access control.
     * This operation can be invoked through the shared gateway. For more information, refer to Alibaba Cloud SDK.
     * - Shared gateway: Access KMS through public or VPC endpoints.
     *
     * @param request - ListManagedDataKeyVersionsRequest
     *
     * @returns ListManagedDataKeyVersionsResponse
     *
     * @param ListManagedDataKeyVersionsRequest $request
     *
     * @return ListManagedDataKeyVersionsResponse
     */
    public function listManagedDataKeyVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listManagedDataKeyVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries all network access rules in the current region.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries all network access rules in the current region.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries all permission policies in the current region.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries all permission policies in the current region.
     *
     * @remarks
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Queries the tags of a customer master key (CMK).
     *
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
     * Queries the tags of a customer master key (CMK).
     *
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
     * Queries all version IDs and stage labels of a specified secret.
     *
     * @remarks
     * - For more information about the access policy required for a RAM user or RAM role to call this OpenAPI, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - The version information does not include the secret value. By default, this operation returns only the secret versions that are marked with a version stage.
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
     * Queries all version IDs and stage labels of a specified secret.
     *
     * @remarks
     * - For more information about the access policy required for a RAM user or RAM role to call this OpenAPI, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - The version information does not include the secret value. By default, this operation returns only the secret versions that are marked with a version stage.
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
     * Queries all secrets in the current region.
     *
     * @remarks
     * - To call this operation, the RAM user or RAM role must be granted the required policy. For more information, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation returns only secret metadata, not the secret values.
     * This example shows how to query secrets created by the current user in the current region. `PageNumber` is set to `1` and `PageSize` is set to `2`, returning metadata for two secrets.
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
     * Queries all secrets in the current region.
     *
     * @remarks
     * - To call this operation, the RAM user or RAM role must be granted the required policy. For more information, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation returns only secret metadata, not the secret values.
     * This example shows how to query secrets created by the current user in the current region. `PageNumber` is set to `1` and `PageSize` is set to `2`, returning metadata for two secrets.
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
     * Lists the tags that are bound to a key or a secret.
     *
     * @remarks
     * For more information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Lists the tags that are bound to a key or a secret.
     *
     * @remarks
     * For more information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Activates Key Management Service (KMS) for your Alibaba Cloud account.
     *
     * @remarks
     * - For more information about the access policies that a RAM user or RAM role needs to call this OpenAPI, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - KMS is a paid service. For more information about billing, see [Billing](https://help.aliyun.com/document_detail/52608.html).
     * - You can activate the service for an Alibaba Cloud account only once.
     * - Make sure that your Alibaba Cloud account has completed real-name verification.
     *
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
     * Activates Key Management Service (KMS) for your Alibaba Cloud account.
     *
     * @remarks
     * - For more information about the access policies that a RAM user or RAM role needs to call this OpenAPI, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - KMS is a paid service. For more information about billing, see [Billing](https://help.aliyun.com/document_detail/52608.html).
     * - You can activate the service for an Alibaba Cloud account only once.
     * - Make sure that your Alibaba Cloud account has completed real-name verification.
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
     * Stores a new version of a secret value for a generic secret.
     *
     * @remarks
     * - For information about the access policy required for a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation supports only generic secrets. Each generic secret can have a maximum of 10 versions. If the number of versions exceeds the limit, KMS deletes the earliest version.
     * - By default, the new secret value is marked with ACSCurrent, and the previous version that was marked with ACSCurrent is marked with ACSPrevious. You can specify the VersionStage parameter to overwrite this default behavior.
     * - This operation stores a new version of a secret value. You cannot use it to modify an existing version of a secret value. You must specify a version number when you store a new version. KMS processes requests based on the following rules:
     *   - If the version number does not exist in the secret, KMS creates a new version and stores the secret value.
     *   - If the version number already exists in the secret, KMS compares the secret value in the request with the stored value. If the values are the same, the request is ignored and a success message is returned. This makes the operation idempotent. If the values are different, the request is rejected.
     * This topic provides an example of how to store a new version of a secret value for the secret named `secret001`. The new version number (`VersionId`) is `v3` and the secret value (`SecretData`) is `importantdata`.
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
     * Stores a new version of a secret value for a generic secret.
     *
     * @remarks
     * - For information about the access policy required for a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation supports only generic secrets. Each generic secret can have a maximum of 10 versions. If the number of versions exceeds the limit, KMS deletes the earliest version.
     * - By default, the new secret value is marked with ACSCurrent, and the previous version that was marked with ACSCurrent is marked with ACSPrevious. You can specify the VersionStage parameter to overwrite this default behavior.
     * - This operation stores a new version of a secret value. You cannot use it to modify an existing version of a secret value. You must specify a version number when you store a new version. KMS processes requests based on the following rules:
     *   - If the version number does not exist in the secret, KMS creates a new version and stores the secret value.
     *   - If the version number already exists in the secret, KMS compares the secret value in the request with the stored value. If the values are the same, the request is ignored and a success message is returned. This makes the operation idempotent. If the values are different, the request is rejected.
     * This topic provides an example of how to store a new version of a secret value for the secret named `secret001`. The new version number (`VersionId`) is `v3` and the secret value (`SecretData`) is `importantdata`.
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
     * Re-encrypts ciphertext under a different CMK without exposing the plaintext.
     *
     * @remarks
     * ### Notes
     * - For more information about the access policy required to grant a RAM user or RAM role the permission to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible only through a shared gateway, not a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   When using a shared gateway, you access KMS through an Internet or a VPC domain name. This method requires Internet access to be enabled. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     * ### QPS limits
     * This operation is accessible only through a shared gateway. The single-user queries per second (QPS) limit is 750. If this limit is exceeded, requests are throttled, which may affect your business. We recommend that you stay within the specified limit.
     * ### Details
     * You can use the ReEncrypt operation in the following scenarios:
     * - After a customer master key (CMK) is rotated, you can use the latest key version to re-encrypt data. For more information about automatic key rotation, see [Automatic key rotation](https://help.aliyun.com/document_detail/134270.html).
     * - You can re-encrypt data by changing the encryption context without changing the master key.
     * - You can re-encrypt data or a data key that is encrypted by one master key with another master key in KMS.
     * The ReEncrypt operation requires the following permissions:
     * - The kms:ReEncryptFrom permission for the source master key.
     * - The kms:ReEncryptTo permission for the destination master key.
     * - You can use kms:ReEncrypt\\* to grant both permissions.
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
     * Re-encrypts ciphertext under a different CMK without exposing the plaintext.
     *
     * @remarks
     * ### Notes
     * - For more information about the access policy required to grant a RAM user or RAM role the permission to use this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation is accessible only through a shared gateway, not a dedicated gateway. For more information, see [Alibaba Cloud SDK](https://help.aliyun.com/document_detail/601559.html).
     *   When using a shared gateway, you access KMS through an Internet or a VPC domain name. This method requires Internet access to be enabled. For more information, see [Access keys in a KMS instance over the Internet](https://help.aliyun.com/document_detail/2856718.html).
     * ### QPS limits
     * This operation is accessible only through a shared gateway. The single-user queries per second (QPS) limit is 750. If this limit is exceeded, requests are throttled, which may affect your business. We recommend that you stay within the specified limit.
     * ### Details
     * You can use the ReEncrypt operation in the following scenarios:
     * - After a customer master key (CMK) is rotated, you can use the latest key version to re-encrypt data. For more information about automatic key rotation, see [Automatic key rotation](https://help.aliyun.com/document_detail/134270.html).
     * - You can re-encrypt data by changing the encryption context without changing the master key.
     * - You can re-encrypt data or a data key that is encrypted by one master key with another master key in KMS.
     * The ReEncrypt operation requires the following permissions:
     * - The kms:ReEncryptFrom permission for the source master key.
     * - The kms:ReEncryptTo permission for the destination master key.
     * - You can use kms:ReEncrypt\\* to grant both permissions.
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
     * Releases a pay-as-you-go KMS instance.
     *
     * @remarks
     * - For information about the access policy that is required to allow a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Subscription instances cannot be manually released. You can only unsubscribe from them under specific conditions. To unsubscribe, go to the Expenses and Costs page in the console and choose Unsubscribe. For more information, see [Unsubscription policy](https://help.aliyun.com/document_detail/600418.html).
     * - After you release an instance, all resources in the instance are also released. Resources that are encrypted using keys in the instance cannot be decrypted, and credentials cannot be retrieved. Before you release an instance, make sure that no data is encrypted by the keys in the instance and no services call the credentials. This prevents service interruptions.
     * - If your instance is a software key management instance, we recommend that you back up the resources of the instance before you release it. The backed-up resources can be recovered. For more information, see [Backup management](https://help.aliyun.com/document_detail/2357488.html).
     * - The billing epoch is daily. Therefore, after you release a pay-as-you-go instance, the bill for the previous day is pushed before 12:00 on the next day.
     * - Before you release a KMS instance, we recommend that you check whether deletion protection is enabled for the instance in the console. If deletion protection is enabled, disable it in the console before you release the instance. For more information, see [Manage a KMS instance](https://help.aliyun.com/document_detail/604735.html).
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
     * Releases a pay-as-you-go KMS instance.
     *
     * @remarks
     * - For information about the access policy that is required to allow a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - Subscription instances cannot be manually released. You can only unsubscribe from them under specific conditions. To unsubscribe, go to the Expenses and Costs page in the console and choose Unsubscribe. For more information, see [Unsubscription policy](https://help.aliyun.com/document_detail/600418.html).
     * - After you release an instance, all resources in the instance are also released. Resources that are encrypted using keys in the instance cannot be decrypted, and credentials cannot be retrieved. Before you release an instance, make sure that no data is encrypted by the keys in the instance and no services call the credentials. This prevents service interruptions.
     * - If your instance is a software key management instance, we recommend that you back up the resources of the instance before you release it. The backed-up resources can be recovered. For more information, see [Backup management](https://help.aliyun.com/document_detail/2357488.html).
     * - The billing epoch is daily. Therefore, after you release a pay-as-you-go instance, the bill for the previous day is pushed before 12:00 on the next day.
     * - Before you release a KMS instance, we recommend that you check whether deletion protection is enabled for the instance in the console. If deletion protection is enabled, disable it in the console before you release the instance. For more information, see [Manage a KMS instance](https://help.aliyun.com/document_detail/604735.html).
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
     * Restores a deleted secret.
     *
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
     * Restores a deleted secret.
     *
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
     * Immediately rotates a secret.
     *
     * @remarks
     * Limits:
     * • A secret of each Alibaba Cloud account can be rotated for a maximum of 50 times per hour.
     * • The RotateSecret operation is unavailable for standard secrets.
     * In this example, the `RdsSecret/Mysql5.4/MyCred` secret is manually rotated, and the version number of the secret is set to `000000123` after the secret is rotated.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Immediately rotates a secret.
     *
     * @remarks
     * Limits:
     * • A secret of each Alibaba Cloud account can be rotated for a maximum of 50 times per hour.
     * • The RotateSecret operation is unavailable for standard secrets.
     * In this example, the `RdsSecret/Mysql5.4/MyCred` secret is manually rotated, and the version number of the secret is set to `000000123` after the secret is rotated.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Deletes a specified customer master key (CMK).
     *
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
     * Deletes a specified customer master key (CMK).
     *
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
     * - For details about the access policy that must be granted to a Resource Access Management (RAM) user or RAM role to invoke this operation, see [Access control](https://help.aliyun.com/document_detail/2767210.html).
     * - After you enable deletion protection for a CMK, you cannot delete the CMK. To delete the CMK, disable deletion protection first.
     * - Before you invoke the SetDeletionProtection operation, make sure that the CMK is not in the PendingDeletion state. You can invoke the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the status (KeyState) of the CMK.
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

        if (null !== $request->kmsInstanceId) {
            @$query['KmsInstanceId'] = $request->kmsInstanceId;
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
     * - For details about the access policy that must be granted to a Resource Access Management (RAM) user or RAM role to invoke this operation, see [Access control](https://help.aliyun.com/document_detail/2767210.html).
     * - After you enable deletion protection for a CMK, you cannot delete the CMK. To delete the CMK, disable deletion protection first.
     * - Before you invoke the SetDeletionProtection operation, make sure that the CMK is not in the PendingDeletion state. You can invoke the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation to query the status (KeyState) of the CMK.
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
     * Sets the key policy for a CMK in a KMS instance.
     *
     * @remarks
     * - For information about the access policy required for a RAM user or RAM role to call this API operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - For more information about key policies, see [Key policy overview](https://help.aliyun.com/document_detail/2716468.html).
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
     * Sets the key policy for a CMK in a KMS instance.
     *
     * @remarks
     * - For information about the access policy required for a RAM user or RAM role to call this API operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - For more information about key policies, see [Key policy overview](https://help.aliyun.com/document_detail/2716468.html).
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
     * Sets the access policy for a secret in a KMS instance.
     *
     * @remarks
     * - For information about the access policy that a RAM user or RAM role requires to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - For more information about secret policies, see [Secret policy overview](https://help.aliyun.com/document_detail/2716465.html).
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
     * Sets the access policy for a secret in a KMS instance.
     *
     * @remarks
     * - For information about the access policy that a RAM user or RAM role requires to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - For more information about secret policies, see [Secret policy overview](https://help.aliyun.com/document_detail/2716465.html).
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
     * Adds tags to a CMK, secret, or certificate.
     *
     * @remarks
     * You can add up to 10 tags to a CMK, secret, or certificate.
     * In this example, the tags `[{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]` are added to the CMK whose ID is `08c33a6f-4e0a-4a1b-a3fa-7ddf****`.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Adds tags to a CMK, secret, or certificate.
     *
     * @remarks
     * You can add up to 10 tags to a CMK, secret, or certificate.
     * In this example, the tags `[{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]` are added to the CMK whose ID is `08c33a6f-4e0a-4a1b-a3fa-7ddf****`.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Adds tags to one or more keys or secrets.
     *
     * @remarks
     * You can add multiple tags to multiple keys or multiple secrets at a time.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Adds tags to one or more keys or secrets.
     *
     * @remarks
     * You can add multiple tags to multiple keys or multiple secrets at a time.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Removes tags from a CMK, secret, or certificate.
     *
     * @remarks
     * For information about the access policy that is required for a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * This topic provides an example of how to detach tags with the tag keys tagkey1 and tagkey2 from the key with the ID `08c33a6f-4e0a-4a1b-a3fa-7ddf****`.
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
     * Removes tags from a CMK, secret, or certificate.
     *
     * @remarks
     * For information about the access policy that is required for a RAM user or RAM role to call this OpenAPI operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * This topic provides an example of how to detach tags with the tag keys tagkey1 and tagkey2 from the key with the ID `08c33a6f-4e0a-4a1b-a3fa-7ddf****`.
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
     * Binds an existing alias to a different customer master key (CMK) ID.
     *
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
     * Binds an existing alias to a different customer master key (CMK) ID.
     *
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
     * Updates the information about an application access point (AAP).
     *
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
     * Updates the information about an application access point (AAP).
     *
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
     * Updates the description of a CMK.
     *
     * @remarks
     * This operation replaces the description of a customer master key (CMK) with the description that you specify. The original description of the CMK is specified by the Description parameter when you call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation. Use this operation to add, modify, or delete the description of a CMK.
     * For more information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Updates the description of a CMK.
     *
     * @remarks
     * This operation replaces the description of a customer master key (CMK) with the description that you specify. The original description of the CMK is specified by the Description parameter when you call the [DescribeKey](https://help.aliyun.com/document_detail/28952.html) operation. Use this operation to add, modify, or delete the description of a CMK.
     * For more information about the access policy required for a RAM user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Updates the VPC bindings of a KMS instance.
     *
     * @remarks
     * - For information about the access policy required for a Resource Access Management (RAM) user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - If your self-managed application is deployed in multiple VPCs in the same region, you can bind the KMS instance to additional VPCs. These VPCs are in addition to the one that you specified when you enabled the instance.
     *   These VPCs can belong to the same Alibaba Cloud account or different Alibaba Cloud accounts. After the configuration is complete, self-managed applications in these VPCs can access the specified KMS instance.
     *   > If the VPCs belong to different Alibaba Cloud accounts, you must first configure resource sharing to share the vSwitch resources from those accounts with the Alibaba Cloud account that owns the KMS instance. For more information, see [Access a KMS instance from multiple VPCs in the same region](https://help.aliyun.com/document_detail/2393236.html).
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
     * Updates the VPC bindings of a KMS instance.
     *
     * @remarks
     * - For information about the access policy required for a Resource Access Management (RAM) user or RAM role to call this operation, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - If your self-managed application is deployed in multiple VPCs in the same region, you can bind the KMS instance to additional VPCs. These VPCs are in addition to the one that you specified when you enabled the instance.
     *   These VPCs can belong to the same Alibaba Cloud account or different Alibaba Cloud accounts. After the configuration is complete, self-managed applications in these VPCs can access the specified KMS instance.
     *   > If the VPCs belong to different Alibaba Cloud accounts, you must first configure resource sharing to share the vSwitch resources from those accounts with the Alibaba Cloud account that owns the KMS instance. For more information, see [Access a KMS instance from multiple VPCs in the same region](https://help.aliyun.com/document_detail/2393236.html).
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
     * Updates a network access rule.
     *
     * @remarks
     * - For more information about the access policy required for a Resource Access Management (RAM) user or RAM role to call this operation, see [Access control](https://help.aliyun.com/document_detail/2767210.html).
     * - You can only modify the private IP addresses and description of a network control rule. The name and network type cannot be modified.
     * - When you update a network control rule, the access policies attached to it are also updated. Proceed with caution.
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
     * Updates a network access rule.
     *
     * @remarks
     * - For more information about the access policy required for a Resource Access Management (RAM) user or RAM role to call this operation, see [Access control](https://help.aliyun.com/document_detail/2767210.html).
     * - You can only modify the private IP addresses and description of a network control rule. The name and network type cannot be modified.
     * - When you update a network control rule, the access policies attached to it are also updated. Proceed with caution.
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
     * Updates a permission policy.
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
     * Updates a permission policy.
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
     * Updates the automatic rotation policy of a CMK.
     *
     * @remarks
     * When automatic key rotation is enabled, KMS automatically creates a key version after the preset rotation period arrives. In addition, KMS sets the new key version as the primary key version.
     * An automatic key rotation policy cannot be configured for the following keys:
     * - Asymmetric key
     * - Service-managed key
     * - Bring your own key (BYOK) that is imported into KMS
     * - Key that is not in the **Enabled** state
     * In this example, automatic key rotation is enabled for a CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****`. The automatic rotation period is 30 days.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Updates the automatic rotation policy of a CMK.
     *
     * @remarks
     * When automatic key rotation is enabled, KMS automatically creates a key version after the preset rotation period arrives. In addition, KMS sets the new key version as the primary key version.
     * An automatic key rotation policy cannot be configured for the following keys:
     * - Asymmetric key
     * - Service-managed key
     * - Bring your own key (BYOK) that is imported into KMS
     * - Key that is not in the **Enabled** state
     * In this example, automatic key rotation is enabled for a CMK whose ID is `1234abcd-12ab-34cd-56ef-12345678****`. The automatic rotation period is 30 days.
     * For more information about the access policy required by a RAM user or RAM role to call this API, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
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
     * Updates the rotation policy of a secret.
     *
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
     * Updates the rotation policy of a secret.
     *
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
     * Moves a version stage label to a different version of a secret.
     *
     * @remarks
     * - For more information about the access policy that is required to call this operation as a Resource Access Management (RAM) user or RAM role, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation supports only generic secrets. You can perform the following operations:
     *   - Add a version stage to a specified secret version.
     *   - Remove a version stage from a specified secret version.
     *   - Remove a version stage from a specified secret version and attach it to another secret version.
     * - The total number of version stages for each generic secret cannot exceed 8.
     * This topic provides an example of how to update the version stage of the secret named `secret001`. In this example, the `ACSCurrent` stage is used to mark version `002`.
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
     * Moves a version stage label to a different version of a secret.
     *
     * @remarks
     * - For more information about the access policy that is required to call this operation as a Resource Access Management (RAM) user or RAM role, see [Resource Access Management](https://help.aliyun.com/document_detail/2767210.html).
     * - This operation supports only generic secrets. You can perform the following operations:
     *   - Add a version stage to a specified secret version.
     *   - Remove a version stage from a specified secret version.
     *   - Remove a version stage from a specified secret version and attach it to another secret version.
     * - The total number of version stages for each generic secret cannot exceed 8.
     * This topic provides an example of how to update the version stage of the secret named `secret001`. In this example, the `ACSCurrent` stage is used to mark version `002`.
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
     * Verifies the HMAC message authentication code of a specific message by using a specified key.
     *
     * @remarks
     * For details about the access policy required when a RAM user or RAM role invokes this operation, refer to access control.
     * This operation can be invoked through a shared gateway or a dedicated gateway. For more information, refer to Alibaba Cloud SDK.
     * - Shared gateway: Access KMS through a public or VPC endpoint. This method requires you to enable the public network access switch. For more information, refer to accessing keys in a KMS instance over the Internet.
     * - Dedicated gateway: Access KMS through a KMS private endpoint (<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com).
     *
     * @param request - VerifyMacRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyMacResponse
     *
     * @param VerifyMacRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return VerifyMacResponse
     */
    public function verifyMacWithOptions($request, $runtime)
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

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyMac',
            'version' => '2016-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyMacResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the HMAC message authentication code of a specific message by using a specified key.
     *
     * @remarks
     * For details about the access policy required when a RAM user or RAM role invokes this operation, refer to access control.
     * This operation can be invoked through a shared gateway or a dedicated gateway. For more information, refer to Alibaba Cloud SDK.
     * - Shared gateway: Access KMS through a public or VPC endpoint. This method requires you to enable the public network access switch. For more information, refer to accessing keys in a KMS instance over the Internet.
     * - Dedicated gateway: Access KMS through a KMS private endpoint (<YOUR_KMS_INSTANCE_ID>.cryptoservice.kms.aliyuncs.com).
     *
     * @param request - VerifyMacRequest
     *
     * @returns VerifyMacResponse
     *
     * @param VerifyMacRequest $request
     *
     * @return VerifyMacResponse
     */
    public function verifyMac($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyMacWithOptions($request, $runtime);
    }
}
