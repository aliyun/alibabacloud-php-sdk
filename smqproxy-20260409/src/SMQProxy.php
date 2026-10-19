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
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\PublishMessageRequest;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\PublishMessageResponse;
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
    }

    /**
     * Deletes messages from a queue in a batch. A maximum of 16 messages can be deleted at a time.
     *
     * @remarks
     * ## Request description
     * - Use this operation together with BatchReceiveMessage.
     * - The result of a batch operation may contain both successful and failed sub-requests. The HTTP status code is 204 only when all sub-requests succeed.
     * - A maximum of 16 messages can be deleted per request.
     * - Provide the list of `ReceiptHandle` values returned from the previous consumption to identify the messages to delete.
     * - This operation succeeds only when executed before `NextVisibleTime`. After the timeout, the message becomes Active again, the ReceiptHandle becomes invalid, and you must consume the message again to obtain a new handle.
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
     * Deletes messages from a queue in a batch. A maximum of 16 messages can be deleted at a time.
     *
     * @remarks
     * ## Request description
     * - Use this operation together with BatchReceiveMessage.
     * - The result of a batch operation may contain both successful and failed sub-requests. The HTTP status code is 204 only when all sub-requests succeed.
     * - A maximum of 16 messages can be deleted per request.
     * - Provide the list of `ReceiptHandle` values returned from the previous consumption to identify the messages to delete.
     * - This operation succeeds only when executed before `NextVisibleTime`. After the timeout, the message becomes Active again, the ReceiptHandle becomes invalid, and you must consume the message again to obtain a new handle.
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
     * Batch peeks at messages in a queue without changing the message status.
     *
     * @remarks
     * ## Request description
     * - This operation batch peeks at messages in a specified queue. You can peek at up to 16 messages at a time.
     * - This operation does not change the message status. Messages remain in the Active state.
     * - Long polling is not supported.
     * - Provide `queueName` as a path parameter, and set the query parameter `peekonly=true` along with `numOfMessages` (range: 1 to 16) to specify the number of messages to peek at.
     * - A successful response returns an array containing the details of the requested messages, including but not limited to the message ID, body, and enqueue time.
     * - If the specified queue does not exist or no visible messages are in the queue, the corresponding error code is returned.
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
     * Batch peeks at messages in a queue without changing the message status.
     *
     * @remarks
     * ## Request description
     * - This operation batch peeks at messages in a specified queue. You can peek at up to 16 messages at a time.
     * - This operation does not change the message status. Messages remain in the Active state.
     * - Long polling is not supported.
     * - Provide `queueName` as a path parameter, and set the query parameter `peekonly=true` along with `numOfMessages` (range: 1 to 16) to specify the number of messages to peek at.
     * - A successful response returns an array containing the details of the requested messages, including but not limited to the message ID, body, and enqueue time.
     * - If the specified queue does not exist or no visible messages are in the queue, the corresponding error code is returned.
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
     * Batch receives up to 16 messages from a specified queue for consumption.
     *
     * @remarks
     * ## Operation description
     * - This operation changes the status of received messages to Inactive. The Inactive duration is determined by the `VisibilityTimeout` attribute of the queue.
     * - Consumers must call DeleteMessage to delete messages within the VisibilityTimeout period. Otherwise, messages become Active again.
     * - Long polling is supported: if you set `waitseconds > 0` and the queue is empty, the request waits until a message arrives or the timeout expires.
     * >Notice: After long polling is enabled, reduce the concurrency of external long polling calls and select an appropriate long polling duration. The server dynamically adjusts the concurrency limit for long polling based on factors such as the number of long polling requests, long polling wait time, and number of access IP addresses. When the queue has no messages, requests that exceed the long polling limit cannot be listened to and directly return 404 MessageNotExist (billed normally by request count). If you need to temporarily increase the long polling limit, submit a ticket promptly.
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
     * Batch receives up to 16 messages from a specified queue for consumption.
     *
     * @remarks
     * ## Operation description
     * - This operation changes the status of received messages to Inactive. The Inactive duration is determined by the `VisibilityTimeout` attribute of the queue.
     * - Consumers must call DeleteMessage to delete messages within the VisibilityTimeout period. Otherwise, messages become Active again.
     * - Long polling is supported: if you set `waitseconds > 0` and the queue is empty, the request waits until a message arrives or the timeout expires.
     * >Notice: After long polling is enabled, reduce the concurrency of external long polling calls and select an appropriate long polling duration. The server dynamically adjusts the concurrency limit for long polling based on factors such as the number of long polling requests, long polling wait time, and number of access IP addresses. When the queue has no messages, requests that exceed the long polling limit cannot be listened to and directly return 404 MessageNotExist (billed normally by request count). If you need to temporarily increase the long polling limit, submit a ticket promptly.
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
     * Sends a batch of up to 16 messages to a specified queue, with a total size not exceeding 64 KB.
     *
     * @remarks
     * ## Request description
     * - The total size of messages in a single batch request must not exceed 64 KB.
     * - `BatchSendMessage` and `SendMessage` use the same URL path. They are distinguished by the body structure: if the body contains a `Messages` array, it is a batch send operation. Otherwise, it is a single message send operation.
     * - The response of a batch operation may contain both successful and failed sub-messages.
     * - Each request can contain multiple message objects. Each message object can have a different delay time and priority.
     * - For FIFO queues, you can use the `MessageGroupId` parameter to specify a message group ID.
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
     * Sends a batch of up to 16 messages to a specified queue, with a total size not exceeding 64 KB.
     *
     * @remarks
     * ## Request description
     * - The total size of messages in a single batch request must not exceed 64 KB.
     * - `BatchSendMessage` and `SendMessage` use the same URL path. They are distinguished by the body structure: if the body contains a `Messages` array, it is a batch send operation. Otherwise, it is a single message send operation.
     * - The response of a batch operation may contain both successful and failed sub-messages.
     * - Each request can contain multiple message objects. Each message object can have a different delay time and priority.
     * - For FIFO queues, you can use the `MessageGroupId` parameter to specify a message group ID.
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
     * Extends or shortens the invisibility period of a message that is in the Inactive state.
     *
     * @remarks
     * ## Operation description
     * - This operation allows you to modify the VisibilityTimeout of a message that has been consumed and is currently in the Inactive state. The VisibilityTimeout is the countdown from the current moment until the message becomes Active again.
     * - A successful invocation returns a new `ReceiptHandle`. Use this new handle for subsequent delete or visibility timeout modification operations on this message.
     * - This operation can only be invoked successfully before `NextVisibleTime`. Otherwise, a fault is returned.
     * - Common scenarios include when a consumer requires a longer processing time and needs to extend the VisibilityTimeout to prevent the message from being consumed again.
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
     * Extends or shortens the invisibility period of a message that is in the Inactive state.
     *
     * @remarks
     * ## Operation description
     * - This operation allows you to modify the VisibilityTimeout of a message that has been consumed and is currently in the Inactive state. The VisibilityTimeout is the countdown from the current moment until the message becomes Active again.
     * - A successful invocation returns a new `ReceiptHandle`. Use this new handle for subsequent delete or visibility timeout modification operations on this message.
     * - This operation can only be invoked successfully before `NextVisibleTime`. Otherwise, a fault is returned.
     * - Common scenarios include when a consumer requires a longer processing time and needs to extend the VisibilityTimeout to prevent the message from being consumed again.
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
     * Publishes a message to a specified topic. The message is pushed to all subscribed endpoints.
     *
     * @remarks
     * ## Operation description
     * - After a message is published, it is pushed to the endpoints of all subscriptions under the topic.
     * - You do not need to set `MessageAttributes` when pushing messages to queues or HTTP endpoints.
     * - You must set the corresponding `MessageAttributes` sub-properties when pushing messages to email, SMS, or mobile push endpoints.
     * - Base64-encode the message content beforehand to avoid special character issues.
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

        if (null !== $request->messageGroupId) {
            @$body['MessageGroupId'] = $request->messageGroupId;
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
     * Publishes a message to a specified topic. The message is pushed to all subscribed endpoints.
     *
     * @remarks
     * ## Operation description
     * - After a message is published, it is pushed to the endpoints of all subscriptions under the topic.
     * - You do not need to set `MessageAttributes` when pushing messages to queues or HTTP endpoints.
     * - You must set the corresponding `MessageAttributes` sub-properties when pushing messages to email, SMS, or mobile push endpoints.
     * - Base64-encode the message content beforehand to avoid special character issues.
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
     * Sends a message to a specified queue with support for delay and priority settings.
     *
     * @remarks
     * ## Operation description
     * - The **SendMessage** operation sends a message to a specified queue.
     * - Messages can be consumed immediately or delayed by setting the `DelaySeconds` parameter.
     * - You can specify a priority for the message. A smaller value indicates a higher priority.
     * - For FIFO queues, use `MessageGroupId` to ensure ordered delivery of messages within the same group.
     * - You can also set custom attributes in `UserProperties` as a JSON-formatted string to provide additional information.
     * - When `DelaySeconds` is greater than 0, the `ReceiptHandle` returned by the API can be used to delete the delayed message before it becomes Active.
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
     * Sends a message to a specified queue with support for delay and priority settings.
     *
     * @remarks
     * ## Operation description
     * - The **SendMessage** operation sends a message to a specified queue.
     * - Messages can be consumed immediately or delayed by setting the `DelaySeconds` parameter.
     * - You can specify a priority for the message. A smaller value indicates a higher priority.
     * - For FIFO queues, use `MessageGroupId` to ensure ordered delivery of messages within the same group.
     * - You can also set custom attributes in `UserProperties` as a JSON-formatted string to provide additional information.
     * - When `DelaySeconds` is greater than 0, the `ReceiptHandle` returned by the API can be used to delete the delayed message before it becomes Active.
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
