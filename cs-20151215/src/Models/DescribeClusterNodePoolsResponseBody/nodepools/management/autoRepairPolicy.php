<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\management;

use AlibabaCloud\Dara\Model;

class autoRepairPolicy extends Model
{
    /**
     * @var bool
     */
    public $restartNode;
    protected $_name = [
        'restartNode' => 'restart_node',
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

        return $model;
    }
}
