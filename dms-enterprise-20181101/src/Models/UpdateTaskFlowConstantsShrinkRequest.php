<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class UpdateTaskFlowConstantsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dagConstantsShrink;
    /**
     * @var int
     */
    public $dagId;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagConstantsShrink' => 'DagConstants',
        'dagId'              => 'DagId',
        'tid'                => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagConstantsShrink) {
            $res['DagConstants'] = $this->dagConstantsShrink;
        }

        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
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
        if (isset($map['DagConstants'])) {
            $model->dagConstantsShrink = $map['DagConstants'];
        }

        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
