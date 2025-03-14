<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDataTrendResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetDataTrendResponseBody\data\itemList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The statistical timestamps of the trend data.
     *
     * @var int[]
     */
    public $dateList;

    /**
     * @description The statistical dates and time for the trend data.
     *
     * @var string[]
     */
    public $dateStrList;

    /**
     * @description The returned data.
     *
     * @var itemList[]
     */
    public $itemList;
    protected $_name = [
        'dateList' => 'DateList',
        'dateStrList' => 'DateStrList',
        'itemList' => 'ItemList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateList) {
            $res['DateList'] = $this->dateList;
        }
        if (null !== $this->dateStrList) {
            $res['DateStrList'] = $this->dateStrList;
        }
        if (null !== $this->itemList) {
            $res['ItemList'] = [];
            if (null !== $this->itemList && \is_array($this->itemList)) {
                $n = 0;
                foreach ($this->itemList as $item) {
                    $res['ItemList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DateList'])) {
            if (!empty($map['DateList'])) {
                $model->dateList = $map['DateList'];
            }
        }
        if (isset($map['DateStrList'])) {
            if (!empty($map['DateStrList'])) {
                $model->dateStrList = $map['DateStrList'];
            }
        }
        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n = 0;
                foreach ($map['ItemList'] as $item) {
                    $model->itemList[$n++] = null !== $item ? itemList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
