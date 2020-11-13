<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessCardAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessCardRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessCardResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeChinapassportAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeChinapassportRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeChinapassportResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePassportMRZAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePassportMRZRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePassportMRZResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQrCodeRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQrCodeResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTakeoutOrderAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTakeoutOrderRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTakeoutOrderResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVerificationcodeAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVerificationcodeRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVerificationcodeResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVINCodeAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVINCodeRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVINCodeResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\TrimDocumentAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\TrimDocumentRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\TrimDocumentResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ocr extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ocr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param RecognizePoiNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizePoiNameResponse
     */
    public function recognizePoiName($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizePoiNameResponse::fromMap($this->doRequest('RecognizePoiName', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizePoiNameAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizePoiNameResponse
     */
    public function recognizePoiNameAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizePoiNamereq = new RecognizePoiNameRequest([]);
        RpcUtils::convert($request, $recognizePoiNamereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizePoiNamereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizePoiName($recognizePoiNamereq, $runtime);
    }

    /**
     * @param DetectCardScreenshotRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectCardScreenshotResponse
     */
    public function detectCardScreenshot($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectCardScreenshotResponse::fromMap($this->doRequest('DetectCardScreenshot', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectCardScreenshotAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectCardScreenshotResponse
     */
    public function detectCardScreenshotAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $detectCardScreenshotreq = new DetectCardScreenshotRequest([]);
        RpcUtils::convert($request, $detectCardScreenshotreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $detectCardScreenshotreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectCardScreenshot($detectCardScreenshotreq, $runtime);
    }

    /**
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAsyncJobResultResponse::fromMap($this->doRequest('GetAsyncJobResult', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TrimDocumentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TrimDocumentResponse
     */
    public function trimDocument($request, $runtime)
    {
        Utils::validateModel($request);

        return TrimDocumentResponse::fromMap($this->doRequest('TrimDocument', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TrimDocumentAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TrimDocumentResponse
     */
    public function trimDocumentAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $trimDocumentreq = new TrimDocumentRequest([]);
        RpcUtils::convert($request, $trimDocumentreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->fileURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $trimDocumentreq->fileURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->trimDocument($trimDocumentreq, $runtime);
    }

    /**
     * @param RecognizeChinapassportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeChinapassportResponse
     */
    public function recognizeChinapassport($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeChinapassportResponse::fromMap($this->doRequest('RecognizeChinapassport', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeChinapassportAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeChinapassportResponse
     */
    public function recognizeChinapassportAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeChinapassportreq = new RecognizeChinapassportRequest([]);
        RpcUtils::convert($request, $recognizeChinapassportreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeChinapassportreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeChinapassport($recognizeChinapassportreq, $runtime);
    }

    /**
     * @param RecognizeVerificationcodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeVerificationcodeResponse
     */
    public function recognizeVerificationcode($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeVerificationcodeResponse::fromMap($this->doRequest('RecognizeVerificationcode', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeVerificationcodeAdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RecognizeVerificationcodeResponse
     */
    public function recognizeVerificationcodeAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeVerificationcodereq = new RecognizeVerificationcodeRequest([]);
        RpcUtils::convert($request, $recognizeVerificationcodereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeVerificationcodereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVerificationcode($recognizeVerificationcodereq, $runtime);
    }

    /**
     * @param RecognizePassportMRZRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizePassportMRZResponse
     */
    public function recognizePassportMRZ($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizePassportMRZResponse::fromMap($this->doRequest('RecognizePassportMRZ', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizePassportMRZAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizePassportMRZResponse
     */
    public function recognizePassportMRZAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizePassportMRZreq = new RecognizePassportMRZRequest([]);
        RpcUtils::convert($request, $recognizePassportMRZreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizePassportMRZreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizePassportMRZ($recognizePassportMRZreq, $runtime);
    }

    /**
     * @param RecognizeTakeoutOrderRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeTakeoutOrderResponse
     */
    public function recognizeTakeoutOrder($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeTakeoutOrderResponse::fromMap($this->doRequest('RecognizeTakeoutOrder', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeTakeoutOrderAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeTakeoutOrderResponse
     */
    public function recognizeTakeoutOrderAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeTakeoutOrderreq = new RecognizeTakeoutOrderRequest([]);
        RpcUtils::convert($request, $recognizeTakeoutOrderreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeTakeoutOrderreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeTakeoutOrder($recognizeTakeoutOrderreq, $runtime);
    }

    /**
     * @param RecognizeQrCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeQrCodeResponse
     */
    public function recognizeQrCode($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeQrCodeResponse::fromMap($this->doRequest('RecognizeQrCode', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeVATInvoiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeVATInvoiceResponse
     */
    public function recognizeVATInvoice($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeVATInvoiceResponse::fromMap($this->doRequest('RecognizeVATInvoice', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeVATInvoiceAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeVATInvoiceResponse
     */
    public function recognizeVATInvoiceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeVATInvoicereq = new RecognizeVATInvoiceRequest([]);
        RpcUtils::convert($request, $recognizeVATInvoicereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->fileURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeVATInvoicereq->fileURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVATInvoice($recognizeVATInvoicereq, $runtime);
    }

    /**
     * @param RecognizeCharacterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeCharacterResponse
     */
    public function recognizeCharacter($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeCharacterResponse::fromMap($this->doRequest('RecognizeCharacter', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeCharacterAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeCharacterResponse
     */
    public function recognizeCharacterAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeCharacterreq = new RecognizeCharacterRequest([]);
        RpcUtils::convert($request, $recognizeCharacterreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeCharacterreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeCharacter($recognizeCharacterreq, $runtime);
    }

    /**
     * @param RecognizeTaxiInvoiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoice($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeTaxiInvoiceResponse::fromMap($this->doRequest('RecognizeTaxiInvoice', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeTaxiInvoiceAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoiceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeTaxiInvoicereq = new RecognizeTaxiInvoiceRequest([]);
        RpcUtils::convert($request, $recognizeTaxiInvoicereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeTaxiInvoicereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeTaxiInvoice($recognizeTaxiInvoicereq, $runtime);
    }

    /**
     * @param RecognizeIdentityCardRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeIdentityCardResponse
     */
    public function recognizeIdentityCard($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeIdentityCardResponse::fromMap($this->doRequest('RecognizeIdentityCard', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeIdentityCardAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeIdentityCardResponse
     */
    public function recognizeIdentityCardAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeIdentityCardreq = new RecognizeIdentityCardRequest([]);
        RpcUtils::convert($request, $recognizeIdentityCardreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeIdentityCardreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeIdentityCard($recognizeIdentityCardreq, $runtime);
    }

    /**
     * @param RecognizeLicensePlateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeLicensePlateResponse
     */
    public function recognizeLicensePlate($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeLicensePlateResponse::fromMap($this->doRequest('RecognizeLicensePlate', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeLicensePlateAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeLicensePlateResponse
     */
    public function recognizeLicensePlateAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeLicensePlatereq = new RecognizeLicensePlateRequest([]);
        RpcUtils::convert($request, $recognizeLicensePlatereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeLicensePlatereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeLicensePlate($recognizeLicensePlatereq, $runtime);
    }

    /**
     * @param RecognizeTableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeTableResponse
     */
    public function recognizeTable($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeTableResponse::fromMap($this->doRequest('RecognizeTable', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeTableAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeTableResponse
     */
    public function recognizeTableAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeTablereq = new RecognizeTableRequest([]);
        RpcUtils::convert($request, $recognizeTablereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeTablereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeTable($recognizeTablereq, $runtime);
    }

    /**
     * @param RecognizeDrivingLicenseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicense($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeDrivingLicenseResponse::fromMap($this->doRequest('RecognizeDrivingLicense', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeDrivingLicenseAdvanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicenseAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeDrivingLicensereq = new RecognizeDrivingLicenseRequest([]);
        RpcUtils::convert($request, $recognizeDrivingLicensereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeDrivingLicensereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeDrivingLicense($recognizeDrivingLicensereq, $runtime);
    }

    /**
     * @param RecognizeBankCardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCard($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeBankCardResponse::fromMap($this->doRequest('RecognizeBankCard', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeBankCardAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCardAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeBankCardreq = new RecognizeBankCardRequest([]);
        RpcUtils::convert($request, $recognizeBankCardreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeBankCardreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeBankCard($recognizeBankCardreq, $runtime);
    }

    /**
     * @param RecognizeTrainTicketRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTrainTicketResponse
     */
    public function recognizeTrainTicket($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeTrainTicketResponse::fromMap($this->doRequest('RecognizeTrainTicket', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeTrainTicketAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeTrainTicketResponse
     */
    public function recognizeTrainTicketAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeTrainTicketreq = new RecognizeTrainTicketRequest([]);
        RpcUtils::convert($request, $recognizeTrainTicketreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeTrainTicketreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeTrainTicket($recognizeTrainTicketreq, $runtime);
    }

    /**
     * @param RecognizeDriverLicenseRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeDriverLicenseResponse
     */
    public function recognizeDriverLicense($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeDriverLicenseResponse::fromMap($this->doRequest('RecognizeDriverLicense', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeDriverLicenseAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeDriverLicenseResponse
     */
    public function recognizeDriverLicenseAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeDriverLicensereq = new RecognizeDriverLicenseRequest([]);
        RpcUtils::convert($request, $recognizeDriverLicensereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeDriverLicensereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeDriverLicense($recognizeDriverLicensereq, $runtime);
    }

    /**
     * @param RecognizeAccountPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeAccountPageResponse
     */
    public function recognizeAccountPage($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeAccountPageResponse::fromMap($this->doRequest('RecognizeAccountPage', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeAccountPageAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeAccountPageResponse
     */
    public function recognizeAccountPageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeAccountPagereq = new RecognizeAccountPageRequest([]);
        RpcUtils::convert($request, $recognizeAccountPagereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeAccountPagereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeAccountPage($recognizeAccountPagereq, $runtime);
    }

    /**
     * @param RecognizeStampRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeStampResponse
     */
    public function recognizeStamp($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeStampResponse::fromMap($this->doRequest('RecognizeStamp', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeStampAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeStampResponse
     */
    public function recognizeStampAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeStampreq = new RecognizeStampRequest([]);
        RpcUtils::convert($request, $recognizeStampreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeStampreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeStamp($recognizeStampreq, $runtime);
    }

    /**
     * @param RecognizeBusinessCardRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeBusinessCardResponse
     */
    public function recognizeBusinessCard($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeBusinessCardResponse::fromMap($this->doRequest('RecognizeBusinessCard', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeBusinessCardAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeBusinessCardResponse
     */
    public function recognizeBusinessCardAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeBusinessCardreq = new RecognizeBusinessCardRequest([]);
        RpcUtils::convert($request, $recognizeBusinessCardreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeBusinessCardreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeBusinessCard($recognizeBusinessCardreq, $runtime);
    }

    /**
     * @param RecognizeVINCodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeVINCodeResponse
     */
    public function recognizeVINCode($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeVINCodeResponse::fromMap($this->doRequest('RecognizeVINCode', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeVINCodeAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeVINCodeResponse
     */
    public function recognizeVINCodeAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeVINCodereq = new RecognizeVINCodeRequest([]);
        RpcUtils::convert($request, $recognizeVINCodereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeVINCodereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVINCode($recognizeVINCodereq, $runtime);
    }

    /**
     * @param RecognizeBusinessLicenseRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicense($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeBusinessLicenseResponse::fromMap($this->doRequest('RecognizeBusinessLicense', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeBusinessLicenseAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicenseAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ocr',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recognizeBusinessLicensereq = new RecognizeBusinessLicenseRequest([]);
        RpcUtils::convert($request, $recognizeBusinessLicensereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeBusinessLicensereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeBusinessLicense($recognizeBusinessLicensereq, $runtime);
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
}
