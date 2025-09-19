<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDataTrendResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetDataTrendResponseBody\data\itemList;

class data extends Model
{
    /**
     * @var int[]
     */
    public $dateList;

    /**
     * @var string[]
     */
    public $dateStrList;

    /**
     * @var itemList[]
     */
    public $itemList;
    protected $_name = [
        'dateList' => 'DateList',
        'dateStrList' => 'DateStrList',
        'itemList' => 'ItemList',
    ];

    public function validate()
    {
        if (\is_array($this->dateList)) {
            Model::validateArray($this->dateList);
        }
        if (\is_array($this->dateStrList)) {
            Model::validateArray($this->dateStrList);
        }
        if (\is_array($this->itemList)) {
            Model::validateArray($this->itemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateList) {
            if (\is_array($this->dateList)) {
                $res['DateList'] = [];
                $n1 = 0;
                foreach ($this->dateList as $item1) {
                    $res['DateList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dateStrList) {
            if (\is_array($this->dateStrList)) {
                $res['DateStrList'] = [];
                $n1 = 0;
                foreach ($this->dateStrList as $item1) {
                    $res['DateStrList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemList) {
            if (\is_array($this->itemList)) {
                $res['ItemList'] = [];
                $n1 = 0;
                foreach ($this->itemList as $item1) {
                    $res['ItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DateList'])) {
            if (!empty($map['DateList'])) {
                $model->dateList = [];
                $n1 = 0;
                foreach ($map['DateList'] as $item1) {
                    $model->dateList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DateStrList'])) {
            if (!empty($map['DateStrList'])) {
                $model->dateStrList = [];
                $n1 = 0;
                foreach ($map['DateStrList'] as $item1) {
                    $model->dateStrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n1 = 0;
                foreach ($map['ItemList'] as $item1) {
                    $model->itemList[$n1] = itemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
