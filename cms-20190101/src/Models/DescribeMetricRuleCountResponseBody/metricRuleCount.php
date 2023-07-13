<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleCountResponseBody;

use AlibabaCloud\Tea\Model;

class metricRuleCount extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $alarm;

    /**
     * @description The total number of alert rules.
     *
     * @example 0
     *
     * @var int
     */
    public $disable;

    /**
     * @description The number of disabled alert rules.
     *
     * @example 0
     *
     * @var int
     */
    public $nodata;

    /**
     * @description The number of alert rules without data.
     *
     * @example 40
     *
     * @var int
     */
    public $ok;

    /**
     * @description The number of alert rules with active alerts.
     *
     * @example 45
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'alarm'   => 'Alarm',
        'disable' => 'Disable',
        'nodata'  => 'Nodata',
        'ok'      => 'Ok',
        'total'   => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarm) {
            $res['Alarm'] = $this->alarm;
        }
        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }
        if (null !== $this->nodata) {
            $res['Nodata'] = $this->nodata;
        }
        if (null !== $this->ok) {
            $res['Ok'] = $this->ok;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricRuleCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarm'])) {
            $model->alarm = $map['Alarm'];
        }
        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }
        if (isset($map['Nodata'])) {
            $model->nodata = $map['Nodata'];
        }
        if (isset($map['Ok'])) {
            $model->ok = $map['Ok'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
