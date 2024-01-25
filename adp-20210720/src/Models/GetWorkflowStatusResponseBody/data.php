<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetWorkflowStatusResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetWorkflowStatusResponseBody\data\stepStatus;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var stepStatus[]
     */
    public $stepStatus;
    protected $_name = [
        'status'     => 'status',
        'stepStatus' => 'stepStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->stepStatus) {
            $res['stepStatus'] = [];
            if (null !== $this->stepStatus && \is_array($this->stepStatus)) {
                $n = 0;
                foreach ($this->stepStatus as $item) {
                    $res['stepStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['stepStatus'])) {
            if (!empty($map['stepStatus'])) {
                $model->stepStatus = [];
                $n                 = 0;
                foreach ($map['stepStatus'] as $item) {
                    $model->stepStatus[$n++] = null !== $item ? stepStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
