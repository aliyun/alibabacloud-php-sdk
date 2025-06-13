<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports\report;

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
        if (\is_array($this->report)) {
            Model::validateArray($this->report);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->report) {
            if (\is_array($this->report)) {
                $res['Report'] = [];
                $n1 = 0;
                foreach ($this->report as $item1) {
                    $res['Report'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Report'])) {
            if (!empty($map['Report'])) {
                $model->report = [];
                $n1 = 0;
                foreach ($map['Report'] as $item1) {
                    $model->report[$n1] = report::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
