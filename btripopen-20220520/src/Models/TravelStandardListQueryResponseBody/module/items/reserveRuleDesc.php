<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module\items\reserveRuleDesc\dataList;

class reserveRuleDesc extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataList' => 'data_list',
        'title' => 'title',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['data_list'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['data_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['data_list'])) {
            if (!empty($map['data_list'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['data_list'] as $item1) {
                    $model->dataList[$n1] = dataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
