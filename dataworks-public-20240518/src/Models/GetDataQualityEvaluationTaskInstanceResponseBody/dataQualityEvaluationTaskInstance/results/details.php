<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\results;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $checkedValue;

    /**
     * @var string
     */
    public $referencedValue;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'checkedValue' => 'CheckedValue',
        'referencedValue' => 'ReferencedValue',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkedValue) {
            $res['CheckedValue'] = $this->checkedValue;
        }

        if (null !== $this->referencedValue) {
            $res['ReferencedValue'] = $this->referencedValue;
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
        if (isset($map['CheckedValue'])) {
            $model->checkedValue = $map['CheckedValue'];
        }

        if (isset($map['ReferencedValue'])) {
            $model->referencedValue = $map['ReferencedValue'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
