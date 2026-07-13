<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateAtiAgentRegisterInfoRequest\endpoints;

class CreateAtiAgentRegisterInfoRequest extends Model
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
     * @var endpoints[]
     */
    public $endpoints;

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
        'endpoints' => 'Endpoints',
        'registrantId' => 'RegistrantId',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
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

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['Endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['Endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['Endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegistrantId'])) {
            $model->registrantId = $map['RegistrantId'];
        }

        return $model;
    }
}
