<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeAtiAgentRegisterInfoMarketRequest extends Model
{
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
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'agentHost' => 'AgentHost',
        'agentVersion' => 'AgentVersion',
        'clientToken' => 'ClientToken',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentHost) {
            $res['AgentHost'] = $this->agentHost;
        }

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['AgentHost'])) {
            $model->agentHost = $map['AgentHost'];
        }

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
