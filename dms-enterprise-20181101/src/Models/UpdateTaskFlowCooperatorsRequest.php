<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->cooperatorIds)) {
            Model::validateArray($this->cooperatorIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cooperatorIds) {
            if (\is_array($this->cooperatorIds)) {
                $res['CooperatorIds'] = [];
                $n1                   = 0;
                foreach ($this->cooperatorIds as $item1) {
                    $res['CooperatorIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['CooperatorIds'])) {
            if (!empty($map['CooperatorIds'])) {
                $model->cooperatorIds = [];
                $n1                   = 0;
                foreach ($map['CooperatorIds'] as $item1) {
                    $model->cooperatorIds[$n1++] = $item1;
                }
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
