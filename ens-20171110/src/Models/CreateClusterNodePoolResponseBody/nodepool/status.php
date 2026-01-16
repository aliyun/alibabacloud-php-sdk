<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CreateClusterNodePoolResponseBody\nodepool;

use AlibabaCloud\Dara\Model;

class status extends Model
{
    /**
     * @var int
     */
    public $desiredNodes;

    /**
     * @var int
     */
    public $initialNodes;

    /**
     * @var int
     */
    public $removingNodes;

    /**
     * @var int
     */
    public $servingNodes;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $totalNodes;
    protected $_name = [
        'desiredNodes' => 'DesiredNodes',
        'initialNodes' => 'InitialNodes',
        'removingNodes' => 'RemovingNodes',
        'servingNodes' => 'ServingNodes',
        'state' => 'State',
        'totalNodes' => 'TotalNodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desiredNodes) {
            $res['DesiredNodes'] = $this->desiredNodes;
        }

        if (null !== $this->initialNodes) {
            $res['InitialNodes'] = $this->initialNodes;
        }

        if (null !== $this->removingNodes) {
            $res['RemovingNodes'] = $this->removingNodes;
        }

        if (null !== $this->servingNodes) {
            $res['ServingNodes'] = $this->servingNodes;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->totalNodes) {
            $res['TotalNodes'] = $this->totalNodes;
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
        if (isset($map['DesiredNodes'])) {
            $model->desiredNodes = $map['DesiredNodes'];
        }

        if (isset($map['InitialNodes'])) {
            $model->initialNodes = $map['InitialNodes'];
        }

        if (isset($map['RemovingNodes'])) {
            $model->removingNodes = $map['RemovingNodes'];
        }

        if (isset($map['ServingNodes'])) {
            $model->servingNodes = $map['ServingNodes'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TotalNodes'])) {
            $model->totalNodes = $map['TotalNodes'];
        }

        return $model;
    }
}
