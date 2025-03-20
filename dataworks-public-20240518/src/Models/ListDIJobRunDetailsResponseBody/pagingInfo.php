<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobRunDetailsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobRunDetailsResponseBody\pagingInfo\jobRunInfos;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The running information about the synchronization task.
     *
     * @var jobRunInfos[]
     */
    public $jobRunInfos;

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
     * @description The total number of entries returned.
     *
     * @example 131
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'jobRunInfos' => 'JobRunInfos',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobRunInfos) {
            $res['JobRunInfos'] = [];
            if (null !== $this->jobRunInfos && \is_array($this->jobRunInfos)) {
                $n = 0;
                foreach ($this->jobRunInfos as $item) {
                    $res['JobRunInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobRunInfos'])) {
            if (!empty($map['JobRunInfos'])) {
                $model->jobRunInfos = [];
                $n = 0;
                foreach ($map['JobRunInfos'] as $item) {
                    $model->jobRunInfos[$n++] = null !== $item ? jobRunInfos::fromMap($item) : $item;
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
