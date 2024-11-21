<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCheckProcessesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCheckProcessesResponseBody\pagingInfo\checkProcesses;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var checkProcesses[]
     */
    public $checkProcesses;

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
     * @example 12
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'checkProcesses' => 'CheckProcesses',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkProcesses) {
            $res['CheckProcesses'] = [];
            if (null !== $this->checkProcesses && \is_array($this->checkProcesses)) {
                $n = 0;
                foreach ($this->checkProcesses as $item) {
                    $res['CheckProcesses'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['CheckProcesses'])) {
            if (!empty($map['CheckProcesses'])) {
                $model->checkProcesses = [];
                $n                     = 0;
                foreach ($map['CheckProcesses'] as $item) {
                    $model->checkProcesses[$n++] = null !== $item ? checkProcesses::fromMap($item) : $item;
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
