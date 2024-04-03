<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Emissions. The result is maintained up to 31 decimal places for precise intermediate calculation and subsequently truncated for display. It is advised to pair the emissions figure with the unit of the environmental impact result for a comprehensive understanding.
     *
     * @example 1009.976265540000000000000000000000
     *
     * @var float
     */
    public $carbonEmission;

    /**
     * @description The evaluation index adopted for the environmental impact
     *
     * @example GWP100a
     *
     * @var string
     */
    public $indicator;

    /**
     * @description The category key. The environmental impact category. Currently, a maximum of 19 categories are supported. Enumeration refers to [Carbon Footprint Appendices](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/CarbonFootprintAppendices-en.pdf).
     *
     * @example gwp
     *
     * @var string
     */
    public $key;

    /**
     * @description Calculation method standard
     *
     * @example CML v4.8 2016
     *
     * @var string
     */
    public $method;

    /**
     * @description The name of the category.
     *
     * @example climate change
     *
     * @var string
     */
    public $name;

    /**
     * @description Category num: the unique serial number of the environmental impact category. A maximum of 19 categories are supported. Enumeration refers to [Carbon Footprint Appendices](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/CarbonFootprintAppendices-en.pdf).
     *
     * @example 1
     *
     * @var int
     */
    public $num;

    /**
     * @description Environmental impact result Value Unit.
     *
     * @example kg CO2-Eq
     *
     * @var string
     */
    public $preUnit;

    /**
     * @description The data status. 1 indicates that the calculation is accurate, 2 indicates that the default data is used, and 3 indicates that the missing factor uses the value of 0.
     *
     * @example 1
     *
     * @var int
     */
    public $state;
    protected $_name = [
        'carbonEmission' => 'carbonEmission',
        'indicator'      => 'indicator',
        'key'            => 'key',
        'method'         => 'method',
        'name'           => 'name',
        'num'            => 'num',
        'preUnit'        => 'preUnit',
        'state'          => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carbonEmission) {
            $res['carbonEmission'] = $this->carbonEmission;
        }
        if (null !== $this->indicator) {
            $res['indicator'] = $this->indicator;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->num) {
            $res['num'] = $this->num;
        }
        if (null !== $this->preUnit) {
            $res['preUnit'] = $this->preUnit;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }
        if (isset($map['indicator'])) {
            $model->indicator = $map['indicator'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['num'])) {
            $model->num = $map['num'];
        }
        if (isset($map['preUnit'])) {
            $model->preUnit = $map['preUnit'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
