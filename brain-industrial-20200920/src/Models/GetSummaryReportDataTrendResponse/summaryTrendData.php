<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportDataTrendResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportDataTrendResponse\summaryTrendData\data;
use AlibabaCloud\Tea\Model;

class summaryTrendData extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var data
     */
    public $data;
    protected $_name = [
        'status' => 'Status',
        'data'   => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryTrendData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        return $model;
    }
}
