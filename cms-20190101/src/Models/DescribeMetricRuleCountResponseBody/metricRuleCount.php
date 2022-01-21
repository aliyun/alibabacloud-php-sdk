<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleCountResponseBody;

use AlibabaCloud\Tea\Model;

class metricRuleCount extends Model
{
    /**
     * @var int
     */
    public $alarm;

    /**
     * @var int
     */
    public $disable;

    /**
     * @var int
     */
    public $nodata;

    /**
     * @var int
     */
    public $ok;

    /**
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
