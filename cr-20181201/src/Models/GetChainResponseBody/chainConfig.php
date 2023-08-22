<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\routers;
use AlibabaCloud\Tea\Model;

class chainConfig extends Model
{
    /**
     * @example cci-lz3ycgo69ukt****
     *
     * @var string
     */
    public $chainConfigId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isActive;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var routers[]
     */
    public $routers;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'chainConfigId' => 'ChainConfigId',
        'isActive'      => 'IsActive',
        'nodes'         => 'Nodes',
        'routers'       => 'Routers',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainConfigId) {
            $res['ChainConfigId'] = $this->chainConfigId;
        }
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routers) {
            $res['Routers'] = [];
            if (null !== $this->routers && \is_array($this->routers)) {
                $n = 0;
                foreach ($this->routers as $item) {
                    $res['Routers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainConfigId'])) {
            $model->chainConfigId = $map['ChainConfigId'];
        }
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Routers'])) {
            if (!empty($map['Routers'])) {
                $model->routers = [];
                $n              = 0;
                foreach ($map['Routers'] as $item) {
                    $model->routers[$n++] = null !== $item ? routers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
