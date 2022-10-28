<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskTimeVariablesRequest extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $timeVariables;
    protected $_name = [
        'nodeId'        => 'NodeId',
        'tid'           => 'Tid',
        'timeVariables' => 'TimeVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->timeVariables) {
            $res['TimeVariables'] = $this->timeVariables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskTimeVariablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
