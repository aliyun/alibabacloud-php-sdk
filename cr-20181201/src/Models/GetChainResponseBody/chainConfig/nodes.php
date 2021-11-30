<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes\nodeConfig;
use AlibabaCloud\Tea\Model;

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
        'enable'     => 'Enable',
        'nodeConfig' => 'NodeConfig',
        'nodeName'   => 'NodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->nodeConfig) {
            $res['NodeConfig'] = null !== $this->nodeConfig ? $this->nodeConfig->toMap() : null;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
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
