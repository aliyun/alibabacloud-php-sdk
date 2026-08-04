<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ModifyDataAgentMcpRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $headers;

    /**
     * @var string
     */
    public $mcpServerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needUidInHeader;

    /**
     * @var string
     */
    public $transportType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'description' => 'Description',
        'enable' => 'Enable',
        'endpoint' => 'Endpoint',
        'headers' => 'Headers',
        'mcpServerId' => 'McpServerId',
        'name' => 'Name',
        'needUidInHeader' => 'NeedUidInHeader',
        'transportType' => 'TransportType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }

        if (null !== $this->mcpServerId) {
            $res['McpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needUidInHeader) {
            $res['NeedUidInHeader'] = $this->needUidInHeader;
        }

        if (null !== $this->transportType) {
            $res['TransportType'] = $this->transportType;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }

        if (isset($map['McpServerId'])) {
            $model->mcpServerId = $map['McpServerId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedUidInHeader'])) {
            $model->needUidInHeader = $map['NeedUidInHeader'];
        }

        if (isset($map['TransportType'])) {
            $model->transportType = $map['TransportType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
