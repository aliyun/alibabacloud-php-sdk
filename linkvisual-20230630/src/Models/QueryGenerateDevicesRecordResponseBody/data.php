<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryGenerateDevicesRecordResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryGenerateDevicesRecordResponseBody\data\listData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var listData[]
     */
    public $listData;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 5
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'listData' => 'ListData',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'total'    => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listData) {
            $res['ListData'] = [];
            if (null !== $this->listData && \is_array($this->listData)) {
                $n = 0;
                foreach ($this->listData as $item) {
                    $res['ListData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['ListData'])) {
            if (!empty($map['ListData'])) {
                $model->listData = [];
                $n               = 0;
                foreach ($map['ListData'] as $item) {
                    $model->listData[$n++] = null !== $item ? listData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
