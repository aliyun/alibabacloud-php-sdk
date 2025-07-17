<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\results;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return details
     */
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
