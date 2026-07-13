<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoResponseBody\endpoints;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoResponseBody\endpoints\endpoint\transports;

class endpoint extends Model
{
    /**
     * @var string
     */
    public $agentUrl;

    /**
     * @var string
     */
    public $metadataUrl;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var transports
     */
    public $transports;
    protected $_name = [
        'agentUrl' => 'AgentUrl',
        'metadataUrl' => 'MetadataUrl',
        'protocol' => 'Protocol',
        'transports' => 'Transports',
    ];

    public function validate()
    {
        if (null !== $this->transports) {
            $this->transports->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentUrl) {
            $res['AgentUrl'] = $this->agentUrl;
        }

        if (null !== $this->metadataUrl) {
            $res['MetadataUrl'] = $this->metadataUrl;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->transports) {
            $res['Transports'] = null !== $this->transports ? $this->transports->toArray($noStream) : $this->transports;
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
        if (isset($map['AgentUrl'])) {
            $model->agentUrl = $map['AgentUrl'];
        }

        if (isset($map['MetadataUrl'])) {
            $model->metadataUrl = $map['MetadataUrl'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Transports'])) {
            $model->transports = transports::fromMap($map['Transports']);
        }

        return $model;
    }
}
