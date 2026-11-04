<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupSummaryReport;

class list_ extends Model
{
    /**
     * @var skillGroupSummaryReport[]
     */
    public $skillGroupSummaryReport;
    protected $_name = [
        'skillGroupSummaryReport' => 'SkillGroupSummaryReport',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroupSummaryReport)) {
            Model::validateArray($this->skillGroupSummaryReport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillGroupSummaryReport) {
            if (\is_array($this->skillGroupSummaryReport)) {
                $res['SkillGroupSummaryReport'] = [];
                $n1 = 0;
                foreach ($this->skillGroupSummaryReport as $item1) {
                    $res['SkillGroupSummaryReport'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SkillGroupSummaryReport'])) {
            if (!empty($map['SkillGroupSummaryReport'])) {
                $model->skillGroupSummaryReport = [];
                $n1 = 0;
                foreach ($map['SkillGroupSummaryReport'] as $item1) {
                    $model->skillGroupSummaryReport[$n1] = skillGroupSummaryReport::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
