<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionAudioTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionAudioTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddDeletionVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchAudioTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchAudioTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchAudioTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageAudioTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageAudioTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageAudioTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageVideoTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageVideoTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddStorageVideoTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CancelBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CancelBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CreateBatchTaskAdvanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CreateBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\CreateBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioInstanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioInstanceResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioStorageHistoryRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioStorageHistoryResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioTaskStatusRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioTaskStatusResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetStorageHistoryRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetStorageHistoryResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListBatchTaskRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListBatchTaskResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchAudioTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchAudioTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchVideoTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchVideoTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageAudioTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageAudioTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageVideoTasksRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageVideoTasksResponse;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ModifyPriorityRequest;
use AlibabaCloud\SDK\Videosearch\V20200225\Models\ModifyPriorityResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Videosearch extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'  => 'multisearch.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'multisearch.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('videosearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param AddDeletionAudioTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDeletionAudioTaskResponse
     */
    public function addDeletionAudioTask($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDeletionAudioTaskResponse::fromMap($this->doRequest('AddDeletionAudioTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddDeletionAudioTaskRequest $request
     *
     * @return AddDeletionAudioTaskResponse
     */
    public function addDeletionAudioTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeletionAudioTask($request, $runtime);
    }

    /**
     * @param GetAudioTaskStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAudioTaskStatusResponse
     */
    public function getAudioTaskStatus($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAudioTaskStatusResponse::fromMap($this->doRequest('GetAudioTaskStatus', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAudioTaskStatusRequest $request
     *
     * @return GetAudioTaskStatusResponse
     */
    public function getAudioTaskStatusSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioTaskStatus($request, $runtime);
    }

    /**
     * @param CancelBatchTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelBatchTaskResponse
     */
    public function cancelBatchTask($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelBatchTaskResponse::fromMap($this->doRequest('CancelBatchTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelBatchTaskRequest $request
     *
     * @return CancelBatchTaskResponse
     */
    public function cancelBatchTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelBatchTask($request, $runtime);
    }

    /**
     * @param GetAudioStorageHistoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAudioStorageHistoryResponse
     */
    public function getAudioStorageHistory($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAudioStorageHistoryResponse::fromMap($this->doRequest('GetAudioStorageHistory', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAudioStorageHistoryRequest $request
     *
     * @return GetAudioStorageHistoryResponse
     */
    public function getAudioStorageHistorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioStorageHistory($request, $runtime);
    }

    /**
     * @param ModifyPriorityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyPriorityResponse
     */
    public function modifyPriority($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyPriorityResponse::fromMap($this->doRequest('ModifyPriority', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyPriorityRequest $request
     *
     * @return ModifyPriorityResponse
     */
    public function modifyPrioritySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPriority($request, $runtime);
    }

    /**
     * @param GetAudioInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAudioInstanceResponse
     */
    public function getAudioInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAudioInstanceResponse::fromMap($this->doRequest('GetAudioInstance', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAudioInstanceRequest $request
     *
     * @return GetAudioInstanceResponse
     */
    public function getAudioInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioInstance($request, $runtime);
    }

    /**
     * @param GetBatchTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetBatchTaskResponse
     */
    public function getBatchTask($request, $runtime)
    {
        Utils::validateModel($request);

        return GetBatchTaskResponse::fromMap($this->doRequest('GetBatchTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetBatchTaskRequest $request
     *
     * @return GetBatchTaskResponse
     */
    public function getBatchTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchTask($request, $runtime);
    }

    /**
     * @param AddSearchAudioTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddSearchAudioTaskResponse
     */
    public function addSearchAudioTask($request, $runtime)
    {
        Utils::validateModel($request);

        return AddSearchAudioTaskResponse::fromMap($this->doRequest('AddSearchAudioTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddSearchAudioTaskRequest $request
     *
     * @return AddSearchAudioTaskResponse
     */
    public function addSearchAudioTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSearchAudioTask($request, $runtime);
    }

    /**
     * @param AddSearchAudioTaskAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddSearchAudioTaskResponse
     */
    public function addSearchAudioTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
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
        $addSearchAudioTaskReq = new AddSearchAudioTaskRequest([]);
        RpcUtils::convert($request, $addSearchAudioTaskReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->audioFileObject,
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
        $addSearchAudioTaskReq->audioFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addSearchAudioTask($addSearchAudioTaskReq, $runtime);
    }

    /**
     * @param AddStorageAudioTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddStorageAudioTaskResponse
     */
    public function addStorageAudioTask($request, $runtime)
    {
        Utils::validateModel($request);

        return AddStorageAudioTaskResponse::fromMap($this->doRequest('AddStorageAudioTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddStorageAudioTaskRequest $request
     *
     * @return AddStorageAudioTaskResponse
     */
    public function addStorageAudioTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addStorageAudioTask($request, $runtime);
    }

    /**
     * @param AddStorageAudioTaskAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddStorageAudioTaskResponse
     */
    public function addStorageAudioTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
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
        $addStorageAudioTaskReq = new AddStorageAudioTaskRequest([]);
        RpcUtils::convert($request, $addStorageAudioTaskReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->audioFileObject,
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
        $addStorageAudioTaskReq->audioFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addStorageAudioTask($addStorageAudioTaskReq, $runtime);
    }

    /**
     * @param ListStorageAudioTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListStorageAudioTasksResponse
     */
    public function listStorageAudioTasks($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStorageAudioTasksResponse::fromMap($this->doRequest('ListStorageAudioTasks', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListStorageAudioTasksRequest $request
     *
     * @return ListStorageAudioTasksResponse
     */
    public function listStorageAudioTasksSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStorageAudioTasks($request, $runtime);
    }

    /**
     * @param ListSearchAudioTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSearchAudioTasksResponse
     */
    public function listSearchAudioTasks($request, $runtime)
    {
        Utils::validateModel($request);

        return ListSearchAudioTasksResponse::fromMap($this->doRequest('ListSearchAudioTasks', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListSearchAudioTasksRequest $request
     *
     * @return ListSearchAudioTasksResponse
     */
    public function listSearchAudioTasksSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchAudioTasks($request, $runtime);
    }

    /**
     * @param CreateBatchTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateBatchTaskResponse
     */
    public function createBatchTask($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBatchTaskResponse::fromMap($this->doRequest('CreateBatchTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateBatchTaskRequest $request
     *
     * @return CreateBatchTaskResponse
     */
    public function createBatchTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchTask($request, $runtime);
    }

    /**
     * @param CreateBatchTaskAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateBatchTaskResponse
     */
    public function createBatchTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
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
        $createBatchTaskReq = new CreateBatchTaskRequest([]);
        RpcUtils::convert($request, $createBatchTaskReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->fileUrlObject,
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
        $createBatchTaskReq->fileUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->createBatchTask($createBatchTaskReq, $runtime);
    }

    /**
     * @param GetStorageHistoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetStorageHistoryResponse
     */
    public function getStorageHistory($request, $runtime)
    {
        Utils::validateModel($request);

        return GetStorageHistoryResponse::fromMap($this->doRequest('GetStorageHistory', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetStorageHistoryRequest $request
     *
     * @return GetStorageHistoryResponse
     */
    public function getStorageHistorySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageHistory($request, $runtime);
    }

    /**
     * @param ListBatchTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListBatchTaskResponse
     */
    public function listBatchTask($request, $runtime)
    {
        Utils::validateModel($request);

        return ListBatchTaskResponse::fromMap($this->doRequest('ListBatchTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListBatchTaskRequest $request
     *
     * @return ListBatchTaskResponse
     */
    public function listBatchTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchTask($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request, $runtime)
    {
        Utils::validateModel($request);

        return ListInstancesResponse::fromMap($this->doRequest('ListInstances', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstancesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstances($request, $runtime);
    }

    /**
     * @param ListStorageVideoTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListStorageVideoTasksResponse
     */
    public function listStorageVideoTasks($request, $runtime)
    {
        Utils::validateModel($request);

        return ListStorageVideoTasksResponse::fromMap($this->doRequest('ListStorageVideoTasks', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListStorageVideoTasksRequest $request
     *
     * @return ListStorageVideoTasksResponse
     */
    public function listStorageVideoTasksSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStorageVideoTasks($request, $runtime);
    }

    /**
     * @param ListSearchVideoTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSearchVideoTasksResponse
     */
    public function listSearchVideoTasks($request, $runtime)
    {
        Utils::validateModel($request);

        return ListSearchVideoTasksResponse::fromMap($this->doRequest('ListSearchVideoTasks', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListSearchVideoTasksRequest $request
     *
     * @return ListSearchVideoTasksResponse
     */
    public function listSearchVideoTasksSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchVideoTasks($request, $runtime);
    }

    /**
     * @param AddStorageVideoTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddStorageVideoTaskResponse
     */
    public function addStorageVideoTask($request, $runtime)
    {
        Utils::validateModel($request);

        return AddStorageVideoTaskResponse::fromMap($this->doRequest('AddStorageVideoTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddStorageVideoTaskRequest $request
     *
     * @return AddStorageVideoTaskResponse
     */
    public function addStorageVideoTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addStorageVideoTask($request, $runtime);
    }

    /**
     * @param AddStorageVideoTaskAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddStorageVideoTaskResponse
     */
    public function addStorageVideoTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
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
        $addStorageVideoTaskReq = new AddStorageVideoTaskRequest([]);
        RpcUtils::convert($request, $addStorageVideoTaskReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoFileObject,
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
        $addStorageVideoTaskReq->videoFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addStorageVideoTask($addStorageVideoTaskReq, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request, $runtime)
    {
        Utils::validateModel($request);

        return GetInstanceResponse::fromMap($this->doRequest('GetInstance', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstanceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstance($request, $runtime);
    }

    /**
     * @param AddDeletionVideoTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDeletionVideoTaskResponse
     */
    public function addDeletionVideoTask($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDeletionVideoTaskResponse::fromMap($this->doRequest('AddDeletionVideoTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddDeletionVideoTaskRequest $request
     *
     * @return AddDeletionVideoTaskResponse
     */
    public function addDeletionVideoTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeletionVideoTask($request, $runtime);
    }

    /**
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTaskStatusResponse::fromMap($this->doRequest('GetTaskStatus', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatus($request, $runtime);
    }

    /**
     * @param AddSearchVideoTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddSearchVideoTaskResponse
     */
    public function addSearchVideoTask($request, $runtime)
    {
        Utils::validateModel($request);

        return AddSearchVideoTaskResponse::fromMap($this->doRequest('AddSearchVideoTask', 'HTTPS', 'POST', '2020-02-25', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddSearchVideoTaskRequest $request
     *
     * @return AddSearchVideoTaskResponse
     */
    public function addSearchVideoTaskSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSearchVideoTask($request, $runtime);
    }

    /**
     * @param AddSearchVideoTaskAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddSearchVideoTaskResponse
     */
    public function addSearchVideoTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'videosearch',
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
        $addSearchVideoTaskReq = new AddSearchVideoTaskRequest([]);
        RpcUtils::convert($request, $addSearchVideoTaskReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoFileObject,
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
        $addSearchVideoTaskReq->videoFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addSearchVideoTask($addSearchVideoTaskReq, $runtime);
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
