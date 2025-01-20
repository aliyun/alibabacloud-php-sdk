<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class UpdateTaskFlowTimeVariablesRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;
    /**
     * @var int
     */
    public $tid;
    /**
     * @var string
     */
    public $timeVariables;
    protected $_name = [
        'dagId'         => 'DagId',
        'tid'           => 'Tid',
        'timeVariables' => 'TimeVariables',
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

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->timeVariables) {
            $res['TimeVariables'] = $this->timeVariables;
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

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['TimeVariables'])) {
            $model->timeVariables = $map['TimeVariables'];
        }

        return $model;
    }
}
