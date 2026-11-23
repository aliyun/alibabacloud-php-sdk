<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data;

use AlibabaCloud\Dara\Model;

class recommendation extends Model
{
    /**
     * @var string
     */
    public $backendMcpProtocol;

    /**
     * @var string
     */
    public $originProtocolVersion;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'backendMcpProtocol' => 'backendMcpProtocol',
        'originProtocolVersion' => 'originProtocolVersion',
        'protocol' => 'protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendMcpProtocol) {
            $res['backendMcpProtocol'] = $this->backendMcpProtocol;
        }

        if (null !== $this->originProtocolVersion) {
            $res['originProtocolVersion'] = $this->originProtocolVersion;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
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
        if (isset($map['backendMcpProtocol'])) {
            $model->backendMcpProtocol = $map['backendMcpProtocol'];
        }

        if (isset($map['originProtocolVersion'])) {
            $model->originProtocolVersion = $map['originProtocolVersion'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}
