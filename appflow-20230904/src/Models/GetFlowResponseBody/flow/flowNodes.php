<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models\GetFlowResponseBody\flow;

use AlibabaCloud\Dara\Model;

class flowNodes extends Model
{
    /**
     * @var string
     */
    public $authMetadata;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $connectorVersion;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowVersion;

    /**
     * @var string
     */
    public $inputSchema;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeKey;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $prevNodeId;

    /**
     * @var string
     */
    public $refId;

    /**
     * @var string
     */
    public $refVersion;

    /**
     * @var string
     */
    public $webhookUrl;
    protected $_name = [
        'authMetadata' => 'AuthMetadata',
        'connectorId' => 'ConnectorId',
        'connectorVersion' => 'ConnectorVersion',
        'flowId' => 'FlowId',
        'flowVersion' => 'FlowVersion',
        'inputSchema' => 'InputSchema',
        'nodeId' => 'NodeId',
        'nodeKey' => 'NodeKey',
        'nodeName' => 'NodeName',
        'nodeType' => 'NodeType',
        'prevNodeId' => 'PrevNodeId',
        'refId' => 'RefId',
        'refVersion' => 'RefVersion',
        'webhookUrl' => 'WebhookUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authMetadata) {
            $res['AuthMetadata'] = $this->authMetadata;
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->connectorVersion) {
            $res['ConnectorVersion'] = $this->connectorVersion;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }

        if (null !== $this->inputSchema) {
            $res['InputSchema'] = $this->inputSchema;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeKey) {
            $res['NodeKey'] = $this->nodeKey;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->prevNodeId) {
            $res['PrevNodeId'] = $this->prevNodeId;
        }

        if (null !== $this->refId) {
            $res['RefId'] = $this->refId;
        }

        if (null !== $this->refVersion) {
            $res['RefVersion'] = $this->refVersion;
        }

        if (null !== $this->webhookUrl) {
            $res['WebhookUrl'] = $this->webhookUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthMetadata'])) {
            $model->authMetadata = $map['AuthMetadata'];
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['ConnectorVersion'])) {
            $model->connectorVersion = $map['ConnectorVersion'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }

        if (isset($map['InputSchema'])) {
            $model->inputSchema = $map['InputSchema'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeKey'])) {
            $model->nodeKey = $map['NodeKey'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['PrevNodeId'])) {
            $model->prevNodeId = $map['PrevNodeId'];
        }

        if (isset($map['RefId'])) {
            $model->refId = $map['RefId'];
        }

        if (isset($map['RefVersion'])) {
            $model->refVersion = $map['RefVersion'];
        }

        if (isset($map['WebhookUrl'])) {
            $model->webhookUrl = $map['WebhookUrl'];
        }

        return $model;
    }
}
