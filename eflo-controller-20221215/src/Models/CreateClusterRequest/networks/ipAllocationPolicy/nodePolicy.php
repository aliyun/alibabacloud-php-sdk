<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy\nodePolicy\bonds;
use AlibabaCloud\Tea\Model;

class nodePolicy extends Model
{
    /**
     * @var bonds[]
     */
    public $bonds;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'bonds'  => 'Bonds',
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bonds) {
            $res['Bonds'] = [];
            if (null !== $this->bonds && \is_array($this->bonds)) {
                $n = 0;
                foreach ($this->bonds as $item) {
                    $res['Bonds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bonds'])) {
            if (!empty($map['Bonds'])) {
                $model->bonds = [];
                $n            = 0;
                foreach ($map['Bonds'] as $item) {
                    $model->bonds[$n++] = null !== $item ? bonds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
