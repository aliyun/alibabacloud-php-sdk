<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management;

use AlibabaCloud\Dara\Model;

class autoVulFixPolicy extends Model
{
    /**
     * @var bool
     */
    public $restartNode;

    /**
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'restartNode' => 'restart_node',
        'vulLevel' => 'vul_level',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restartNode) {
            $res['restart_node'] = $this->restartNode;
        }

        if (null !== $this->vulLevel) {
            $res['vul_level'] = $this->vulLevel;
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
        if (isset($map['restart_node'])) {
            $model->restartNode = $map['restart_node'];
        }

        if (isset($map['vul_level'])) {
            $model->vulLevel = $map['vul_level'];
        }

        return $model;
    }
}
