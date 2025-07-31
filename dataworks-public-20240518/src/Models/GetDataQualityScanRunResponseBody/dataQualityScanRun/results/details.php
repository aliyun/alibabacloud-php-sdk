<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanRunResponseBody\dataQualityScanRun\results;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @example 100.0
     *
     * @var string
     */
    public $checkValue;

    /**
     * @example 0.0
     *
     * @var string
     */
    public $referenceValue;

    /**
     * @example Fail
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'checkValue' => 'CheckValue',
        'referenceValue' => 'ReferenceValue',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkValue) {
            $res['CheckValue'] = $this->checkValue;
        }
        if (null !== $this->referenceValue) {
            $res['ReferenceValue'] = $this->referenceValue;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckValue'])) {
            $model->checkValue = $map['CheckValue'];
        }
        if (isset($map['ReferenceValue'])) {
            $model->referenceValue = $map['ReferenceValue'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
