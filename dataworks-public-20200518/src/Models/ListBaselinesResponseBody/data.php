<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselinesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselinesResponseBody\data\baselines;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The baselines.
     *
     * @var baselines[]
     */
    public $baselines;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The total number of baselines returned.
     *
     * @example 100
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'baselines'  => 'Baselines',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselines) {
            $res['Baselines'] = [];
            if (null !== $this->baselines && \is_array($this->baselines)) {
                $n = 0;
                foreach ($this->baselines as $item) {
                    $res['Baselines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Baselines'])) {
            if (!empty($map['Baselines'])) {
                $model->baselines = [];
                $n                = 0;
                foreach ($map['Baselines'] as $item) {
                    $model->baselines[$n++] = null !== $item ? baselines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
