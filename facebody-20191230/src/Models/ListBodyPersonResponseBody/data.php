<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyPersonResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyPersonResponseBody\data\personList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 数据总量
     *
     * @var int
     */
    public $total;

    /**
     * @var personList[]
     */
    public $personList;
    protected $_name = [
        'total'      => 'Total',
        'personList' => 'PersonList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->personList) {
            $res['PersonList'] = [];
            if (null !== $this->personList && \is_array($this->personList)) {
                $n = 0;
                foreach ($this->personList as $item) {
                    $res['PersonList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PersonList'])) {
            if (!empty($map['PersonList'])) {
                $model->personList = [];
                $n                 = 0;
                foreach ($map['PersonList'] as $item) {
                    $model->personList[$n++] = null !== $item ? personList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
