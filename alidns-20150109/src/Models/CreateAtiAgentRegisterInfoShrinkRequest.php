<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class CreateAtiAgentRegisterInfoShrinkRequest extends Model
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
    public $agentVersion;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $endpointsShrink;

    /**
     * @var string
     */
    public $registrantId;
    protected $_name = [
        'agentDescription' => 'AgentDescription',
        'agentDisplayName' => 'AgentDisplayName',
        'agentHost' => 'AgentHost',
        'agentVersion' => 'AgentVersion',
        'clientToken' => 'ClientToken',
        'endpointsShrink' => 'Endpoints',
        'registrantId' => 'RegistrantId',
    ];

    public function validate()
    {
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

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->endpointsShrink) {
            $res['Endpoints'] = $this->endpointsShrink;
        }

        if (null !== $this->registrantId) {
            $res['RegistrantId'] = $this->registrantId;
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

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Endpoints'])) {
            $model->endpointsShrink = $map['Endpoints'];
        }

        if (isset($map['RegistrantId'])) {
            $model->registrantId = $map['RegistrantId'];
        }

        return $model;
    }
}
