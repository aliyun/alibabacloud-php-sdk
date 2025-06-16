<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest;

use AlibabaCloud\Dara\Model;

class refundType extends Model
{
    /**
     * @var string[]
     */
    public $file;

    /**
     * @var int
     */
    public $refundTypeId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'file' => 'file',
        'refundTypeId' => 'refund_type_id',
        'remark' => 'remark',
    ];

    public function validate()
    {
        if (\is_array($this->file)) {
            Model::validateArray($this->file);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->file) {
            if (\is_array($this->file)) {
                $res['file'] = [];
                $n1 = 0;
                foreach ($this->file as $item1) {
                    $res['file'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundTypeId) {
            $res['refund_type_id'] = $this->refundTypeId;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['file'])) {
            if (!empty($map['file'])) {
                $model->file = [];
                $n1 = 0;
                foreach ($map['file'] as $item1) {
                    $model->file[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_type_id'])) {
            $model->refundTypeId = $map['refund_type_id'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
