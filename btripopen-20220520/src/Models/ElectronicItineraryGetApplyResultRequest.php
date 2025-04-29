<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ElectronicItineraryGetApplyResultRequest extends Model
{
    /**
     * @var string
     */
    public $batchApplyNo;
    protected $_name = [
        'batchApplyNo' => 'batch_apply_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchApplyNo) {
            $res['batch_apply_no'] = $this->batchApplyNo;
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
        if (isset($map['batch_apply_no'])) {
            $model->batchApplyNo = $map['batch_apply_no'];
        }

        return $model;
    }
}
