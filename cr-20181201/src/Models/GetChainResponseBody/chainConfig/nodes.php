<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes\nodeConfig;

class nodes extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var nodeConfig
     */
    public $nodeConfig;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'enable' => 'Enable',
        'nodeConfig' => 'NodeConfig',
        'nodeName' => 'NodeName',
    ];

    public function validate()
    {
        if (null !== $this->nodeConfig) {
            $this->nodeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->nodeConfig) {
            $res['NodeConfig'] = null !== $this->nodeConfig ? $this->nodeConfig->toArray($noStream) : $this->nodeConfig;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['NodeConfig'])) {
            $model->nodeConfig = nodeConfig::fromMap($map['NodeConfig']);
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
