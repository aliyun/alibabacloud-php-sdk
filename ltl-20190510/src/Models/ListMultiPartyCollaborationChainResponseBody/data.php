<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListMultiPartyCollaborationChainResponseBody;

use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMultiPartyCollaborationChainResponseBody\data\pageData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $num;

    /**
     * @var pageData[]
     */
    public $pageData;

    /**
     * @example 1
     *
     * @var int
     */
    public $size;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'num'      => 'Num',
        'pageData' => 'PageData',
        'size'     => 'Size',
        'total'    => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->pageData) {
            $res['PageData'] = [];
            if (null !== $this->pageData && \is_array($this->pageData)) {
                $n = 0;
                foreach ($this->pageData as $item) {
                    $res['PageData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PageData'])) {
            if (!empty($map['PageData'])) {
                $model->pageData = [];
                $n               = 0;
                foreach ($map['PageData'] as $item) {
                    $model->pageData[$n++] = null !== $item ? pageData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
