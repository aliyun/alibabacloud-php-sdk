<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest;

use AlibabaCloud\Tea\Model;

class refundType extends Model
{
    /**
     * @example [xxx,yyy]
     *
     * @var string[]
     */
    public $file;

    /**
     * @example 0
     *
     * @var int
     */
    public $refundTypeId;

    /**
     * @example remark desc
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'file'         => 'file',
        'refundTypeId' => 'refund_type_id',
        'remark'       => 'remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->file) {
            $res['file'] = $this->file;
        }
        if (null !== $this->refundTypeId) {
            $res['refund_type_id'] = $this->refundTypeId;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['file'])) {
            if (!empty($map['file'])) {
                $model->file = $map['file'];
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
