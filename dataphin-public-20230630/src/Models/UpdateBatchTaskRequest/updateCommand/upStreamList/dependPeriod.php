<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\upStreamList;

use AlibabaCloud\Tea\Model;

class dependPeriod extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $periodOffset;

    /**
     * @description This parameter is required.
     *
     * @example CURRENT_PERIOD
     *
     * @var string
     */
    public $periodType;
    protected $_name = [
        'periodOffset' => 'PeriodOffset',
        'periodType'   => 'PeriodType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dependPeriod
     */
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
