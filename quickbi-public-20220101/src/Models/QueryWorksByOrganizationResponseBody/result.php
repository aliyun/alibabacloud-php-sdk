<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationResponseBody\result\data;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The Alibaba Cloud account name of the work owner.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The timestamp of the modification of the work in milliseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The ID of the work.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the work. Valid values:
     *
     *   DATAPRODUCT: BI portal
     *   PAGE: Dashboard
     *   FULLPAGE: full-screen dashboards
     *   REPORT: workbook
     *
     * @example 1
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description Third-party embedding status. Valid values:
     *
     *   0: The embed service is not enabled.
     *   1: Embed is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'data'       => 'Data',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalNum'   => 'TotalNum',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
