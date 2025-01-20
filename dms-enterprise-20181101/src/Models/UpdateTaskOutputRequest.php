<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class UpdateTaskOutputRequest extends Model
{
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $nodeOutput;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'nodeId'     => 'NodeId',
        'nodeOutput' => 'NodeOutput',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeOutput) {
            $res['NodeOutput'] = $this->nodeOutput;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeOutput'])) {
            $model->nodeOutput = $map['NodeOutput'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
