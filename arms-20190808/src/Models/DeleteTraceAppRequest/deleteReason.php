<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest\deleteReason\reasonIds;

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
        'remark' => 'Remark',
    ];

    public function validate()
    {
        if (\is_array($this->reasonIds)) {
            Model::validateArray($this->reasonIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasonIds) {
            if (\is_array($this->reasonIds)) {
                $res['ReasonIds'] = [];
                $n1 = 0;
                foreach ($this->reasonIds as $item1) {
                    $res['ReasonIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['ReasonIds'])) {
            if (!empty($map['ReasonIds'])) {
                $model->reasonIds = [];
                $n1 = 0;
                foreach ($map['ReasonIds'] as $item1) {
                    $model->reasonIds[$n1] = reasonIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
