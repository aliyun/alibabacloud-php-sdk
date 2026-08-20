<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInspectionTaskReportResponseBody\data;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $error;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $normal;

    /**
     * @var int
     */
    public $warning;
    protected $_name = [
        'error' => 'Error',
        'failed' => 'Failed',
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
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
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
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
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
