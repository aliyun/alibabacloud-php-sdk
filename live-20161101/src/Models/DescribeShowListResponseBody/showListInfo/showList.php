<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList\show;

class showList extends Model
{
    /**
     * @var show[]
     */
    public $show;
    protected $_name = [
        'show' => 'Show',
    ];

    public function validate()
    {
        if (\is_array($this->show)) {
            Model::validateArray($this->show);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->show) {
            if (\is_array($this->show)) {
                $res['Show'] = [];
                $n1 = 0;
                foreach ($this->show as $item1) {
                    $res['Show'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Show'])) {
            if (!empty($map['Show'])) {
                $model->show = [];
                $n1 = 0;
                foreach ($map['Show'] as $item1) {
                    $model->show[$n1] = show::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
