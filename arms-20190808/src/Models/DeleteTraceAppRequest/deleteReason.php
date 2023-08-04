<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest\deleteReason\reasonIds;
use AlibabaCloud\Tea\Model;

class deleteReason extends Model
{
    /**
     * @var reasonIds[]
     */
    public $reasonIds;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'reasonIds' => 'ReasonIds',
        'remark'    => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reasonIds) {
            $res['ReasonIds'] = [];
            if (null !== $this->reasonIds && \is_array($this->reasonIds)) {
                $n = 0;
                foreach ($this->reasonIds as $item) {
                    $res['ReasonIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deleteReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReasonIds'])) {
            if (!empty($map['ReasonIds'])) {
                $model->reasonIds = [];
                $n                = 0;
                foreach ($map['ReasonIds'] as $item) {
                    $model->reasonIds[$n++] = null !== $item ? reasonIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
