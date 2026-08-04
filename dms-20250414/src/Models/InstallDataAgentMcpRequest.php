<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class InstallDataAgentMcpRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $fromJson;

    /**
     * @var string
     */
    public $headers;

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
    public $netType;

    /**
     * @var string
     */
    public $transportType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'description' => 'Description',
        'endpoint' => 'Endpoint',
        'fromJson' => 'FromJson',
        'headers' => 'Headers',
        'name' => 'Name',
        'needUidInHeader' => 'NeedUidInHeader',
        'netType' => 'NetType',
        'transportType' => 'TransportType',
        'vpcId' => 'VpcId',
        'vswId' => 'VswId',
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

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->fromJson) {
            $res['FromJson'] = $this->fromJson;
        }

        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needUidInHeader) {
            $res['NeedUidInHeader'] = $this->needUidInHeader;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->transportType) {
            $res['TransportType'] = $this->transportType;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
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

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['FromJson'])) {
            $model->fromJson = $map['FromJson'];
        }

        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedUidInHeader'])) {
            $model->needUidInHeader = $map['NeedUidInHeader'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['TransportType'])) {
            $model->transportType = $map['TransportType'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
