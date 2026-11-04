<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponseBody\pagedSkillGroupSummaryReport\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupTimeIntervalReport\intervalList;

class skillGroupTimeIntervalReport extends Model
{
    /**
     * @var intervalList
     */
    public $intervalList;

    /**
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'intervalList' => 'IntervalList',
        'skillGroupId' => 'SkillGroupId',
    ];

    public function validate()
    {
        if (null !== $this->intervalList) {
            $this->intervalList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intervalList) {
            $res['IntervalList'] = null !== $this->intervalList ? $this->intervalList->toArray($noStream) : $this->intervalList;
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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
        if (isset($map['IntervalList'])) {
            $model->intervalList = intervalList::fromMap($map['IntervalList']);
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
