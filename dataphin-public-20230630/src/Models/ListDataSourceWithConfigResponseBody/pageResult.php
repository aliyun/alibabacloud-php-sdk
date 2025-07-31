<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult\dataSourceList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var dataSourceList[]
     */
    public $dataSourceList;

    /**
     * @example 39
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataSourceList' => 'DataSourceList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceList) {
            $res['DataSourceList'] = [];
            if (null !== $this->dataSourceList && \is_array($this->dataSourceList)) {
                $n = 0;
                foreach ($this->dataSourceList as $item) {
                    $res['DataSourceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceList'])) {
            if (!empty($map['DataSourceList'])) {
                $model->dataSourceList = [];
                $n = 0;
                foreach ($map['DataSourceList'] as $item) {
                    $model->dataSourceList[$n++] = null !== $item ? dataSourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
