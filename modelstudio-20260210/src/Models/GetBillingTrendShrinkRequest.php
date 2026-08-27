<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class GetBillingTrendShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $filterShrink;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $groupByShrink;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $timePeriodShrink;

    /**
     * @var int
     */
    public $topNum;

    /**
     * @var bool
     */
    public $zeroFilter;
    protected $_name = [
        'filterShrink' => 'filter',
        'granularity' => 'granularity',
        'groupByShrink' => 'groupBy',
        'locale' => 'locale',
        'regionId' => 'regionId',
        'timePeriodShrink' => 'timePeriod',
        'topNum' => 'topNum',
        'zeroFilter' => 'zeroFilter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterShrink) {
            $res['filter'] = $this->filterShrink;
        }

        if (null !== $this->granularity) {
            $res['granularity'] = $this->granularity;
        }

        if (null !== $this->groupByShrink) {
            $res['groupBy'] = $this->groupByShrink;
        }

        if (null !== $this->locale) {
            $res['locale'] = $this->locale;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->timePeriodShrink) {
            $res['timePeriod'] = $this->timePeriodShrink;
        }

        if (null !== $this->topNum) {
            $res['topNum'] = $this->topNum;
        }

        if (null !== $this->zeroFilter) {
            $res['zeroFilter'] = $this->zeroFilter;
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
        if (isset($map['filter'])) {
            $model->filterShrink = $map['filter'];
        }

        if (isset($map['granularity'])) {
            $model->granularity = $map['granularity'];
        }

        if (isset($map['groupBy'])) {
            $model->groupByShrink = $map['groupBy'];
        }

        if (isset($map['locale'])) {
            $model->locale = $map['locale'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['timePeriod'])) {
            $model->timePeriodShrink = $map['timePeriod'];
        }

        if (isset($map['topNum'])) {
            $model->topNum = $map['topNum'];
        }

        if (isset($map['zeroFilter'])) {
            $model->zeroFilter = $map['zeroFilter'];
        }

        return $model;
    }
}
