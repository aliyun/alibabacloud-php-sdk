<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\filters;

use AlibabaCloud\Tea\Model;

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
        'filterKey'    => 'FilterKey',
        'filterOpt'    => 'FilterOpt',
        'filterValues' => 'FilterValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }
        if (null !== $this->filterOpt) {
            $res['FilterOpt'] = $this->filterOpt;
        }
        if (null !== $this->filterValues) {
            $res['FilterValues'] = $this->filterValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimFilters
     */
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
                $model->filterValues = $map['FilterValues'];
            }
        }

        return $model;
    }
}
