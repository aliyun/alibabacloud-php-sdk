<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph\edges;

use AlibabaCloud\Dara\Model;

class edge extends Model
{
    /**
     * @var int
     */
    public $dagId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $nodeEnd;

    /**
     * @var int
     */
    public $nodeFrom;
    protected $_name = [
        'dagId' => 'DagId',
        'id' => 'Id',
        'nodeEnd' => 'NodeEnd',
        'nodeFrom' => 'NodeFrom',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->nodeEnd) {
            $res['NodeEnd'] = $this->nodeEnd;
        }

        if (null !== $this->nodeFrom) {
            $res['NodeFrom'] = $this->nodeFrom;
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
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NodeEnd'])) {
            $model->nodeEnd = $map['NodeEnd'];
        }

        if (isset($map['NodeFrom'])) {
            $model->nodeFrom = $map['NodeFrom'];
        }

        return $model;
    }
}
