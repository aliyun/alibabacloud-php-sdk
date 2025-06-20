<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy\nodePolicy\bonds;

class nodePolicy extends Model
{
    /**
     * @var bonds[]
     */
    public $bonds;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'bonds' => 'Bonds',
        'hostname' => 'Hostname',
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
        if (\is_array($this->bonds)) {
            Model::validateArray($this->bonds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bonds) {
            if (\is_array($this->bonds)) {
                $res['Bonds'] = [];
                $n1 = 0;
                foreach ($this->bonds as $item1) {
                    $res['Bonds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bonds'])) {
            if (!empty($map['Bonds'])) {
                $model->bonds = [];
                $n1 = 0;
                foreach ($map['Bonds'] as $item1) {
                    $model->bonds[$n1] = bonds::fromMap($item1);
                    ++$n1;
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
