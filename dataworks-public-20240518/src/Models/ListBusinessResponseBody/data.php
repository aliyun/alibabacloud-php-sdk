<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListBusinessResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListBusinessResponseBody\data\business;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var business[]
     */
    public $business;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 13
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'business' => 'Business',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['Business'] = [];
            if (null !== $this->business && \is_array($this->business)) {
                $n = 0;
                foreach ($this->business as $item) {
                    $res['Business'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Business'])) {
            if (!empty($map['Business'])) {
                $model->business = [];
                $n = 0;
                foreach ($map['Business'] as $item) {
                    $model->business[$n++] = null !== $item ? business::fromMap($item) : $item;
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
