<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\upStreamList;

use AlibabaCloud\Dara\Model;

class dependPeriod extends Model
{
    /**
     * @var int
     */
    public $periodOffset;

    /**
     * @var string
     */
    public $periodType;
    protected $_name = [
        'periodOffset' => 'PeriodOffset',
        'periodType' => 'PeriodType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periodOffset) {
            $res['PeriodOffset'] = $this->periodOffset;
        }

        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
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
        if (isset($map['PeriodOffset'])) {
            $model->periodOffset = $map['PeriodOffset'];
        }

        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        return $model;
    }
}
