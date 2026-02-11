<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class AgentEndpointConfig extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $customDomainUrl;

    /**
     * @var string
     */
    public $endpointUrl;
    protected $_name = [
        'agentName' => 'agentName',
        'customDomainUrl' => 'customDomainUrl',
        'endpointUrl' => 'endpointUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
        }

        if (null !== $this->customDomainUrl) {
            $res['customDomainUrl'] = $this->customDomainUrl;
        }

        if (null !== $this->endpointUrl) {
            $res['endpointUrl'] = $this->endpointUrl;
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
        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
        }

        if (isset($map['customDomainUrl'])) {
            $model->customDomainUrl = $map['customDomainUrl'];
        }

        if (isset($map['endpointUrl'])) {
            $model->endpointUrl = $map['endpointUrl'];
        }

        return $model;
    }
}
