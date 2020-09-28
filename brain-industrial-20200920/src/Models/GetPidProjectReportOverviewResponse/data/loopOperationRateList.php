<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data;

use AlibabaCloud\Tea\Model;

class loopOperationRateList extends Model
{
    /**
     * @var string
     */
    public $xlabel;

    /**
     * @var string
     */
    public $ylabel;
    protected $_name = [
        'xlabel' => 'Xlabel',
        'ylabel' => 'Ylabel',
    ];

    public function validate()
    {
        Model::validateRequired('xlabel', $this->xlabel, true);
        Model::validateRequired('ylabel', $this->ylabel, true);
    }

    public function toMap()
    {
        $res = [];
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
     * @return loopOperationRateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Xlabel'])) {
            $model->xlabel = $map['Xlabel'];
        }
        if (isset($map['Ylabel'])) {
            $model->ylabel = $map['Ylabel'];
        }

        return $model;
    }
}
