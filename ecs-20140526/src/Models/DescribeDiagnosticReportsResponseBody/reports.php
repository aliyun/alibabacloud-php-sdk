<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports\report;
use AlibabaCloud\Tea\Model;

class reports extends Model
{
    /**
     * @var report[]
     */
    public $report;
    protected $_name = [
        'report' => 'Report',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->report) {
            $res['Report'] = [];
            if (null !== $this->report && \is_array($this->report)) {
                $n = 0;
                foreach ($this->report as $item) {
                    $res['Report'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Report'])) {
            if (!empty($map['Report'])) {
                $model->report = [];
                $n             = 0;
                foreach ($map['Report'] as $item) {
                    $model->report[$n++] = null !== $item ? report::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
