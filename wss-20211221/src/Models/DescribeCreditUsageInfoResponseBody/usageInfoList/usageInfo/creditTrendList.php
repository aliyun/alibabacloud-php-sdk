<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList\usageInfo;

use AlibabaCloud\Dara\Model;

class creditTrendList extends Model
{
    /**
     * @var string
     */
    public $timePoint;

    /**
     * @var int
     */
    public $usedCredit;
    protected $_name = [
        'timePoint' => 'TimePoint',
        'usedCredit' => 'UsedCredit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        if (null !== $this->usedCredit) {
            $res['UsedCredit'] = $this->usedCredit;
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
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        if (isset($map['UsedCredit'])) {
            $model->usedCredit = $map['UsedCredit'];
        }

        return $model;
    }
}
