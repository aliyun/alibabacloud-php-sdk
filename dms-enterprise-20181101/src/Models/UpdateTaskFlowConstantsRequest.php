<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowConstantsRequest\dagConstants;
use AlibabaCloud\Tea\Model;

class UpdateTaskFlowConstantsRequest extends Model
{
    /**
     * @description The key value of a constant for the task flow.
     *
     * @var dagConstants[]
     */
    public $dagConstants;

    /**
     * @description The error code returned if the request failed.
     *
     * @example 3****
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The constants for the task flow.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagConstants' => 'DagConstants',
        'dagId'        => 'DagId',
        'tid'          => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagConstants) {
            $res['DagConstants'] = [];
            if (null !== $this->dagConstants && \is_array($this->dagConstants)) {
                $n = 0;
                foreach ($this->dagConstants as $item) {
                    $res['DagConstants'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowConstantsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagConstants'])) {
            if (!empty($map['DagConstants'])) {
                $model->dagConstants = [];
                $n                   = 0;
                foreach ($map['DagConstants'] as $item) {
                    $model->dagConstants[$n++] = null !== $item ? dagConstants::fromMap($item) : $item;
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
