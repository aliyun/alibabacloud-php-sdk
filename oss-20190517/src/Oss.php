<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Oss\V20190517\Models\AbortBucketWormResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\AbortMultipartUploadRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\AbortMultipartUploadResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\AppendObjectHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\AppendObjectRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\AppendObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\CompleteBucketWormRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\CompleteBucketWormResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\CompleteMultipartUploadHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\CompleteMultipartUploadRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\CompleteMultipartUploadResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\CopyObjectHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\CopyObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketCorsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketEncryptionResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketInventoryRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketInventoryResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketLifecycleResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketLoggingResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketPolicyResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketReplicationRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketReplicationResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketTagsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteBucketWebsiteResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteLiveChannelResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteMultipleObjectsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteMultipleObjectsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteObjectRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteObjectTaggingRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\DeleteObjectTaggingResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ExtendBucketWormRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\ExtendBucketWormResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketAclResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketCorsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketEncryptionResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketInfoResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketInventoryRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketInventoryResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketLifecycleResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketLocationResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketLoggingResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketPolicyResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketRefererResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketReplicationLocationResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketReplicationProgressRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketReplicationProgressResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketReplicationResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketRequestPaymentResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketTagsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketTransferAccelerationResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketVersioningResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketWebsiteResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketWormResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetLiveChannelHistoryResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetLiveChannelInfoResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetLiveChannelStatResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectAclRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectAclResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectMetaRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectMetaResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectTaggingRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetObjectTaggingResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetServiceRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetServiceResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetSymlinkRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetSymlinkResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetVodPlaylistRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetVodPlaylistResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\HeadObjectHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\HeadObjectRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\HeadObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\InitiateBucketWormRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\InitiateBucketWormResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\InitiateMultipartUploadHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\InitiateMultipartUploadRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\InitiateMultipartUploadResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListBucketInventoryRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListBucketInventoryResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListBucketsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListBucketsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListLiveChannelRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListLiveChannelResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListMultipartUploadsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListMultipartUploadsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListObjectsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListObjectsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListObjectsV2Request;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListObjectsV2Response;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListObjectVersionsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListObjectVersionsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListPartsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListPartsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\ListPartsShrinkRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\OptionObjectHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\OptionObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PostObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PostVodPlaylistRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PostVodPlaylistResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketAclHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketAclResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketCorsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketCorsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketEncryptionRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketEncryptionResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketInventoryRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketInventoryResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketLifecycleRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketLifecycleResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketLoggingRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketLoggingResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketPolicyRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketPolicyResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketRefererRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketRefererResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketReplicationRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketReplicationResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketRequestPaymentRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketRequestPaymentResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketTagsRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketTagsResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketTransferAccelerationRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketTransferAccelerationResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketVersioningRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketVersioningResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketWebsiteRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutBucketWebsiteResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutLiveChannelRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutLiveChannelResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutLiveChannelStatusRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutLiveChannelStatusResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutObjectAclHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutObjectAclRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutObjectAclResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutObjectHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutObjectRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutObjectTaggingRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutObjectTaggingResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutSymlinkHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\PutSymlinkResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\RestoreObjectRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\RestoreObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\SelectObjectRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\SelectObjectResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\UploadPartCopyHeaders;
use AlibabaCloud\SDK\Oss\V20190517\Models\UploadPartCopyRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\UploadPartCopyResponse;
use AlibabaCloud\SDK\Oss\V20190517\Models\UploadPartRequest;
use AlibabaCloud\SDK\Oss\V20190517\Models\UploadPartResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayOss\Client as DarabonbaGatewayOssClient;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Oss extends OpenApiClient
{
    protected $_client;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->_client       = new DarabonbaGatewayOssClient();
        $this->_spi          = $this->_client;
        $this->_endpointRule = '';
    }

    /**
     * @param string $bucket
     *
     * @return AbortBucketWormResponse
     */
    public function abortBucketWorm($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->abortBucketWormWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AbortBucketWormResponse
     */
    public function abortBucketWormWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AbortBucketWorm',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?worm',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return AbortBucketWormResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                      $bucket
     * @param string                      $key
     * @param AbortMultipartUploadRequest $request
     *
     * @return AbortMultipartUploadResponse
     */
    public function abortMultipartUpload($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->abortMultipartUploadWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string                      $bucket
     * @param string                      $key
     * @param AbortMultipartUploadRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AbortMultipartUploadResponse
     */
    public function abortMultipartUploadWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->uploadId)) {
            $query['uploadId'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortMultipartUpload',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return AbortMultipartUploadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param AppendObjectRequest $request
     *
     * @return AppendObjectResponse
     */
    public function appendObject($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AppendObjectHeaders([]);

        return $this->appendObjectWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param AppendObjectRequest $request
     * @param AppendObjectHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return AppendObjectResponse
     */
    public function appendObjectWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->position)) {
            $query['position'] = $request->position;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->cacheControl)) {
            $realHeaders['Cache-Control'] = Utils::toJSONString($headers->cacheControl);
        }
        if (!Utils::isUnset($headers->contentDisposition)) {
            $realHeaders['Content-Disposition'] = Utils::toJSONString($headers->contentDisposition);
        }
        if (!Utils::isUnset($headers->contentEncoding)) {
            $realHeaders['Content-Encoding'] = Utils::toJSONString($headers->contentEncoding);
        }
        if (!Utils::isUnset($headers->contentMD5)) {
            $realHeaders['Content-MD5'] = Utils::toJSONString($headers->contentMD5);
        }
        if (!Utils::isUnset($headers->expires)) {
            $realHeaders['Expires'] = Utils::toJSONString($headers->expires);
        }
        if (!Utils::isUnset($headers->metaData)) {
            $realHeaders['x-oss-meta-*'] = Utils::toJSONString($headers->metaData);
        }
        if (!Utils::isUnset($headers->acl)) {
            $realHeaders['x-oss-object-acl'] = Utils::toJSONString($headers->acl);
        }
        if (!Utils::isUnset($headers->serverSideEncryption)) {
            $realHeaders['x-oss-server-side-encryption'] = Utils::toJSONString($headers->serverSideEncryption);
        }
        if (!Utils::isUnset($headers->storageClass)) {
            $realHeaders['x-oss-storage-class'] = Utils::toJSONString($headers->storageClass);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
            'stream'  => $request->body,
        ]);
        $params = new Params([
            'action'      => 'AppendObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?append',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'binary',
            'bodyType'    => 'none',
        ]);

        return AppendObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $bucket
     * @param CompleteBucketWormRequest $request
     *
     * @return CompleteBucketWormResponse
     */
    public function completeBucketWorm($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->completeBucketWormWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                    $bucket
     * @param CompleteBucketWormRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CompleteBucketWormResponse
     */
    public function completeBucketWormWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->wormId)) {
            $query['wormId'] = $request->wormId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompleteBucketWorm',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return CompleteBucketWormResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                         $bucket
     * @param string                         $key
     * @param CompleteMultipartUploadRequest $request
     *
     * @return CompleteMultipartUploadResponse
     */
    public function completeMultipartUpload($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CompleteMultipartUploadHeaders([]);

        return $this->completeMultipartUploadWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string                         $bucket
     * @param string                         $key
     * @param CompleteMultipartUploadRequest $request
     * @param CompleteMultipartUploadHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CompleteMultipartUploadResponse
     */
    public function completeMultipartUploadWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->encodingType)) {
            $query['encoding-type'] = $request->encodingType;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $query['uploadId'] = $request->uploadId;
        }
        $body = [];
        if (!Utils::isUnset($request->completeMultipartUpload)) {
            $body['completeMultipartUpload'] = $request->completeMultipartUpload;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->completeAll)) {
            $realHeaders['x-oss-complete-all'] = Utils::toJSONString($headers->completeAll);
        }
        if (!Utils::isUnset($headers->forbidOverwrite)) {
            $realHeaders['x-oss-forbid-overwrite'] = Utils::toJSONString($headers->forbidOverwrite);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CompleteMultipartUpload',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return CompleteMultipartUploadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     * @param string $key
     *
     * @return CopyObjectResponse
     */
    public function copyObject($bucket, $key)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CopyObjectHeaders([]);

        return $this->copyObjectWithOptions($bucket, $key, $headers, $runtime);
    }

    /**
     * @param string            $bucket
     * @param string            $key
     * @param CopyObjectHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CopyObjectResponse
     */
    public function copyObjectWithOptions($bucket, $key, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $realHeaders       = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->copySource)) {
            $realHeaders['x-oss-copy-source'] = Utils::toJSONString($headers->copySource);
        }
        if (!Utils::isUnset($headers->copySourceIfMatch)) {
            $realHeaders['x-oss-copy-source-if-match'] = Utils::toJSONString($headers->copySourceIfMatch);
        }
        if (!Utils::isUnset($headers->copySourceIfModifiedSince)) {
            $realHeaders['x-oss-copy-source-if-modified-since'] = Utils::toJSONString($headers->copySourceIfModifiedSince);
        }
        if (!Utils::isUnset($headers->copySourceIfNoneMatch)) {
            $realHeaders['x-oss-copy-source-if-none-match'] = Utils::toJSONString($headers->copySourceIfNoneMatch);
        }
        if (!Utils::isUnset($headers->copySourceIfUnmodifiedSince)) {
            $realHeaders['x-oss-copy-source-if-unmodified-since'] = Utils::toJSONString($headers->copySourceIfUnmodifiedSince);
        }
        if (!Utils::isUnset($headers->forbidOverwrite)) {
            $realHeaders['x-oss-forbid-overwrite'] = Utils::toJSONString($headers->forbidOverwrite);
        }
        if (!Utils::isUnset($headers->metaData)) {
            $realHeaders['x-oss-meta-*'] = Utils::toJSONString($headers->metaData);
        }
        if (!Utils::isUnset($headers->metadataDirective)) {
            $realHeaders['x-oss-metadata-directive'] = Utils::toJSONString($headers->metadataDirective);
        }
        if (!Utils::isUnset($headers->acl)) {
            $realHeaders['x-oss-object-acl'] = Utils::toJSONString($headers->acl);
        }
        if (!Utils::isUnset($headers->sse)) {
            $realHeaders['x-oss-server-side-encryption'] = Utils::toJSONString($headers->sse);
        }
        if (!Utils::isUnset($headers->sseKeyId)) {
            $realHeaders['x-oss-server-side-encryption-key-id'] = Utils::toJSONString($headers->sseKeyId);
        }
        if (!Utils::isUnset($headers->storageClass)) {
            $realHeaders['x-oss-storage-class'] = Utils::toJSONString($headers->storageClass);
        }
        if (!Utils::isUnset($headers->tagging)) {
            $realHeaders['x-oss-tagging'] = Utils::toJSONString($headers->tagging);
        }
        if (!Utils::isUnset($headers->xOssTaggingDirective)) {
            $realHeaders['x-oss-tagging-directive'] = Utils::toJSONString($headers->xOssTaggingDirective);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'CopyObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'binary',
            'bodyType'    => 'xml',
        ]);

        return CopyObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return DeleteBucketResponse
     */
    public function deleteBucket($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBucketResponse
     */
    public function deleteBucketWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBucket',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return DeleteBucketCorsResponse
     */
    public function deleteBucketCors($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketCorsWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBucketCorsResponse
     */
    public function deleteBucketCorsWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketCors',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?cors',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketCorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return DeleteBucketEncryptionResponse
     */
    public function deleteBucketEncryption($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketEncryptionWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBucketEncryptionResponse
     */
    public function deleteBucketEncryptionWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketEncryption',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?encryption',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketEncryptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                       $bucket
     * @param DeleteBucketInventoryRequest $request
     *
     * @return DeleteBucketInventoryResponse
     */
    public function deleteBucketInventory($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketInventoryWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                       $bucket
     * @param DeleteBucketInventoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteBucketInventoryResponse
     */
    public function deleteBucketInventoryWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->inventoryId)) {
            $query['inventoryId'] = $request->inventoryId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketInventory',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?inventory',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketInventoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return DeleteBucketLifecycleResponse
     */
    public function deleteBucketLifecycle($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketLifecycleWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBucketLifecycleResponse
     */
    public function deleteBucketLifecycleWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketLifecycle',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?lifecycle',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketLifecycleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return DeleteBucketLoggingResponse
     */
    public function deleteBucketLogging($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketLoggingWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBucketLoggingResponse
     */
    public function deleteBucketLoggingWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketLogging',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?logging',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return DeleteBucketPolicyResponse
     */
    public function deleteBucketPolicy($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketPolicyWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBucketPolicyResponse
     */
    public function deleteBucketPolicyWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketPolicy',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?policy',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                         $bucket
     * @param DeleteBucketReplicationRequest $request
     *
     * @return DeleteBucketReplicationResponse
     */
    public function deleteBucketReplication($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketReplicationWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                         $bucket
     * @param DeleteBucketReplicationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteBucketReplicationResponse
     */
    public function deleteBucketReplicationWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketReplication',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?replication&comp=delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketReplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return DeleteBucketTagsResponse
     */
    public function deleteBucketTags($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketTagsWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBucketTagsResponse
     */
    public function deleteBucketTagsWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketTags',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?tagging',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return DeleteBucketWebsiteResponse
     */
    public function deleteBucketWebsite($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBucketWebsiteWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBucketWebsiteResponse
     */
    public function deleteBucketWebsiteWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketWebsite',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?website',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteBucketWebsiteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     * @param string $channel
     *
     * @return DeleteLiveChannelResponse
     */
    public function deleteLiveChannel($bucket, $channel)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLiveChannelWithOptions($bucket, $channel, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string         $channel
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLiveChannelResponse
     */
    public function deleteLiveChannelWithOptions($bucket, $channel, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $channel           = OpenApiUtilClient::getEncodeParam($channel);
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveChannel',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $channel . '?live',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteMultipleObjectsRequest $request
     *
     * @return DeleteMultipleObjectsResponse
     */
    public function deleteMultipleObjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMultipleObjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteMultipleObjectsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMultipleObjectsResponse
     */
    public function deleteMultipleObjectsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encodingType)) {
            $query['encoding-type'] = $request->encodingType;
        }
        $body = [];
        if (!Utils::isUnset($request->delete)) {
            $body['delete'] = $request->delete;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMultipleObjects',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return DeleteMultipleObjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param DeleteObjectRequest $request
     *
     * @return DeleteObjectResponse
     */
    public function deleteObject($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteObjectWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param DeleteObjectRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteObjectResponse
     */
    public function deleteObjectWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'binary',
            'bodyType'    => 'none',
        ]);

        return DeleteObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                     $bucket
     * @param string                     $key
     * @param DeleteObjectTaggingRequest $request
     *
     * @return DeleteObjectTaggingResponse
     */
    public function deleteObjectTagging($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteObjectTaggingWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string                     $bucket
     * @param string                     $key
     * @param DeleteObjectTaggingRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteObjectTaggingResponse
     */
    public function deleteObjectTaggingWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteObjectTagging',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?tagging',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return DeleteObjectTaggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regions)) {
            $query['regions'] = $request->regions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $bucket
     * @param ExtendBucketWormRequest $request
     *
     * @return ExtendBucketWormResponse
     */
    public function extendBucketWorm($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->extendBucketWormWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                  $bucket
     * @param ExtendBucketWormRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ExtendBucketWormResponse
     */
    public function extendBucketWormWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->wormId)) {
            $query['wormId'] = $request->wormId;
        }
        $body = [];
        if (!Utils::isUnset($request->extendWormConfiguration)) {
            $body['extendWormConfiguration'] = $request->extendWormConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExtendBucketWorm',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?wormExtend',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return ExtendBucketWormResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $bucket
     * @param GetBucketRequest $request
     *
     * @return GetBucketResponse
     */
    public function getBucket($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string           $bucket
     * @param GetBucketRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetBucketResponse
     */
    public function getBucketWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->delimiter)) {
            $query['delimiter'] = $request->delimiter;
        }
        if (!Utils::isUnset($request->encodingType)) {
            $query['encoding-type'] = $request->encodingType;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['max-keys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBucket',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketAclResponse
     */
    public function getBucketAcl($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketAclWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketAclResponse
     */
    public function getBucketAclWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketAcl',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?acl',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketAclResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketCorsResponse
     */
    public function getBucketCors($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketCorsWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketCorsResponse
     */
    public function getBucketCorsWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketCors',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?cors',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketCorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketEncryptionResponse
     */
    public function getBucketEncryption($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketEncryptionWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketEncryptionResponse
     */
    public function getBucketEncryptionWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketEncryption',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?encryption',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketEncryptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketInfoResponse
     */
    public function getBucketInfo($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketInfoWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketInfoResponse
     */
    public function getBucketInfoWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketInfo',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?bucketInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $bucket
     * @param GetBucketInventoryRequest $request
     *
     * @return GetBucketInventoryResponse
     */
    public function getBucketInventory($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketInventoryWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                    $bucket
     * @param GetBucketInventoryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetBucketInventoryResponse
     */
    public function getBucketInventoryWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->inventoryId)) {
            $query['inventoryId'] = $request->inventoryId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBucketInventory',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?inventory',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketInventoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketLifecycleResponse
     */
    public function getBucketLifecycle($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketLifecycleWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketLifecycleResponse
     */
    public function getBucketLifecycleWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketLifecycle',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?lifecycle',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketLifecycleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketLocationResponse
     */
    public function getBucketLocation($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketLocationWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketLocationResponse
     */
    public function getBucketLocationWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketLocation',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?location',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketLoggingResponse
     */
    public function getBucketLogging($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketLoggingWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketLoggingResponse
     */
    public function getBucketLoggingWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketLogging',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?logging',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketPolicyResponse
     */
    public function getBucketPolicy($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketPolicyWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketPolicyResponse
     */
    public function getBucketPolicyWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketPolicy',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?policy',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return GetBucketPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketRefererResponse
     */
    public function getBucketReferer($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketRefererWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketRefererResponse
     */
    public function getBucketRefererWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketReferer',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?referer',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketRefererResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketReplicationResponse
     */
    public function getBucketReplication($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketReplicationWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketReplicationResponse
     */
    public function getBucketReplicationWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketReplication',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?replication',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketReplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketReplicationLocationResponse
     */
    public function getBucketReplicationLocation($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketReplicationLocationWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketReplicationLocationResponse
     */
    public function getBucketReplicationLocationWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketReplicationLocation',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?replicationLocation',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketReplicationLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                              $bucket
     * @param GetBucketReplicationProgressRequest $request
     *
     * @return GetBucketReplicationProgressResponse
     */
    public function getBucketReplicationProgress($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketReplicationProgressWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                              $bucket
     * @param GetBucketReplicationProgressRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetBucketReplicationProgressResponse
     */
    public function getBucketReplicationProgressWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->ruleId)) {
            $query['rule-id'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBucketReplicationProgress',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?replicationProgress',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketReplicationProgressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketRequestPaymentResponse
     */
    public function getBucketRequestPayment($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketRequestPaymentWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketRequestPaymentResponse
     */
    public function getBucketRequestPaymentWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketRequestPayment',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?requestPayment',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketRequestPaymentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketTagsResponse
     */
    public function getBucketTags($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketTagsWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketTagsResponse
     */
    public function getBucketTagsWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketTags',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?tagging',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketTransferAccelerationResponse
     */
    public function getBucketTransferAcceleration($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketTransferAccelerationWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketTransferAccelerationResponse
     */
    public function getBucketTransferAccelerationWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketTransferAcceleration',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?transferAcceleration',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketTransferAccelerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketVersioningResponse
     */
    public function getBucketVersioning($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketVersioningWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketVersioningResponse
     */
    public function getBucketVersioningWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketVersioning',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?versioning',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketVersioningResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketWebsiteResponse
     */
    public function getBucketWebsite($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketWebsiteWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketWebsiteResponse
     */
    public function getBucketWebsiteWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketWebsite',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?website',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketWebsiteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return GetBucketWormResponse
     */
    public function getBucketWorm($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucketWormWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucketWormResponse
     */
    public function getBucketWormWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBucketWorm',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?worm',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetBucketWormResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     * @param string $channel
     *
     * @return GetLiveChannelHistoryResponse
     */
    public function getLiveChannelHistory($bucket, $channel)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLiveChannelHistoryWithOptions($bucket, $channel, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string         $channel
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLiveChannelHistoryResponse
     */
    public function getLiveChannelHistoryWithOptions($bucket, $channel, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $channel           = OpenApiUtilClient::getEncodeParam($channel);
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLiveChannelHistory',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $channel . '?live&comp=history',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetLiveChannelHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     * @param string $channel
     *
     * @return GetLiveChannelInfoResponse
     */
    public function getLiveChannelInfo($bucket, $channel)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLiveChannelInfoWithOptions($bucket, $channel, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string         $channel
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLiveChannelInfoResponse
     */
    public function getLiveChannelInfoWithOptions($bucket, $channel, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $channel           = OpenApiUtilClient::getEncodeParam($channel);
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLiveChannelInfo',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $channel . '?live',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetLiveChannelInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     * @param string $channel
     *
     * @return GetLiveChannelStatResponse
     */
    public function getLiveChannelStat($bucket, $channel)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLiveChannelStatWithOptions($bucket, $channel, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string         $channel
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLiveChannelStatResponse
     */
    public function getLiveChannelStatWithOptions($bucket, $channel, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $channel           = OpenApiUtilClient::getEncodeParam($channel);
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLiveChannelStat',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $channel . '?live&comp=stat',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetLiveChannelStatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $bucket
     * @param string           $key
     * @param GetObjectRequest $request
     *
     * @return GetObjectResponse
     */
    public function getObject($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetObjectHeaders([]);

        return $this->getObjectWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string           $bucket
     * @param string           $key
     * @param GetObjectRequest $request
     * @param GetObjectHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetObjectResponse
     */
    public function getObjectWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->responseCacheControl)) {
            $query['response-cache-control'] = $request->responseCacheControl;
        }
        if (!Utils::isUnset($request->responseContentDisposition)) {
            $query['response-content-disposition'] = $request->responseContentDisposition;
        }
        if (!Utils::isUnset($request->responseContentEncoding)) {
            $query['response-content-encoding'] = $request->responseContentEncoding;
        }
        if (!Utils::isUnset($request->responseContentLanguage)) {
            $query['response-content-language'] = $request->responseContentLanguage;
        }
        if (!Utils::isUnset($request->responseContentType)) {
            $query['response-content-type'] = $request->responseContentType;
        }
        if (!Utils::isUnset($request->responseExpires)) {
            $query['response-expires'] = $request->responseExpires;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->acceptEncoding)) {
            $realHeaders['Accept-Encoding'] = Utils::toJSONString($headers->acceptEncoding);
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            $realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        if (!Utils::isUnset($headers->ifModifiedSince)) {
            $realHeaders['If-Modified-Since'] = Utils::toJSONString($headers->ifModifiedSince);
        }
        if (!Utils::isUnset($headers->ifNoneMatch)) {
            $realHeaders['If-None-Match'] = Utils::toJSONString($headers->ifNoneMatch);
        }
        if (!Utils::isUnset($headers->ifUnmodifiedSince)) {
            $realHeaders['If-Unmodified-Since'] = Utils::toJSONString($headers->ifUnmodifiedSince);
        }
        if (!Utils::isUnset($headers->range)) {
            $realHeaders['Range'] = Utils::toJSONString($headers->range);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'binary',
        ]);

        return GetObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param GetObjectAclRequest $request
     *
     * @return GetObjectAclResponse
     */
    public function getObjectAcl($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getObjectAclWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param GetObjectAclRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetObjectAclResponse
     */
    public function getObjectAclWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetObjectAcl',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?acl',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetObjectAclResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $bucket
     * @param string               $key
     * @param GetObjectMetaRequest $request
     *
     * @return GetObjectMetaResponse
     */
    public function getObjectMeta($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getObjectMetaWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string               $bucket
     * @param string               $key
     * @param GetObjectMetaRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetObjectMetaResponse
     */
    public function getObjectMetaWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetObjectMeta',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?objectMeta',
            'method'      => 'HEAD',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'binary',
            'bodyType'    => 'none',
        ]);

        return GetObjectMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $bucket
     * @param string                  $key
     * @param GetObjectTaggingRequest $request
     *
     * @return GetObjectTaggingResponse
     */
    public function getObjectTagging($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getObjectTaggingWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string                  $bucket
     * @param string                  $key
     * @param GetObjectTaggingRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetObjectTaggingResponse
     */
    public function getObjectTaggingWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetObjectTagging',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?tagging',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetObjectTaggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['max-keys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetService',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return GetServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string            $bucket
     * @param string            $key
     * @param GetSymlinkRequest $request
     *
     * @return GetSymlinkResponse
     */
    public function getSymlink($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSymlinkWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string            $bucket
     * @param string            $key
     * @param GetSymlinkRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetSymlinkResponse
     */
    public function getSymlinkWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSymlink',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?symlink',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return GetSymlinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $bucket
     * @param string                $channel
     * @param GetVodPlaylistRequest $request
     *
     * @return GetVodPlaylistResponse
     */
    public function getVodPlaylist($bucket, $channel, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVodPlaylistWithOptions($bucket, $channel, $request, $headers, $runtime);
    }

    /**
     * @param string                $bucket
     * @param string                $channel
     * @param GetVodPlaylistRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetVodPlaylistResponse
     */
    public function getVodPlaylistWithOptions($bucket, $channel, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $channel           = OpenApiUtilClient::getEncodeParam($channel);
        $query             = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVodPlaylist',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $channel . '?vod',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'binary',
        ]);

        return GetVodPlaylistResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string            $bucket
     * @param string            $key
     * @param HeadObjectRequest $request
     *
     * @return HeadObjectResponse
     */
    public function headObject($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HeadObjectHeaders([]);

        return $this->headObjectWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string            $bucket
     * @param string            $key
     * @param HeadObjectRequest $request
     * @param HeadObjectHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return HeadObjectResponse
     */
    public function headObjectWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->ifMatch)) {
            $realHeaders['If-Match'] = Utils::toJSONString($headers->ifMatch);
        }
        if (!Utils::isUnset($headers->ifModifiedSince)) {
            $realHeaders['If-Modified-Since'] = Utils::toJSONString($headers->ifModifiedSince);
        }
        if (!Utils::isUnset($headers->ifNoneMatch)) {
            $realHeaders['If-None-Match'] = Utils::toJSONString($headers->ifNoneMatch);
        }
        if (!Utils::isUnset($headers->ifUnmodifiedSince)) {
            $realHeaders['If-Unmodified-Since'] = Utils::toJSONString($headers->ifUnmodifiedSince);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HeadObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'HEAD',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return HeadObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $bucket
     * @param InitiateBucketWormRequest $request
     *
     * @return InitiateBucketWormResponse
     */
    public function initiateBucketWorm($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initiateBucketWormWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                    $bucket
     * @param InitiateBucketWormRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InitiateBucketWormResponse
     */
    public function initiateBucketWormWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->initiateWormConfiguration)) {
            $body['InitiateWormConfiguration'] = $request->initiateWormConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitiateBucketWorm',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?worm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return InitiateBucketWormResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                         $bucket
     * @param string                         $key
     * @param InitiateMultipartUploadRequest $request
     *
     * @return InitiateMultipartUploadResponse
     */
    public function initiateMultipartUpload($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InitiateMultipartUploadHeaders([]);

        return $this->initiateMultipartUploadWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string                         $bucket
     * @param string                         $key
     * @param InitiateMultipartUploadRequest $request
     * @param InitiateMultipartUploadHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return InitiateMultipartUploadResponse
     */
    public function initiateMultipartUploadWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->encodingType)) {
            $query['encoding-type'] = $request->encodingType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->cacheControl)) {
            $realHeaders['Cache-Control'] = Utils::toJSONString($headers->cacheControl);
        }
        if (!Utils::isUnset($headers->contentDisposition)) {
            $realHeaders['Content-Disposition'] = Utils::toJSONString($headers->contentDisposition);
        }
        if (!Utils::isUnset($headers->contentEncoding)) {
            $realHeaders['Content-Encoding'] = Utils::toJSONString($headers->contentEncoding);
        }
        if (!Utils::isUnset($headers->expires)) {
            $realHeaders['Expires'] = Utils::toJSONString($headers->expires);
        }
        if (!Utils::isUnset($headers->forbidOverwrite)) {
            $realHeaders['x-oss-forbid-overwrite'] = Utils::toJSONString($headers->forbidOverwrite);
        }
        if (!Utils::isUnset($headers->sseDataEncryption)) {
            $realHeaders['x-oss-server-side-data-encryption'] = Utils::toJSONString($headers->sseDataEncryption);
        }
        if (!Utils::isUnset($headers->serverSideEncryption)) {
            $realHeaders['x-oss-server-side-encryption'] = Utils::toJSONString($headers->serverSideEncryption);
        }
        if (!Utils::isUnset($headers->sseKeyId)) {
            $realHeaders['x-oss-server-side-encryption-key-id'] = Utils::toJSONString($headers->sseKeyId);
        }
        if (!Utils::isUnset($headers->storageClass)) {
            $realHeaders['x-oss-storage-class'] = Utils::toJSONString($headers->storageClass);
        }
        if (!Utils::isUnset($headers->tagging)) {
            $realHeaders['x-oss-tagging'] = Utils::toJSONString($headers->tagging);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitiateMultipartUpload',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?uploads',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return InitiateMultipartUploadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                     $bucket
     * @param ListBucketInventoryRequest $request
     *
     * @return ListBucketInventoryResponse
     */
    public function listBucketInventory($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBucketInventoryWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                     $bucket
     * @param ListBucketInventoryRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListBucketInventoryResponse
     */
    public function listBucketInventoryWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->continuationToken)) {
            $query['continuation-token'] = $request->continuationToken;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBucketInventory',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?inventory',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return ListBucketInventoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListBucketsRequest $request
     *
     * @return ListBucketsResponse
     */
    public function listBuckets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBucketsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListBucketsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListBucketsResponse
     */
    public function listBucketsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['max-keys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBuckets',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return ListBucketsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                 $bucket
     * @param ListLiveChannelRequest $request
     *
     * @return ListLiveChannelResponse
     */
    public function listLiveChannel($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLiveChannelWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                 $bucket
     * @param ListLiveChannelRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListLiveChannelResponse
     */
    public function listLiveChannelWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['max-keys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveChannel',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?live',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return ListLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                      $bucket
     * @param ListMultipartUploadsRequest $request
     *
     * @return ListMultipartUploadsResponse
     */
    public function listMultipartUploads($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMultipartUploadsWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                      $bucket
     * @param ListMultipartUploadsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListMultipartUploadsResponse
     */
    public function listMultipartUploadsWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->delimiter)) {
            $query['delimiter'] = $request->delimiter;
        }
        if (!Utils::isUnset($request->encodingType)) {
            $query['encoding-type'] = $request->encodingType;
        }
        if (!Utils::isUnset($request->keyMarker)) {
            $query['key-marker'] = $request->keyMarker;
        }
        if (!Utils::isUnset($request->maxUploads)) {
            $query['max-uploads'] = $request->maxUploads;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->uploadIdMarker)) {
            $query['upload-id-marker'] = $request->uploadIdMarker;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMultipartUploads',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?uploads',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return ListMultipartUploadsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $bucket
     * @param ListObjectVersionsRequest $request
     *
     * @return ListObjectVersionsResponse
     */
    public function listObjectVersions($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listObjectVersionsWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                    $bucket
     * @param ListObjectVersionsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListObjectVersionsResponse
     */
    public function listObjectVersionsWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->delimiter)) {
            $query['delimiter'] = $request->delimiter;
        }
        if (!Utils::isUnset($request->encodingType)) {
            $query['encoding-type'] = $request->encodingType;
        }
        if (!Utils::isUnset($request->keyMarker)) {
            $query['key-marker'] = $request->keyMarker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['max-keys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->versionIdMarker)) {
            $query['version-id-marker'] = $request->versionIdMarker;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListObjectVersions',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return ListObjectVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $bucket
     * @param ListObjectsRequest $request
     *
     * @return ListObjectsResponse
     */
    public function listObjects($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listObjectsWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string             $bucket
     * @param ListObjectsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListObjectsResponse
     */
    public function listObjectsWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->delimiter)) {
            $query['delimiter'] = $request->delimiter;
        }
        if (!Utils::isUnset($request->encodingType)) {
            $query['encoding-type'] = $request->encodingType;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['max-keys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListObjects',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return ListObjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $bucket
     * @param ListObjectsV2Request $request
     *
     * @return ListObjectsV2Response
     */
    public function listObjectsV2($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listObjectsV2WithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string               $bucket
     * @param ListObjectsV2Request $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListObjectsV2Response
     */
    public function listObjectsV2WithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->continuationToken)) {
            $query['continuation-token'] = $request->continuationToken;
        }
        if (!Utils::isUnset($request->delimiter)) {
            $query['delimiter'] = $request->delimiter;
        }
        if (!Utils::isUnset($request->encodingType)) {
            $query['encoding-type'] = $request->encodingType;
        }
        if (!Utils::isUnset($request->fetchOwner)) {
            $query['fetch-owner'] = $request->fetchOwner;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['max-keys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->startAfter)) {
            $query['start-after'] = $request->startAfter;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListObjectsV2',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?list-type=2',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return ListObjectsV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $bucket
     * @param string           $key
     * @param ListPartsRequest $request
     *
     * @return ListPartsResponse
     */
    public function listParts($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPartsWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string           $bucket
     * @param string           $key
     * @param ListPartsRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListPartsResponse
     */
    public function listPartsWithOptions($bucket, $key, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $request           = new ListPartsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->encodingType)) {
            $request->encodingTypeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->encodingType, 'encoding-type', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->encodingTypeShrink)) {
            $query['encoding-type'] = $request->encodingTypeShrink;
        }
        if (!Utils::isUnset($request->maxParts)) {
            $query['max-parts'] = $request->maxParts;
        }
        if (!Utils::isUnset($request->partNumberMarker)) {
            $query['part-number-marker'] = $request->partNumberMarker;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $query['uploadId'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListParts',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return ListPartsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     * @param string $key
     *
     * @return OptionObjectResponse
     */
    public function optionObject($bucket, $key)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OptionObjectHeaders([]);

        return $this->optionObjectWithOptions($bucket, $key, $headers, $runtime);
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param OptionObjectHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return OptionObjectResponse
     */
    public function optionObjectWithOptions($bucket, $key, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $realHeaders       = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accessControlRequestHeaders)) {
            $realHeaders['Access-Control-Request-Headers'] = Utils::toJSONString($headers->accessControlRequestHeaders);
        }
        if (!Utils::isUnset($headers->accessControlRequestMethod)) {
            $realHeaders['Access-Control-Request-Method'] = Utils::toJSONString($headers->accessControlRequestMethod);
        }
        if (!Utils::isUnset($headers->origin)) {
            $realHeaders['Origin'] = Utils::toJSONString($headers->origin);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'OptionObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'OPTIONS',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return OptionObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return PostObjectResponse
     */
    public function postObject($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->postObjectWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string         $bucket
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PostObjectResponse
     */
    public function postObjectWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PostObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'none',
        ]);

        return PostObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                 $bucket
     * @param string                 $channel
     * @param string                 $playlist
     * @param PostVodPlaylistRequest $request
     *
     * @return PostVodPlaylistResponse
     */
    public function postVodPlaylist($bucket, $channel, $playlist, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->postVodPlaylistWithOptions($bucket, $channel, $playlist, $request, $headers, $runtime);
    }

    /**
     * @param string                 $bucket
     * @param string                 $channel
     * @param string                 $playlist
     * @param PostVodPlaylistRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return PostVodPlaylistResponse
     */
    public function postVodPlaylistWithOptions($bucket, $channel, $playlist, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $channel           = OpenApiUtilClient::getEncodeParam($channel);
        $playlist          = OpenApiUtilClient::getEncodeParam($playlist);
        $query             = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PostVodPlaylist',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $channel . '/' . $playlist . '?vod',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PostVodPlaylistResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $bucket
     * @param PutBucketRequest $request
     *
     * @return PutBucketResponse
     */
    public function putBucket($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PutBucketHeaders([]);

        return $this->putBucketWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string           $bucket
     * @param PutBucketRequest $request
     * @param PutBucketHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return PutBucketResponse
     */
    public function putBucketWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->createBucketConfiguration)) {
            $body['CreateBucketConfiguration'] = $request->createBucketConfiguration;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->acl)) {
            $realHeaders['x-oss-acl'] = Utils::toJSONString($headers->acl);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucket',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     *
     * @return PutBucketAclResponse
     */
    public function putBucketAcl($bucket)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PutBucketAclHeaders([]);

        return $this->putBucketAclWithOptions($bucket, $headers, $runtime);
    }

    /**
     * @param string              $bucket
     * @param PutBucketAclHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PutBucketAclResponse
     */
    public function putBucketAclWithOptions($bucket, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $realHeaders       = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->acl)) {
            $realHeaders['x-oss-acl'] = Utils::toJSONString($headers->acl);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'PutBucketAcl',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?acl',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketAclResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $bucket
     * @param PutBucketCorsRequest $request
     *
     * @return PutBucketCorsResponse
     */
    public function putBucketCors($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketCorsWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string               $bucket
     * @param PutBucketCorsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return PutBucketCorsResponse
     */
    public function putBucketCorsWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->cORSConfiguration)) {
            $body['CORSConfiguration'] = $request->cORSConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketCors',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?cors',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketCorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                     $bucket
     * @param PutBucketEncryptionRequest $request
     *
     * @return PutBucketEncryptionResponse
     */
    public function putBucketEncryption($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketEncryptionWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                     $bucket
     * @param PutBucketEncryptionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return PutBucketEncryptionResponse
     */
    public function putBucketEncryptionWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->serverSideEncryptionRule)) {
            $body['ServerSideEncryptionRule'] = $request->serverSideEncryptionRule;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketEncryption',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?encryption',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketEncryptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $bucket
     * @param PutBucketInventoryRequest $request
     *
     * @return PutBucketInventoryResponse
     */
    public function putBucketInventory($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketInventoryWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                    $bucket
     * @param PutBucketInventoryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PutBucketInventoryResponse
     */
    public function putBucketInventoryWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $query             = [];
        if (!Utils::isUnset($request->inventoryId)) {
            $query['inventoryId'] = $request->inventoryId;
        }
        $body = [];
        if (!Utils::isUnset($request->inventoryConfiguration)) {
            $body['InventoryConfiguration'] = $request->inventoryConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketInventory',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?inventory',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketInventoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $bucket
     * @param PutBucketLifecycleRequest $request
     *
     * @return PutBucketLifecycleResponse
     */
    public function putBucketLifecycle($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketLifecycleWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                    $bucket
     * @param PutBucketLifecycleRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PutBucketLifecycleResponse
     */
    public function putBucketLifecycleWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->lifecycleConfiguration)) {
            $body['LifecycleConfiguration'] = $request->lifecycleConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketLifecycle',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?lifecycle',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketLifecycleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $bucket
     * @param PutBucketLoggingRequest $request
     *
     * @return PutBucketLoggingResponse
     */
    public function putBucketLogging($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketLoggingWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                  $bucket
     * @param PutBucketLoggingRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PutBucketLoggingResponse
     */
    public function putBucketLoggingWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->bucketLoggingStatus)) {
            $body['BucketLoggingStatus'] = $request->bucketLoggingStatus;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketLogging',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?logging',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                 $bucket
     * @param PutBucketPolicyRequest $request
     *
     * @return PutBucketPolicyResponse
     */
    public function putBucketPolicy($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketPolicyWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                 $bucket
     * @param PutBucketPolicyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return PutBucketPolicyResponse
     */
    public function putBucketPolicyWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $req               = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => $request->policy,
        ]);
        $params = new Params([
            'action'      => 'PutBucketPolicy',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?policy',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PutBucketPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $bucket
     * @param PutBucketRefererRequest $request
     *
     * @return PutBucketRefererResponse
     */
    public function putBucketReferer($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketRefererWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                  $bucket
     * @param PutBucketRefererRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PutBucketRefererResponse
     */
    public function putBucketRefererWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->refererConfiguration)) {
            $body['RefererConfiguration'] = $request->refererConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketReferer',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?referer',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketRefererResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                      $bucket
     * @param PutBucketReplicationRequest $request
     *
     * @return PutBucketReplicationResponse
     */
    public function putBucketReplication($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketReplicationWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                      $bucket
     * @param PutBucketReplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PutBucketReplicationResponse
     */
    public function putBucketReplicationWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->replicationConfiguration)) {
            $body['ReplicationConfiguration'] = $request->replicationConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketReplication',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?replication&comp=add',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketReplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                         $bucket
     * @param PutBucketRequestPaymentRequest $request
     *
     * @return PutBucketRequestPaymentResponse
     */
    public function putBucketRequestPayment($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketRequestPaymentWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                         $bucket
     * @param PutBucketRequestPaymentRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return PutBucketRequestPaymentResponse
     */
    public function putBucketRequestPaymentWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->requestPaymentConfiguration)) {
            $body['RequestPaymentConfiguration'] = $request->requestPaymentConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketRequestPayment',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?requestPayment',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketRequestPaymentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $bucket
     * @param PutBucketTagsRequest $request
     *
     * @return PutBucketTagsResponse
     */
    public function putBucketTags($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketTagsWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string               $bucket
     * @param PutBucketTagsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return PutBucketTagsResponse
     */
    public function putBucketTagsWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->tagging)) {
            $body['Tagging'] = $request->tagging;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketTags',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?tagging',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                               $bucket
     * @param PutBucketTransferAccelerationRequest $request
     *
     * @return PutBucketTransferAccelerationResponse
     */
    public function putBucketTransferAcceleration($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketTransferAccelerationWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                               $bucket
     * @param PutBucketTransferAccelerationRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return PutBucketTransferAccelerationResponse
     */
    public function putBucketTransferAccelerationWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->transferAccelerationConfiguration)) {
            $body['TransferAccelerationConfiguration'] = $request->transferAccelerationConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketTransferAcceleration',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?transferAcceleration',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketTransferAccelerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                     $bucket
     * @param PutBucketVersioningRequest $request
     *
     * @return PutBucketVersioningResponse
     */
    public function putBucketVersioning($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketVersioningWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                     $bucket
     * @param PutBucketVersioningRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return PutBucketVersioningResponse
     */
    public function putBucketVersioningWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->versioningConfiguration)) {
            $body['VersioningConfiguration'] = $request->versioningConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketVersioning',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?versioning',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketVersioningResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $bucket
     * @param PutBucketWebsiteRequest $request
     *
     * @return PutBucketWebsiteResponse
     */
    public function putBucketWebsite($bucket, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putBucketWebsiteWithOptions($bucket, $request, $headers, $runtime);
    }

    /**
     * @param string                  $bucket
     * @param PutBucketWebsiteRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PutBucketWebsiteResponse
     */
    public function putBucketWebsiteWithOptions($bucket, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $body              = [];
        if (!Utils::isUnset($request->websiteConfiguration)) {
            $body['WebsiteConfiguration'] = $request->websiteConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucketWebsite',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/?website',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutBucketWebsiteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $bucket
     * @param string                $channel
     * @param PutLiveChannelRequest $request
     *
     * @return PutLiveChannelResponse
     */
    public function putLiveChannel($bucket, $channel, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putLiveChannelWithOptions($bucket, $channel, $request, $headers, $runtime);
    }

    /**
     * @param string                $bucket
     * @param string                $channel
     * @param PutLiveChannelRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PutLiveChannelResponse
     */
    public function putLiveChannelWithOptions($bucket, $channel, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $channel           = OpenApiUtilClient::getEncodeParam($channel);
        $body              = [];
        if (!Utils::isUnset($request->liveChannelConfiguration)) {
            $body['LiveChannelConfiguration'] = $request->liveChannelConfiguration;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutLiveChannel',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $channel . '?live',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return PutLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                      $bucket
     * @param string                      $channel
     * @param PutLiveChannelStatusRequest $request
     *
     * @return PutLiveChannelStatusResponse
     */
    public function putLiveChannelStatus($bucket, $channel, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putLiveChannelStatusWithOptions($bucket, $channel, $request, $headers, $runtime);
    }

    /**
     * @param string                      $bucket
     * @param string                      $channel
     * @param PutLiveChannelStatusRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PutLiveChannelStatusResponse
     */
    public function putLiveChannelStatusWithOptions($bucket, $channel, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $channel           = OpenApiUtilClient::getEncodeParam($channel);
        $query             = [];
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutLiveChannelStatus',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $channel . '?live',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutLiveChannelStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $bucket
     * @param string           $key
     * @param PutObjectRequest $request
     *
     * @return PutObjectResponse
     */
    public function putObject($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PutObjectHeaders([]);

        return $this->putObjectWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string           $bucket
     * @param string           $key
     * @param PutObjectRequest $request
     * @param PutObjectHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return PutObjectResponse
     */
    public function putObjectWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $realHeaders       = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->forbidOverwrite)) {
            $realHeaders['x-oss-forbid-overwrite'] = Utils::toJSONString($headers->forbidOverwrite);
        }
        if (!Utils::isUnset($headers->metaData)) {
            $realHeaders['x-oss-meta-*'] = Utils::toJSONString($headers->metaData);
        }
        if (!Utils::isUnset($headers->acl)) {
            $realHeaders['x-oss-object-acl'] = Utils::toJSONString($headers->acl);
        }
        if (!Utils::isUnset($headers->sseDataEncryption)) {
            $realHeaders['x-oss-server-side-data-encryption'] = Utils::toJSONString($headers->sseDataEncryption);
        }
        if (!Utils::isUnset($headers->serverSideEncryption)) {
            $realHeaders['x-oss-server-side-encryption'] = Utils::toJSONString($headers->serverSideEncryption);
        }
        if (!Utils::isUnset($headers->sseKeyId)) {
            $realHeaders['x-oss-server-side-encryption-key-id'] = Utils::toJSONString($headers->sseKeyId);
        }
        if (!Utils::isUnset($headers->storageClass)) {
            $realHeaders['x-oss-storage-class'] = Utils::toJSONString($headers->storageClass);
        }
        if (!Utils::isUnset($headers->tagging)) {
            $realHeaders['x-oss-tagging'] = Utils::toJSONString($headers->tagging);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'body'    => $request->body,
            'stream'  => $request->body,
        ]);
        $params = new Params([
            'action'      => 'PutObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'binary',
            'bodyType'    => 'none',
        ]);

        return PutObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param PutObjectAclRequest $request
     *
     * @return PutObjectAclResponse
     */
    public function putObjectAcl($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PutObjectAclHeaders([]);

        return $this->putObjectAclWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param PutObjectAclRequest $request
     * @param PutObjectAclHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PutObjectAclResponse
     */
    public function putObjectAclWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->acl)) {
            $realHeaders['x-oss-object-acl'] = Utils::toJSONString($headers->acl);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutObjectAcl',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?acl',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutObjectAclResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $bucket
     * @param string                  $key
     * @param PutObjectTaggingRequest $request
     *
     * @return PutObjectTaggingResponse
     */
    public function putObjectTagging($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putObjectTaggingWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string                  $bucket
     * @param string                  $key
     * @param PutObjectTaggingRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PutObjectTaggingResponse
     */
    public function putObjectTaggingWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $body = [];
        if (!Utils::isUnset($request->tagging)) {
            $body['Tagging'] = $request->tagging;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutObjectTagging',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?tagging',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutObjectTaggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $bucket
     * @param string $key
     *
     * @return PutSymlinkResponse
     */
    public function putSymlink($bucket, $key)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PutSymlinkHeaders([]);

        return $this->putSymlinkWithOptions($bucket, $key, $headers, $runtime);
    }

    /**
     * @param string            $bucket
     * @param string            $key
     * @param PutSymlinkHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return PutSymlinkResponse
     */
    public function putSymlinkWithOptions($bucket, $key, $headers, $runtime)
    {
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $realHeaders       = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->forbidOverwrite)) {
            $realHeaders['x-oss-forbid-overwrite'] = Utils::toJSONString($headers->forbidOverwrite);
        }
        if (!Utils::isUnset($headers->acl)) {
            $realHeaders['x-oss-object-acl'] = Utils::toJSONString($headers->acl);
        }
        if (!Utils::isUnset($headers->storageClass)) {
            $realHeaders['x-oss-storage-class'] = Utils::toJSONString($headers->storageClass);
        }
        if (!Utils::isUnset($headers->symlinkTargetKey)) {
            $realHeaders['x-oss-symlink-target'] = Utils::toJSONString($headers->symlinkTargetKey);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'PutSymlink',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?symlink',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return PutSymlinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $bucket
     * @param string               $key
     * @param RestoreObjectRequest $request
     *
     * @return RestoreObjectResponse
     */
    public function restoreObject($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restoreObjectWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string               $bucket
     * @param string               $key
     * @param RestoreObjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RestoreObjectResponse
     */
    public function restoreObjectWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['versionId'] = $request->versionId;
        }
        $body = [];
        if (!Utils::isUnset($request->body)) {
            $body['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestoreObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '?restore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'none',
        ]);

        return RestoreObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param SelectObjectRequest $request
     *
     * @return SelectObjectResponse
     */
    public function selectObject($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectObjectWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string              $bucket
     * @param string              $key
     * @param SelectObjectRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SelectObjectResponse
     */
    public function selectObjectWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $body              = [];
        if (!Utils::isUnset($request->selectRequest)) {
            $body['SelectRequest'] = $request->selectRequest;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SelectObject',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'binary',
        ]);

        return SelectObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string            $bucket
     * @param string            $key
     * @param UploadPartRequest $request
     *
     * @return UploadPartResponse
     */
    public function uploadPart($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadPartWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string            $bucket
     * @param string            $key
     * @param UploadPartRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UploadPartResponse
     */
    public function uploadPartWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->partNumber)) {
            $query['partNumber'] = $request->partNumber;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $query['uploadId'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
            'stream'  => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UploadPart',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'binary',
            'bodyType'    => 'none',
        ]);

        return UploadPartResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $bucket
     * @param string                $key
     * @param UploadPartCopyRequest $request
     *
     * @return UploadPartCopyResponse
     */
    public function uploadPartCopy($bucket, $key, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UploadPartCopyHeaders([]);

        return $this->uploadPartCopyWithOptions($bucket, $key, $request, $headers, $runtime);
    }

    /**
     * @param string                $bucket
     * @param string                $key
     * @param UploadPartCopyRequest $request
     * @param UploadPartCopyHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UploadPartCopyResponse
     */
    public function uploadPartCopyWithOptions($bucket, $key, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap           = [];
        $hostMap['bucket'] = $bucket;
        $key               = OpenApiUtilClient::getEncodeParam($key);
        $query             = [];
        if (!Utils::isUnset($request->partNumber)) {
            $query['partNumber'] = $request->partNumber;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $query['uploadId'] = $request->uploadId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->copySource)) {
            $realHeaders['x-oss-copy-source'] = Utils::toJSONString($headers->copySource);
        }
        if (!Utils::isUnset($headers->copySourceIfMatch)) {
            $realHeaders['x-oss-copy-source-if-match'] = Utils::toJSONString($headers->copySourceIfMatch);
        }
        if (!Utils::isUnset($headers->copySourceIfModifiedSince)) {
            $realHeaders['x-oss-copy-source-if-modified-since'] = Utils::toJSONString($headers->copySourceIfModifiedSince);
        }
        if (!Utils::isUnset($headers->copySourceIfNoneMatch)) {
            $realHeaders['x-oss-copy-source-if-none-match'] = Utils::toJSONString($headers->copySourceIfNoneMatch);
        }
        if (!Utils::isUnset($headers->copySourceIfUnmodifiedSince)) {
            $realHeaders['x-oss-copy-source-if-unmodified-since'] = Utils::toJSONString($headers->copySourceIfUnmodifiedSince);
        }
        if (!Utils::isUnset($headers->copySourceRange)) {
            $realHeaders['x-oss-copy-source-range'] = Utils::toJSONString($headers->copySourceRange);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadPartCopy',
            'version'     => '2019-05-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . $key . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'xml',
            'bodyType'    => 'xml',
        ]);

        return UploadPartCopyResponse::fromMap($this->execute($params, $req, $runtime));
    }
}
