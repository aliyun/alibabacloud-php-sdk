<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponseBody\pagedSkillGroupSummaryReport;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsByIntervalResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupTimeIntervalReport;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupTimeIntervalReport) {
            $res['SkillGroupTimeIntervalReport'] = [];
            if (null !== $this->skillGroupTimeIntervalReport && \is_array($this->skillGroupTimeIntervalReport)) {
                $n = 0;
                foreach ($this->skillGroupTimeIntervalReport as $item) {
                    $res['SkillGroupTimeIntervalReport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupTimeIntervalReport'])) {
            if (!empty($map['SkillGroupTimeIntervalReport'])) {
                $model->skillGroupTimeIntervalReport = [];
                $n                                   = 0;
                foreach ($map['SkillGroupTimeIntervalReport'] as $item) {
                    $model->skillGroupTimeIntervalReport[$n++] = null !== $item ? skillGroupTimeIntervalReport::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
