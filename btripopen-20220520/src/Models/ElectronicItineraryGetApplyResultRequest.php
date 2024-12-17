<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ElectronicItineraryGetApplyResultRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0c7d5944608943479a9a4d40c1eec618
     *
     * @var string
     */
    public $batchApplyNo;
    protected $_name = [
        'batchApplyNo' => 'batch_apply_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchApplyNo) {
            $res['batch_apply_no'] = $this->batchApplyNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ElectronicItineraryGetApplyResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batch_apply_no'])) {
            $model->batchApplyNo = $map['batch_apply_no'];
        }

        return $model;
    }
}
