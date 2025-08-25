<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentReportResponseBody\data\list_\overall;

use AlibabaCloud\Dara\Model;

class breakCodeDetailList extends Model
{
    /**
     * @var string
     */
    public $breakCode;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'breakCode' => 'BreakCode',
        'count' => 'Count',
        'duration' => 'Duration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
