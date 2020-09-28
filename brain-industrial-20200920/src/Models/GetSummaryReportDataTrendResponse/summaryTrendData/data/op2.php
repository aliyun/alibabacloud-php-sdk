<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportDataTrendResponse\summaryTrendData\data;

use AlibabaCloud\Tea\Model;

class op2 extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $xlabel;

    /**
     * @var float
     */
    public $ylabel;
    protected $_name = [
        'name'   => 'Name',
        'xlabel' => 'Xlabel',
        'ylabel' => 'Ylabel',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('xlabel', $this->xlabel, true);
        Model::validateRequired('ylabel', $this->ylabel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->xlabel) {
            $res['Xlabel'] = $this->xlabel;
        }
        if (null !== $this->ylabel) {
            $res['Ylabel'] = $this->ylabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return op2
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Xlabel'])) {
            $model->xlabel = $map['Xlabel'];
        }
        if (isset($map['Ylabel'])) {
            $model->ylabel = $map['Ylabel'];
        }

        return $model;
    }
}
