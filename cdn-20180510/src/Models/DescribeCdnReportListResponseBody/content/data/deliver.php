<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportListResponseBody\content\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportListResponseBody\content\data\deliver\report;

class deliver extends Model
{
    /**
     * @var report
     */
    public $report;
    protected $_name = [
        'report' => 'report',
    ];

    public function validate()
    {
        if (null !== $this->report) {
            $this->report->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->report) {
            $res['report'] = null !== $this->report ? $this->report->toArray($noStream) : $this->report;
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
        if (isset($map['report'])) {
            $model->report = report::fromMap($map['report']);
        }

        return $model;
    }
}
