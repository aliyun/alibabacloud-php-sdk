<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDataExportTaskResponseBody\usageDataPerPage;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDataExportTaskResponseBody\usageDataPerPage\data\dataItem;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataItem[]
     */
    public $dataItem;
    protected $_name = [
        'dataItem' => 'DataItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataItem) {
            $res['DataItem'] = [];
            if (null !== $this->dataItem && \is_array($this->dataItem)) {
                $n = 0;
                foreach ($this->dataItem as $item) {
                    $res['DataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DataItem'])) {
            if (!empty($map['DataItem'])) {
                $model->dataItem = [];
                $n = 0;
                foreach ($map['DataItem'] as $item) {
                    $model->dataItem[$n++] = null !== $item ? dataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
