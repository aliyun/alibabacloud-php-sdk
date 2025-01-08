<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ListSensitiveWordResponseBody;

use AlibabaCloud\SDK\RAI\V20240701\Models\ListSensitiveWordResponseBody\data\sensitiveWordList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10000
     *
     * @var int
     */
    public $maxCount;

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
     * @var sensitiveWordList[]
     */
    public $sensitiveWordList;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxCount'          => 'MaxCount',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'sensitiveWordList' => 'SensitiveWordList',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sensitiveWordList) {
            $res['SensitiveWordList'] = [];
            if (null !== $this->sensitiveWordList && \is_array($this->sensitiveWordList)) {
                $n = 0;
                foreach ($this->sensitiveWordList as $item) {
                    $res['SensitiveWordList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SensitiveWordList'])) {
            if (!empty($map['SensitiveWordList'])) {
                $model->sensitiveWordList = [];
                $n                        = 0;
                foreach ($map['SensitiveWordList'] as $item) {
                    $model->sensitiveWordList[$n++] = null !== $item ? sensitiveWordList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
