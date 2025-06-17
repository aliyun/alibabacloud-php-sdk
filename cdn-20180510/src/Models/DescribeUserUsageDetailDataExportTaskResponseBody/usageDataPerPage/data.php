<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage\data\dataItem;

class data extends Model
{
    /**
     * @var dataItem[]
     */
    public $dataItem;
    protected $_name = [
        'dataItem' => 'DataItem',
    ];

    public function validate()
    {
        if (\is_array($this->dataItem)) {
            Model::validateArray($this->dataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataItem) {
            if (\is_array($this->dataItem)) {
                $res['DataItem'] = [];
                $n1 = 0;
                foreach ($this->dataItem as $item1) {
                    $res['DataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataItem'])) {
            if (!empty($map['DataItem'])) {
                $model->dataItem = [];
                $n1 = 0;
                foreach ($map['DataItem'] as $item1) {
                    $model->dataItem[$n1] = dataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
