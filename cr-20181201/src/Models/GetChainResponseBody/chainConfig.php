<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\routers;

class chainConfig extends Model
{
    /**
     * @var string
     */
    public $chainConfigId;

    /**
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
     * @var string
     */
    public $version;
    protected $_name = [
        'chainConfigId' => 'ChainConfigId',
        'isActive' => 'IsActive',
        'nodes' => 'Nodes',
        'routers' => 'Routers',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (\is_array($this->routers)) {
            Model::validateArray($this->routers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chainConfigId) {
            $res['ChainConfigId'] = $this->chainConfigId;
        }

        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->routers) {
            if (\is_array($this->routers)) {
                $res['Routers'] = [];
                $n1 = 0;
                foreach ($this->routers as $item1) {
                    $res['Routers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ChainConfigId'])) {
            $model->chainConfigId = $map['ChainConfigId'];
        }

        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
                }
            }
        }

        if (isset($map['Routers'])) {
            if (!empty($map['Routers'])) {
                $model->routers = [];
                $n1 = 0;
                foreach ($map['Routers'] as $item1) {
                    $model->routers[$n1++] = routers::fromMap($item1);
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
