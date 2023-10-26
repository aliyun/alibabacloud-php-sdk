<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_\overall;

use AlibabaCloud\Tea\Model;

class breakCodeDetailList extends Model
{
    /**
     * @var string
     */
    public $breakCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @example 100
     *
     * @var int
     */
    public $duration;
    protected $_name = [
        'breakCode' => 'BreakCode',
        'count'     => 'Count',
        'duration'  => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakCode) {
            $res['BreakCode'] = $this->breakCode;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return breakCodeDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BreakCode'])) {
            $model->breakCode = $map['BreakCode'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
