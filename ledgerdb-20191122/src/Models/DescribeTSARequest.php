<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class DescribeTSARequest extends Model
{
    /**
     * @var int
     */
    public $sequenceWithinLedger;
    protected $_name = [
        'sequenceWithinLedger' => 'SequenceWithinLedger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sequenceWithinLedger) {
            $res['SequenceWithinLedger'] = $this->sequenceWithinLedger;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTSARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SequenceWithinLedger'])) {
            $model->sequenceWithinLedger = $map['SequenceWithinLedger'];
        }

        return $model;
    }
}
