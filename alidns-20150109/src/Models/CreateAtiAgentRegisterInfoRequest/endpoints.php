<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\CreateAtiAgentRegisterInfoRequest;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
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
     * @var string[]
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
        if (\is_array($this->transports)) {
            Model::validateArray($this->transports);
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
            if (\is_array($this->transports)) {
                $res['Transports'] = [];
                $n1 = 0;
                foreach ($this->transports as $item1) {
                    $res['Transports'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Transports'])) {
                $model->transports = [];
                $n1 = 0;
                foreach ($map['Transports'] as $item1) {
                    $model->transports[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
