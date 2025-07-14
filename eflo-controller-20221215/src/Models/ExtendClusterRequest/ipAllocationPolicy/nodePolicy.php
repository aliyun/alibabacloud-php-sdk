<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy\nodePolicy\bonds;
use AlibabaCloud\Tea\Model;

class nodePolicy extends Model
{
    /**
     * @description Bond information
     *
     * @var bonds[]
     */
    public $bonds;

    /**
     * @description Hostname
     *
     * @example a100-xa5dza28-0085
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Node ID
     *
     * @example i-3fdodw2
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'bonds' => 'Bonds',
        'hostname' => 'Hostname',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

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
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
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
                $n = 0;
                foreach ($map['Bonds'] as $item) {
                    $model->bonds[$n++] = null !== $item ? bonds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
