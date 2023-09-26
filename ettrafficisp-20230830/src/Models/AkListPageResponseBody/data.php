<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkListPageResponseBody;

use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkListPageResponseBody\data\dataList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 300
     *
     * @var int
     */
    public $count;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @example 32
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'count'       => 'count',
        'currentPage' => 'currentPage',
        'dataList'    => 'dataList',
        'totalPage'   => 'totalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->dataList) {
            $res['dataList'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['dataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPage) {
            $res['totalPage'] = $this->totalPage;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['dataList'])) {
            if (!empty($map['dataList'])) {
                $model->dataList = [];
                $n               = 0;
                foreach ($map['dataList'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalPage'])) {
            $model->totalPage = $map['totalPage'];
        }

        return $model;
    }
}
