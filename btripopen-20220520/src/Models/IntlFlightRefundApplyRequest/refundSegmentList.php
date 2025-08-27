<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundApplyRequest;

use AlibabaCloud\Dara\Model;

class refundSegmentList extends Model
{
    /**
     * @var string
     */
    public $segmentKey;
    protected $_name = [
        'segmentKey' => 'segment_key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->segmentKey) {
            $res['segment_key'] = $this->segmentKey;
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
        if (isset($map['segment_key'])) {
            $model->segmentKey = $map['segment_key'];
        }

        return $model;
    }
}
