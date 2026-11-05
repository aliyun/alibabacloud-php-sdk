<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeInspectionReportListResponseBody\reportItems;

use AlibabaCloud\Dara\Model;

class subItems extends Model
{
    /**
     * @var int
     */
    public $critical;

    /**
     * @var int
     */
    public $info;

    /**
     * @var int
     */
    public $normal;

    /**
     * @var int
     */
    public $warning;
    protected $_name = [
        'critical' => 'Critical',
        'info' => 'Info',
        'normal' => 'Normal',
        'warning' => 'Warning',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = $this->critical;
        }

        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }

        if (null !== $this->normal) {
            $res['Normal'] = $this->normal;
        }

        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
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
        if (isset($map['Critical'])) {
            $model->critical = $map['Critical'];
        }

        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }

        if (isset($map['Normal'])) {
            $model->normal = $map['Normal'];
        }

        if (isset($map['Warning'])) {
            $model->warning = $map['Warning'];
        }

        return $model;
    }
}
