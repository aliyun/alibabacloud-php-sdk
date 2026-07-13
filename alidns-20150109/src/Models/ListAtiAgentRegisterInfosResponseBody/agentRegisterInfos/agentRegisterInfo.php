<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListAtiAgentRegisterInfosResponseBody\agentRegisterInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListAtiAgentRegisterInfosResponseBody\agentRegisterInfos\agentRegisterInfo\endpoints;

class agentRegisterInfo extends Model
{
    /**
     * @var string
     */
    public $agentDisplayName;

    /**
     * @var string
     */
    public $agentHost;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentRegisterInfoId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $atiName;

    /**
     * @var string
     */
    public $createTimestamp;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTimestamp;
    protected $_name = [
        'agentDisplayName' => 'AgentDisplayName',
        'agentHost' => 'AgentHost',
        'agentId' => 'AgentId',
        'agentRegisterInfoId' => 'AgentRegisterInfoId',
        'agentVersion' => 'AgentVersion',
        'atiName' => 'AtiName',
        'createTimestamp' => 'CreateTimestamp',
        'endpoints' => 'Endpoints',
        'status' => 'Status',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->endpoints) {
            $this->endpoints->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDisplayName) {
            $res['AgentDisplayName'] = $this->agentDisplayName;
        }

        if (null !== $this->agentHost) {
            $res['AgentHost'] = $this->agentHost;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentRegisterInfoId) {
            $res['AgentRegisterInfoId'] = $this->agentRegisterInfoId;
        }

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->atiName) {
            $res['AtiName'] = $this->atiName;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toArray($noStream) : $this->endpoints;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['AgentDisplayName'])) {
            $model->agentDisplayName = $map['AgentDisplayName'];
        }

        if (isset($map['AgentHost'])) {
            $model->agentHost = $map['AgentHost'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentRegisterInfoId'])) {
            $model->agentRegisterInfoId = $map['AgentRegisterInfoId'];
        }

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['AtiName'])) {
            $model->atiName = $map['AtiName'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
