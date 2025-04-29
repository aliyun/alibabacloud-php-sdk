<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos\applyInfo;

use AlibabaCloud\Dara\Model;

class exceedApply extends Model
{
    /**
     * @var string
     */
    public $exceedReason;

    /**
     * @var int
     */
    public $exceedType;

    /**
     * @var int
     */
    public $flowNo;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'exceedReason' => 'exceed_reason',
        'exceedType' => 'exceed_type',
        'flowNo' => 'flow_no',
        'id' => 'id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceedReason) {
            $res['exceed_reason'] = $this->exceedReason;
        }

        if (null !== $this->exceedType) {
            $res['exceed_type'] = $this->exceedType;
        }

        if (null !== $this->flowNo) {
            $res['flow_no'] = $this->flowNo;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['exceed_reason'])) {
            $model->exceedReason = $map['exceed_reason'];
        }

        if (isset($map['exceed_type'])) {
            $model->exceedType = $map['exceed_type'];
        }

        if (isset($map['flow_no'])) {
            $model->flowNo = $map['flow_no'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
