<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanRunResponseBody\dataQualityScanRun\results;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $checkValue;

    /**
     * @var string
     */
    public $referenceValue;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'checkValue' => 'CheckValue',
        'referenceValue' => 'ReferenceValue',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
