<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class MakeTaskFlowInstanceSuccessRequest extends Model
{
    /**
     * @example 7***
     *
     * @var int
     */
    public $dagId;

    /**
     * @example 47****
     *
     * @var int
     */
    public $dagInstanceId;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId'         => 'DagId',
        'dagInstanceId' => 'DagInstanceId',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->dagInstanceId) {
            $res['DagInstanceId'] = $this->dagInstanceId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeTaskFlowInstanceSuccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['DagInstanceId'])) {
            $model->dagInstanceId = $map['DagInstanceId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
