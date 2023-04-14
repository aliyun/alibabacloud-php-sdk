<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsResponseBody\result;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsResponseBody\result\metrics\details;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @example taskPv
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'details' => 'details',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['details'])) {
            if (!empty($map['details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
