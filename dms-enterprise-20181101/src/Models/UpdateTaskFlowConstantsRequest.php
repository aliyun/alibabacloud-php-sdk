<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowConstantsRequest\dagConstants;

class UpdateTaskFlowConstantsRequest extends Model
{
    /**
     * @var dagConstants[]
     */
    public $dagConstants;

    /**
     * @var int
     */
    public $dagId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagConstants' => 'DagConstants',
        'dagId' => 'DagId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->dagConstants)) {
            Model::validateArray($this->dagConstants);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagConstants) {
            if (\is_array($this->dagConstants)) {
                $res['DagConstants'] = [];
                $n1 = 0;
                foreach ($this->dagConstants as $item1) {
                    $res['DagConstants'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DagConstants'])) {
            if (!empty($map['DagConstants'])) {
                $model->dagConstants = [];
                $n1 = 0;
                foreach ($map['DagConstants'] as $item1) {
                    $model->dagConstants[$n1++] = dagConstants::fromMap($item1);
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
