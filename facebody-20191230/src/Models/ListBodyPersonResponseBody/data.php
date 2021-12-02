<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyPersonResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyPersonResponseBody\data\personList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var personList[]
     */
    public $personList;

    /**
     * @description 数据总量
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'personList' => 'PersonList',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->personList) {
            $res['PersonList'] = [];
            if (null !== $this->personList && \is_array($this->personList)) {
                $n = 0;
                foreach ($this->personList as $item) {
                    $res['PersonList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['PersonList'])) {
            if (!empty($map['PersonList'])) {
                $model->personList = [];
                $n                 = 0;
                foreach ($map['PersonList'] as $item) {
                    $model->personList[$n++] = null !== $item ? personList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
