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
use AlibabaCloud\SDK\Kms\V20160120\Models\SetDeletionProtectionRequest;
use AlibabaCloud\SDK\Kms\V20160120\Models\SetDeletionProtectionResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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

        return AsymmetricDecryptResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return AsymmetricEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return AsymmetricSignResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return AsymmetricVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return CancelKeyDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return CertificatePrivateKeyDecryptResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return CertificatePrivateKeySignResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return CertificatePublicKeyEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return CertificatePublicKeyVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return CreateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return CreateCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
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

        return CreateKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return CreateKeyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
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

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DecryptResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DeleteAliasResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DeleteCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DeleteKeyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DescribeAccountKmsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DescribeCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DescribeKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DescribeKeyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DescribeSecretResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DisableKeyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DisableKeyResponse
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

        return DisableKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return EnableKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return EncryptResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return ExportDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return GenerateAndExportDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return GenerateDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return GenerateDataKeyWithoutPlaintextResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return GetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return GetParametersForImportResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return GetPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return GetRandomPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return GetSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ImportKeyMaterialRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportKeyMaterialResponse
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

        return ImportKeyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return ListAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return ListAliasesByKeyIdResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return ListKeyVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return ListKeysResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListResourceTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListResourceTagsResponse
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

        return ListResourceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSecretVersionIdsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretVersionIdsResponse
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

        return ListSecretVersionIdsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSecretsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSecretsResponse
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

        return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return OpenKmsServiceResponse
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

        return OpenKmsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return PutSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return ReEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return RestoreSecretResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return RotateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return ScheduleKeyDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SetDeletionProtectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDeletionProtectionResponse
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

        return SetDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TagResourceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TagResourceResponse
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

        return TagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return UntagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return UpdateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return UpdateCertificateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return UpdateKeyDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return UpdateRotationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSecretResponse
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

        return UpdateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateSecretRotationPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateSecretRotationPolicyResponse
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

        return UpdateSecretRotationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return UpdateSecretVersionStageResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return UploadCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
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
