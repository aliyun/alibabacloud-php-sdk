<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRequestDiagnosisPageResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetRequestDiagnosisPageResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Additional information.
     *
     * @example {"":""}
     *
     * @var string
     */
    public $extra;

    /**
     * @description The SQL diagnostics records returned.
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description The page number. The value must be a positive integer. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. The value must be a positive integer. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'extra'    => 'extra',
        'list'     => 'list',
        'pageNo'   => 'pageNo',
        'pageSize' => 'pageSize',
        'total'    => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->list) {
            $res['list'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
