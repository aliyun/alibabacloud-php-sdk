<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetTargetDimensionDataRequest extends Model
{
    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $flag;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $labelValue;

    /**
     * @var string
     */
    public $metricId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'end'        => 'End',
        'flag'       => 'Flag',
        'label'      => 'Label',
        'labelValue' => 'LabelValue',
        'metricId'   => 'MetricId',
        'operaUid'   => 'OperaUid',
        'start'      => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->labelValue) {
            $res['LabelValue'] = $this->labelValue;
        }
        if (null !== $this->metricId) {
            $res['MetricId'] = $this->metricId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTargetDimensionDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['LabelValue'])) {
            $model->labelValue = $map['LabelValue'];
        }
        if (isset($map['MetricId'])) {
            $model->metricId = $map['MetricId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
