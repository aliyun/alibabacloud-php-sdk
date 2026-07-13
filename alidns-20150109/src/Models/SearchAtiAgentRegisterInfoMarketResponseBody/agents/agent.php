<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchAtiAgentRegisterInfoMarketResponseBody\agents;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchAtiAgentRegisterInfoMarketResponseBody\agents\agent\protocols;

class agent extends Model
{
    /**
     * @var string
     */
    public $agentDescription;

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
    public $agentVersion;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var protocols
     */
    public $protocols;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trustCardUrl;

    /**
     * @var string
     */
    public $trustLevel;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'agentDescription' => 'AgentDescription',
        'agentDisplayName' => 'AgentDisplayName',
        'agentHost' => 'AgentHost',
        'agentId' => 'AgentId',
        'agentVersion' => 'AgentVersion',
        'createTimestamp' => 'CreateTimestamp',
        'protocols' => 'Protocols',
        'status' => 'Status',
        'trustCardUrl' => 'TrustCardUrl',
        'trustLevel' => 'TrustLevel',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->protocols) {
            $this->protocols->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDescription) {
            $res['AgentDescription'] = $this->agentDescription;
        }

        if (null !== $this->agentDisplayName) {
            $res['AgentDisplayName'] = $this->agentDisplayName;
        }

        if (null !== $this->agentHost) {
            $res['AgentHost'] = $this->agentHost;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->protocols) {
            $res['Protocols'] = null !== $this->protocols ? $this->protocols->toArray($noStream) : $this->protocols;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->trustCardUrl) {
            $res['TrustCardUrl'] = $this->trustCardUrl;
        }

        if (null !== $this->trustLevel) {
            $res['TrustLevel'] = $this->trustLevel;
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
        if (isset($map['AgentDescription'])) {
            $model->agentDescription = $map['AgentDescription'];
        }

        if (isset($map['AgentDisplayName'])) {
            $model->agentDisplayName = $map['AgentDisplayName'];
        }

        if (isset($map['AgentHost'])) {
            $model->agentHost = $map['AgentHost'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Protocols'])) {
            $model->protocols = protocols::fromMap($map['Protocols']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TrustCardUrl'])) {
            $model->trustCardUrl = $map['TrustCardUrl'];
        }

        if (isset($map['TrustLevel'])) {
            $model->trustLevel = $map['TrustLevel'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
