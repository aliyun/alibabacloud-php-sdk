<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class AllocatedHyperNodeDetail extends Model
{
    /**
     * @var int
     */
    public $allocatedNodeNum;

    /**
     * @var int
     */
    public $emptyNodeNum;

    /**
     * @var string
     */
    public $hyperNodeName;

    /**
     * @var int
     */
    public $totalNodeNum;
    protected $_name = [
        'allocatedNodeNum' => 'AllocatedNodeNum',
        'emptyNodeNum' => 'EmptyNodeNum',
        'hyperNodeName' => 'HyperNodeName',
        'totalNodeNum' => 'TotalNodeNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocatedNodeNum) {
            $res['AllocatedNodeNum'] = $this->allocatedNodeNum;
        }

        if (null !== $this->emptyNodeNum) {
            $res['EmptyNodeNum'] = $this->emptyNodeNum;
        }

        if (null !== $this->hyperNodeName) {
            $res['HyperNodeName'] = $this->hyperNodeName;
        }

        if (null !== $this->totalNodeNum) {
            $res['TotalNodeNum'] = $this->totalNodeNum;
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
        if (isset($map['AllocatedNodeNum'])) {
            $model->allocatedNodeNum = $map['AllocatedNodeNum'];
        }

        if (isset($map['EmptyNodeNum'])) {
            $model->emptyNodeNum = $map['EmptyNodeNum'];
        }

        if (isset($map['HyperNodeName'])) {
            $model->hyperNodeName = $map['HyperNodeName'];
        }

        if (isset($map['TotalNodeNum'])) {
            $model->totalNodeNum = $map['TotalNodeNum'];
        }

        return $model;
    }
}
