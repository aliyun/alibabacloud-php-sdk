<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponseBody\data\reminds;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The custom alert rules returned.
     *
     * @var reminds[]
     */
    public $reminds;

    /**
     * @description The total number of custom alert rules returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'reminds'    => 'Reminds',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reminds) {
            $res['Reminds'] = [];
            if (null !== $this->reminds && \is_array($this->reminds)) {
                $n = 0;
                foreach ($this->reminds as $item) {
                    $res['Reminds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reminds'])) {
            if (!empty($map['Reminds'])) {
                $model->reminds = [];
                $n              = 0;
                foreach ($map['Reminds'] as $item) {
                    $model->reminds[$n++] = null !== $item ? reminds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
