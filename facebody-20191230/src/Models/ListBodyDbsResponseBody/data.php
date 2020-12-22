<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyDbsResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyDbsResponseBody\data\dbList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 数据库ID
     *
     * @var int
     */
    public $total;

    /**
     * @var dbList[]
     */
    public $dbList;
    protected $_name = [
        'total'  => 'Total',
        'dbList' => 'DbList',
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
        if (null !== $this->dbList) {
            $res['DbList'] = [];
            if (null !== $this->dbList && \is_array($this->dbList)) {
                $n = 0;
                foreach ($this->dbList as $item) {
                    $res['DbList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DbList'])) {
            if (!empty($map['DbList'])) {
                $model->dbList = [];
                $n             = 0;
                foreach ($map['DbList'] as $item) {
                    $model->dbList[$n++] = null !== $item ? dbList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
