<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ListCallMeasureSummaryReportsRequest extends Model
{
    /**
     * @var string
     */
    public $intervalType;
    protected $_name = [
        'intervalType' => 'IntervalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intervalType) {
            $res['IntervalType'] = $this->intervalType;
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
        if (isset($map['IntervalType'])) {
            $model->intervalType = $map['IntervalType'];
        }

        return $model;
    }
}
