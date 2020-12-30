<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponseBody\pagedSkillGroupSummaryReport\list_;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupTimeIntervalReport\intervalList;
use AlibabaCloud\Tea\Model;

class skillGroupTimeIntervalReport extends Model
{
    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var intervalList
     */
    public $intervalList;
    protected $_name = [
        'skillGroupId' => 'SkillGroupId',
        'intervalList' => 'IntervalList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->intervalList) {
            $res['IntervalList'] = null !== $this->intervalList ? $this->intervalList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroupTimeIntervalReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['IntervalList'])) {
            $model->intervalList = intervalList::fromMap($map['IntervalList']);
        }

        return $model;
    }
}
