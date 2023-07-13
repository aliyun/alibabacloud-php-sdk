<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\escalations\critical;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\escalations\info;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\escalations\warn;
use AlibabaCloud\Tea\Model;

class escalations extends Model
{
    /**
     * @description The conditions for triggering Critical-level alerts.
     *
     * @var critical
     */
    public $critical;

    /**
     * @description The conditions for triggering Info-level alerts.
     *
     * @var info
     */
    public $info;

    /**
     * @description The conditions for triggering Warn-level alerts.
     *
     * @var warn
     */
    public $warn;
    protected $_name = [
        'critical' => 'Critical',
        'info'     => 'Info',
        'warn'     => 'Warn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = null !== $this->critical ? $this->critical->toMap() : null;
        }
        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toMap() : null;
        }
        if (null !== $this->warn) {
            $res['Warn'] = null !== $this->warn ? $this->warn->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Critical'])) {
            $model->critical = critical::fromMap($map['Critical']);
        }
        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }
        if (isset($map['Warn'])) {
            $model->warn = warn::fromMap($map['Warn']);
        }

        return $model;
    }
}
