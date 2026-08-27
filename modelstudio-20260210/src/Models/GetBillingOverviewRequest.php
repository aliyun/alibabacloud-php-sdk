<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingOverviewRequest\filter;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingOverviewRequest\groupBy;

class GetBillingOverviewRequest extends Model
{
    /**
     * @var string
     */
    public $billMonth;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var groupBy[]
     */
    public $groupBy;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $topNum;

    /**
     * @var bool
     */
    public $zeroFilter;
    protected $_name = [
        'billMonth' => 'billMonth',
        'filter' => 'filter',
        'groupBy' => 'groupBy',
        'locale' => 'locale',
        'regionId' => 'regionId',
        'topNum' => 'topNum',
        'zeroFilter' => 'zeroFilter',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billMonth) {
            $res['billMonth'] = $this->billMonth;
        }

        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['groupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['groupBy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->locale) {
            $res['locale'] = $this->locale;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['billMonth'])) {
            $model->billMonth = $map['billMonth'];
        }

        if (isset($map['filter'])) {
            $model->filter = filter::fromMap($map['filter']);
        }

        if (isset($map['groupBy'])) {
            if (!empty($map['groupBy'])) {
                $model->groupBy = [];
                $n1 = 0;
                foreach ($map['groupBy'] as $item1) {
                    $model->groupBy[$n1] = groupBy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['locale'])) {
            $model->locale = $map['locale'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
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
