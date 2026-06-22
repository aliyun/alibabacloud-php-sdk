<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchDeleteMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchDeleteMessageResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchPeekMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchPeekMessageResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchReceiveMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchReceiveMessageResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchSendMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchSendMessageResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\ChangeMessageVisibilityRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\ChangeMessageVisibilityResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\DeleteMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\DeleteMessageResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\PeekMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\PeekMessageResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\PublishMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\PublishMessageResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\ReceiveMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\ReceiveMessageResponse;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\SendMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\SendMessageResponse;
use Darabonba\GatewayMns\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class SMQProxy extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'SMQProxy';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'mns.cn-hangzhou.aliyuncs.com',
        ];
    }

    /**
     * 批量删除消息.
     *
     * @param request - BatchDeleteMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteMessageResponse
     *
     * @param string                    $queueName
     * @param BatchDeleteMessageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return BatchDeleteMessageResponse
     */
    public function batchDeleteMessageWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->receiptHandles) {
            @$body['ReceiptHandles'] = $request->receiptHandles;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchDeleteMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量删除消息.
     *
     * @param request - BatchDeleteMessageRequest
     *
     * @returns BatchDeleteMessageResponse
     *
     * @param string                    $queueName
     * @param BatchDeleteMessageRequest $request
     *
     * @return BatchDeleteMessageResponse
     */
    public function batchDeleteMessage($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteMessageWithOptions($queueName, $request, $headers, $runtime);
    }

    /**
     * 批量查看消息.
     *
     * @param request - BatchPeekMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchPeekMessageResponse
     *
     * @param string                  $queueName
     * @param BatchPeekMessageRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return BatchPeekMessageResponse
     */
    public function batchPeekMessageWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->numOfMessages) {
            @$query['numOfMessages'] = $request->numOfMessages;
        }

        if (null !== $request->peekonly) {
            @$query['peekonly'] = $request->peekonly;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchPeekMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchPeekMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量查看消息.
     *
     * @param request - BatchPeekMessageRequest
     *
     * @returns BatchPeekMessageResponse
     *
     * @param string                  $queueName
     * @param BatchPeekMessageRequest $request
     *
     * @return BatchPeekMessageResponse
     */
    public function batchPeekMessage($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchPeekMessageWithOptions($queueName, $request, $headers, $runtime);
    }

    /**
     * 批量消费消息.
     *
     * @param request - BatchReceiveMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchReceiveMessageResponse
     *
     * @param string                     $queueName
     * @param BatchReceiveMessageRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return BatchReceiveMessageResponse
     */
    public function batchReceiveMessageWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->numOfMessages) {
            @$query['numOfMessages'] = $request->numOfMessages;
        }

        if (null !== $request->waitseconds) {
            @$query['waitseconds'] = $request->waitseconds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchReceiveMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchReceiveMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量消费消息.
     *
     * @param request - BatchReceiveMessageRequest
     *
     * @returns BatchReceiveMessageResponse
     *
     * @param string                     $queueName
     * @param BatchReceiveMessageRequest $request
     *
     * @return BatchReceiveMessageResponse
     */
    public function batchReceiveMessage($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchReceiveMessageWithOptions($queueName, $request, $headers, $runtime);
    }

    /**
     * 批量发送消息.
     *
     * @param request - BatchSendMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSendMessageResponse
     *
     * @param string                  $queueName
     * @param BatchSendMessageRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return BatchSendMessageResponse
     */
    public function batchSendMessageWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['Messages'] = $request->messages;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchSendMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchSendMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量发送消息.
     *
     * @param request - BatchSendMessageRequest
     *
     * @returns BatchSendMessageResponse
     *
     * @param string                  $queueName
     * @param BatchSendMessageRequest $request
     *
     * @return BatchSendMessageResponse
     */
    public function batchSendMessage($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchSendMessageWithOptions($queueName, $request, $headers, $runtime);
    }

    /**
     * 修改消息下次可消费时间.
     *
     * @param request - ChangeMessageVisibilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMessageVisibilityResponse
     *
     * @param string                         $queueName
     * @param ChangeMessageVisibilityRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ChangeMessageVisibilityResponse
     */
    public function changeMessageVisibilityWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->receiptHandle) {
            @$query['receiptHandle'] = $request->receiptHandle;
        }

        if (null !== $request->visibilityTimeout) {
            @$query['visibilityTimeout'] = $request->visibilityTimeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeMessageVisibility',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeMessageVisibilityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改消息下次可消费时间.
     *
     * @param request - ChangeMessageVisibilityRequest
     *
     * @returns ChangeMessageVisibilityResponse
     *
     * @param string                         $queueName
     * @param ChangeMessageVisibilityRequest $request
     *
     * @return ChangeMessageVisibilityResponse
     */
    public function changeMessageVisibility($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeMessageVisibilityWithOptions($queueName, $request, $headers, $runtime);
    }

    /**
     * 删除已消费消息.
     *
     * @param request - DeleteMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMessageResponse
     *
     * @param string               $queueName
     * @param DeleteMessageRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteMessageResponse
     */
    public function deleteMessageWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->receiptHandle) {
            @$query['ReceiptHandle'] = $request->receiptHandle;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除已消费消息.
     *
     * @param request - DeleteMessageRequest
     *
     * @returns DeleteMessageResponse
     *
     * @param string               $queueName
     * @param DeleteMessageRequest $request
     *
     * @return DeleteMessageResponse
     */
    public function deleteMessage($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMessageWithOptions($queueName, $request, $headers, $runtime);
    }

    /**
     * 查看消息.
     *
     * @param request - PeekMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PeekMessageResponse
     *
     * @param string             $queueName
     * @param PeekMessageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PeekMessageResponse
     */
    public function peekMessageWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->peekonly) {
            @$query['peekonly'] = $request->peekonly;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PeekMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PeekMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看消息.
     *
     * @param request - PeekMessageRequest
     *
     * @returns PeekMessageResponse
     *
     * @param string             $queueName
     * @param PeekMessageRequest $request
     *
     * @return PeekMessageResponse
     */
    public function peekMessage($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->peekMessageWithOptions($queueName, $request, $headers, $runtime);
    }

    /**
     * 发布消息.
     *
     * @param request - PublishMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishMessageResponse
     *
     * @param string                $topicName
     * @param PublishMessageRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PublishMessageResponse
     */
    public function publishMessageWithOptions($topicName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messageAttributes) {
            @$body['MessageAttributes'] = $request->messageAttributes;
        }

        if (null !== $request->messageBody) {
            @$body['MessageBody'] = $request->messageBody;
        }

        if (null !== $request->messageTag) {
            @$body['MessageTag'] = $request->messageTag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/topics/' . $topicName . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发布消息.
     *
     * @param request - PublishMessageRequest
     *
     * @returns PublishMessageResponse
     *
     * @param string                $topicName
     * @param PublishMessageRequest $request
     *
     * @return PublishMessageResponse
     */
    public function publishMessage($topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishMessageWithOptions($topicName, $request, $headers, $runtime);
    }

    /**
     * 消费消息.
     *
     * @param request - ReceiveMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReceiveMessageResponse
     *
     * @param string                $queueName
     * @param ReceiveMessageRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ReceiveMessageResponse
     */
    public function receiveMessageWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->waitseconds) {
            @$query['waitseconds'] = $request->waitseconds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReceiveMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReceiveMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 消费消息.
     *
     * @param request - ReceiveMessageRequest
     *
     * @returns ReceiveMessageResponse
     *
     * @param string                $queueName
     * @param ReceiveMessageRequest $request
     *
     * @return ReceiveMessageResponse
     */
    public function receiveMessage($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->receiveMessageWithOptions($queueName, $request, $headers, $runtime);
    }

    /**
     * 发送消息.
     *
     * @param request - SendMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendMessageResponse
     *
     * @param string             $queueName
     * @param SendMessageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($queueName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->delaySeconds) {
            @$body['DelaySeconds'] = $request->delaySeconds;
        }

        if (null !== $request->messageBody) {
            @$body['MessageBody'] = $request->messageBody;
        }

        if (null !== $request->messageGroupId) {
            @$body['MessageGroupId'] = $request->messageGroupId;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->userProperties) {
            @$body['UserProperties'] = $request->userProperties;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendMessage',
            'version' => '2026-04-09',
            'protocol' => 'HTTPS',
            'pathname' => '/queues/' . $queueName . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SendMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发送消息.
     *
     * @param request - SendMessageRequest
     *
     * @returns SendMessageResponse
     *
     * @param string             $queueName
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($queueName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendMessageWithOptions($queueName, $request, $headers, $runtime);
    }
}
