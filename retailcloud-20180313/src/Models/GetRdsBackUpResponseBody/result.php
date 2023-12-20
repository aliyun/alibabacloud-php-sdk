<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\GetRdsBackUpResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\GetRdsBackUpResponseBody\result\items;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var string
     */
    public $pageRecordCount;

    /**
     * @example 8672256
     *
     * @var int
     */
    public $totalBackupSize;

    /**
     * @example 100
     *
     * @var string
     */
    public $totalRecordCount;
    protected $_name = [
        'items'            => 'Items',
        'pageNumber'       => 'PageNumber',
        'pageRecordCount'  => 'PageRecordCount',
        'totalBackupSize'  => 'TotalBackupSize',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->totalBackupSize) {
            $res['TotalBackupSize'] = $this->totalBackupSize;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['TotalBackupSize'])) {
            $model->totalBackupSize = $map['TotalBackupSize'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
