<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponseBody\pagedSkillGroupSummaryReport;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupTimeIntervalReport;

class list_ extends Model
{
    /**
     * @var skillGroupTimeIntervalReport[]
     */
    public $skillGroupTimeIntervalReport;
    protected $_name = [
        'skillGroupTimeIntervalReport' => 'SkillGroupTimeIntervalReport',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroupTimeIntervalReport)) {
            Model::validateArray($this->skillGroupTimeIntervalReport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillGroupTimeIntervalReport) {
            if (\is_array($this->skillGroupTimeIntervalReport)) {
                $res['SkillGroupTimeIntervalReport'] = [];
                $n1 = 0;
                foreach ($this->skillGroupTimeIntervalReport as $item1) {
                    $res['SkillGroupTimeIntervalReport'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SkillGroupTimeIntervalReport'])) {
            if (!empty($map['SkillGroupTimeIntervalReport'])) {
                $model->skillGroupTimeIntervalReport = [];
                $n1 = 0;
                foreach ($map['SkillGroupTimeIntervalReport'] as $item1) {
                    $model->skillGroupTimeIntervalReport[$n1] = skillGroupTimeIntervalReport::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
