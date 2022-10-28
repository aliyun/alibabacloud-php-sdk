<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowCooperatorsRequest extends Model
{
    /**
     * @var string[]
     */
    public $cooperatorIds;

    /**
     * @var int
     */
    public $dagId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'cooperatorIds' => 'CooperatorIds',
        'dagId'         => 'DagId',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cooperatorIds) {
            $res['CooperatorIds'] = $this->cooperatorIds;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowCooperatorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CooperatorIds'])) {
            if (!empty($map['CooperatorIds'])) {
                $model->cooperatorIds = $map['CooperatorIds'];
            }
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
