<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsResponseBody\pagedSkillGroupSummaryReport;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupSummaryReport;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupSummaryReport) {
            $res['SkillGroupSummaryReport'] = [];
            if (null !== $this->skillGroupSummaryReport && \is_array($this->skillGroupSummaryReport)) {
                $n = 0;
                foreach ($this->skillGroupSummaryReport as $item) {
                    $res['SkillGroupSummaryReport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupSummaryReport'])) {
            if (!empty($map['SkillGroupSummaryReport'])) {
                $model->skillGroupSummaryReport = [];
                $n                              = 0;
                foreach ($map['SkillGroupSummaryReport'] as $item) {
                    $model->skillGroupSummaryReport[$n++] = null !== $item ? skillGroupSummaryReport::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
