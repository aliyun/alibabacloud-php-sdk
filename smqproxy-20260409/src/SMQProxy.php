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
     * @remarks
     * ## 请求说明
     * - 该接口用于批量查看指定队列中的消息，一次最多可以查看16条消息。
     * - 使用此接口不会改变消息的状态，消息仍保持为Active状态。
     * - 不支持长轮询功能。
     * - 需要提供`queueName`作为路径参数，并通过查询参数设置`peekonly=true`及指定要查看的消息数量`numOfMessages`（范围在1到16之间）。
     * - 成功响应将返回一个包含所请求消息详细信息的数组，包括但不限于消息ID、正文、入队时间等。
     * - 如果指定的队列不存在或队列中没有可见消息，则会返回相应的错误码。
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
     * @remarks
     * ## 请求说明
     * - 该接口用于批量查看指定队列中的消息，一次最多可以查看16条消息。
     * - 使用此接口不会改变消息的状态，消息仍保持为Active状态。
     * - 不支持长轮询功能。
     * - 需要提供`queueName`作为路径参数，并通过查询参数设置`peekonly=true`及指定要查看的消息数量`numOfMessages`（范围在1到16之间）。
     * - 成功响应将返回一个包含所请求消息详细信息的数组，包括但不限于消息ID、正文、入队时间等。
     * - 如果指定的队列不存在或队列中没有可见消息，则会返回相应的错误码。
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
     * @remarks
     * ## 请求说明
     * - 该操作会将取得的消息状态变为 Inactive，Inactive 持续时间由队列属性 `VisibilityTimeout` 决定。
     * - 消费者需在 VisibilityTimeout 时间内调用 DeleteMessage 删除消息，否则消息会重新变为 Active。
     * - 支持长轮询（Long Polling）：设置 `waitseconds > 0` 后，若队列为空则等待至有消息到达或超时返回。
     * >Notice: 进入长轮询后，建议您降低外部调用长轮询的并发数，选择合适的长轮询时间。目前服务端会根据长轮询数量、长轮询等待时间、访问 IP 数量等因素动态调整长轮询防攻击的并发上限值。当队列无消息时，超过长轮询上限值的请求将无法被监听到，并直接返回 404 MessageNotExist（按请求量正常计费）。如果您有临时提升长轮询上限值的需求，请及时提交工单。
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
     * @remarks
     * ## 请求说明
     * - 该操作会将取得的消息状态变为 Inactive，Inactive 持续时间由队列属性 `VisibilityTimeout` 决定。
     * - 消费者需在 VisibilityTimeout 时间内调用 DeleteMessage 删除消息，否则消息会重新变为 Active。
     * - 支持长轮询（Long Polling）：设置 `waitseconds > 0` 后，若队列为空则等待至有消息到达或超时返回。
     * >Notice: 进入长轮询后，建议您降低外部调用长轮询的并发数，选择合适的长轮询时间。目前服务端会根据长轮询数量、长轮询等待时间、访问 IP 数量等因素动态调整长轮询防攻击的并发上限值。当队列无消息时，超过长轮询上限值的请求将无法被监听到，并直接返回 404 MessageNotExist（按请求量正常计费）。如果您有临时提升长轮询上限值的需求，请及时提交工单。
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
     * @remarks
     * ## 请求说明
     * - 一次 Batch 请求的消息总大小不得超过 64 KB。
     * - `BatchSendMessage` 与 `SendMessage` 使用相同的 URL 路径，通过 Body 结构区分：包含 `Messages` 数组即为批量发送，否则为单条发送。
     * - 批量操作的返回结果可能同时包含成功和失败的子消息。
     * - 每次请求中可以包含多个消息对象，每个消息对象可以设置不同的延迟时间和优先级。
     * - 对于 FIFO 队列，可以通过 `MessageGroupId` 参数来指定消息分组 ID。
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
     * @remarks
     * ## 请求说明
     * - 一次 Batch 请求的消息总大小不得超过 64 KB。
     * - `BatchSendMessage` 与 `SendMessage` 使用相同的 URL 路径，通过 Body 结构区分：包含 `Messages` 数组即为批量发送，否则为单条发送。
     * - 批量操作的返回结果可能同时包含成功和失败的子消息。
     * - 每次请求中可以包含多个消息对象，每个消息对象可以设置不同的延迟时间和优先级。
     * - 对于 FIFO 队列，可以通过 `MessageGroupId` 参数来指定消息分组 ID。
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
     * @remarks
     * ## 请求说明
     * - **PeekMessage** 接口用于查看队列顶部的消息，但不会改变消息的状态，消息仍处于 Active 状态可被正常消费。
     * - 该接口不支持长轮询，如果队列为空则立即返回 `MessageNotExist` 错误。
     * - 请求时必须设置 `peekonly=true` 参数以表明仅查看消息。
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
     * @remarks
     * ## 请求说明
     * - **PeekMessage** 接口用于查看队列顶部的消息，但不会改变消息的状态，消息仍处于 Active 状态可被正常消费。
     * - 该接口不支持长轮询，如果队列为空则立即返回 `MessageNotExist` 错误。
     * - 请求时必须设置 `peekonly=true` 参数以表明仅查看消息。
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
     * @remarks
     * ## 请求说明
     * - 消息发布后会被推送到该 Topic 下所有 Subscription 的 Endpoint。
     * - 推送到 Queue 和 HTTP Endpoint 时不需要设置 `MessageAttributes`。
     * - 推送到邮件、短信或移动推送时需要设置对应的 `MessageAttributes` 子属性。
     * - 消息内容建议事先进行 Base64 编码以避免特殊字符问题。
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
     * 发布消息.
     *
     * @remarks
     * ## 请求说明
     * - 消息发布后会被推送到该 Topic 下所有 Subscription 的 Endpoint。
     * - 推送到 Queue 和 HTTP Endpoint 时不需要设置 `MessageAttributes`。
     * - 推送到邮件、短信或移动推送时需要设置对应的 `MessageAttributes` 子属性。
     * - 消息内容建议事先进行 Base64 编码以避免特殊字符问题。
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
     * @remarks
     * ## 请求说明
     * - `ReceiveMessage` 操作会将取得的消息状态变为 Inactive，Inactive 持续时间由队列属性 `VisibilityTimeout` 决定。
     * - 消费者需在 VisibilityTimeout 时间内消费成功后调用 `DeleteMessage` 删除该消息，否则消息将重新变为 Active 状态，被再次消费。
     * - 支持长轮询（Long Polling）：设置 `waitseconds > 0` 后，若队列为空则等待至有消息到达或超时返回。
     * >Notice: 进入长轮询后，建议您降低外部调用长轮询的并发数，选择合适的长轮询时间。目前服务端会根据长轮询数量、长轮询等待时间、访问 IP 数量等因素动态调整长轮询防攻击的并发上限值。当队列无消息时，超过长轮询上限值的请求将无法被监听到，并直接返回 404 MessageNotExist（按请求量正常计费）。如果您有临时提升长轮询上限值的需求，请及时提交工单。
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
     * @remarks
     * ## 请求说明
     * - `ReceiveMessage` 操作会将取得的消息状态变为 Inactive，Inactive 持续时间由队列属性 `VisibilityTimeout` 决定。
     * - 消费者需在 VisibilityTimeout 时间内消费成功后调用 `DeleteMessage` 删除该消息，否则消息将重新变为 Active 状态，被再次消费。
     * - 支持长轮询（Long Polling）：设置 `waitseconds > 0` 后，若队列为空则等待至有消息到达或超时返回。
     * >Notice: 进入长轮询后，建议您降低外部调用长轮询的并发数，选择合适的长轮询时间。目前服务端会根据长轮询数量、长轮询等待时间、访问 IP 数量等因素动态调整长轮询防攻击的并发上限值。当队列无消息时，超过长轮询上限值的请求将无法被监听到，并直接返回 404 MessageNotExist（按请求量正常计费）。如果您有临时提升长轮询上限值的需求，请及时提交工单。
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
     * @remarks
     * ## 请求说明
     * - **SendMessage** 接口用于将消息发送至指定队列。
     * - 消息可以立即被消费或通过设置 `DelaySeconds` 参数来延迟消费。
     * - 发送的消息可以指定优先级，数值越小表示优先级越高。
     * - 对于 FIFO 队列，可以通过 `MessageGroupId` 来保证同一分组内消息的顺序投递。
     * - 用户还可以自定义属性 `UserProperties`，以 JSON 格式字符串形式提供额外信息。
     * - 当 `DelaySeconds` 大于 0 时，API 返回的 `ReceiptHandle` 可用来在消息变为 Active 状态前删除该延迟消息。
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
     * @remarks
     * ## 请求说明
     * - **SendMessage** 接口用于将消息发送至指定队列。
     * - 消息可以立即被消费或通过设置 `DelaySeconds` 参数来延迟消费。
     * - 发送的消息可以指定优先级，数值越小表示优先级越高。
     * - 对于 FIFO 队列，可以通过 `MessageGroupId` 来保证同一分组内消息的顺序投递。
     * - 用户还可以自定义属性 `UserProperties`，以 JSON 格式字符串形式提供额外信息。
     * - 当 `DelaySeconds` 大于 0 时，API 返回的 `ReceiptHandle` 可用来在消息变为 Active 状态前删除该延迟消息。
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
