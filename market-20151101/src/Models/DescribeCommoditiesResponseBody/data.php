<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommoditiesResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommoditiesResponseBody\data\commodities;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommoditiesResponseBody\data\pageable;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var commodities
     */
    public $commodities;

    /**
     * @var pageable
     */
    public $pageable;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'commodities' => 'Commodities',
        'pageable'    => 'Pageable',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodities) {
            $res['Commodities'] = null !== $this->commodities ? $this->commodities->toMap() : null;
        }
        if (null !== $this->pageable) {
            $res['Pageable'] = null !== $this->pageable ? $this->pageable->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Commodities'])) {
            $model->commodities = commodities::fromMap($map['Commodities']);
        }
        if (isset($map['Pageable'])) {
            $model->pageable = pageable::fromMap($map['Pageable']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
