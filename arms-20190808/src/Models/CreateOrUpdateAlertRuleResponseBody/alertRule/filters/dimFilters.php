<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\filters;

use AlibabaCloud\Dara\Model;

class dimFilters extends Model
{
    /**
     * @var string
     */
    public $filterKey;

    /**
     * @var string
     */
    public $filterOpt;

    /**
     * @var string[]
     */
    public $filterValues;
    protected $_name = [
        'filterKey' => 'FilterKey',
        'filterOpt' => 'FilterOpt',
        'filterValues' => 'FilterValues',
    ];

    public function validate()
    {
        if (\is_array($this->filterValues)) {
            Model::validateArray($this->filterValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }

        if (null !== $this->filterOpt) {
            $res['FilterOpt'] = $this->filterOpt;
        }

        if (null !== $this->filterValues) {
            if (\is_array($this->filterValues)) {
                $res['FilterValues'] = [];
                $n1 = 0;
                foreach ($this->filterValues as $item1) {
                    $res['FilterValues'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }

        if (isset($map['FilterOpt'])) {
            $model->filterOpt = $map['FilterOpt'];
        }

        if (isset($map['FilterValues'])) {
            if (!empty($map['FilterValues'])) {
                $model->filterValues = [];
                $n1 = 0;
                foreach ($map['FilterValues'] as $item1) {
                    $model->filterValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
