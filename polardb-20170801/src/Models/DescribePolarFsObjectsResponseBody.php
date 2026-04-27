<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsObjectsResponseBody\items;

class DescribePolarFsObjectsResponseBody extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $polarFsInstanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalRecordCount;
    protected $_name = [
        'items' => 'Items',
        'pageRecordCount' => 'PageRecordCount',
        'pageSize' => 'PageSize',
        'path' => 'Path',
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
