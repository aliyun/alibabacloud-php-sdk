<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleCountResponseBody;

use AlibabaCloud\Tea\Model;

class metricRuleCount extends Model
{
    /**
     * @var int
     */
    public $ok;

    /**
     * @var int
     */
    public $nodata;

    /**
     * @var int
     */
    public $disable;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $alarm;
    protected $_name = [
        'ok'      => 'Ok',
        'nodata'  => 'Nodata',
        'disable' => 'Disable',
        'total'   => 'Total',
        'alarm'   => 'Alarm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ok) {
            $res['Ok'] = $this->ok;
        }
        if (null !== $this->nodata) {
            $res['Nodata'] = $this->nodata;
        }
        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->alarm) {
            $res['Alarm'] = $this->alarm;
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
        if (isset($map['Ok'])) {
            $model->ok = $map['Ok'];
        }
        if (isset($map['Nodata'])) {
            $model->nodata = $map['Nodata'];
        }
        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Alarm'])) {
            $model->alarm = $map['Alarm'];
        }

        return $model;
    }
}
