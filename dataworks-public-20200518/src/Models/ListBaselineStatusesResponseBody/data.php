<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponseBody\data\baselineStatuses;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var baselineStatuses[]
     */
    public $baselineStatuses;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'baselineStatuses' => 'BaselineStatuses',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineStatuses) {
            $res['BaselineStatuses'] = [];
            if (null !== $this->baselineStatuses && \is_array($this->baselineStatuses)) {
                $n = 0;
                foreach ($this->baselineStatuses as $item) {
                    $res['BaselineStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BaselineStatuses'])) {
            if (!empty($map['BaselineStatuses'])) {
                $model->baselineStatuses = [];
                $n                       = 0;
                foreach ($map['BaselineStatuses'] as $item) {
                    $model->baselineStatuses[$n++] = null !== $item ? baselineStatuses::fromMap($item) : $item;
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
