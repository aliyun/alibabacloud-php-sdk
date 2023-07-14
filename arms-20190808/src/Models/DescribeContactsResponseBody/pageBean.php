<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsResponseBody\pageBean\alertContacts;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @var alertContacts[]
     */
    public $alertContacts;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
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
        'alertContacts' => 'AlertContacts',
        'page'          => 'Page',
        'size'          => 'Size',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertContacts) {
            $res['AlertContacts'] = [];
            if (null !== $this->alertContacts && \is_array($this->alertContacts)) {
                $n = 0;
                foreach ($this->alertContacts as $item) {
                    $res['AlertContacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
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
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertContacts'])) {
            if (!empty($map['AlertContacts'])) {
                $model->alertContacts = [];
                $n                    = 0;
                foreach ($map['AlertContacts'] as $item) {
                    $model->alertContacts[$n++] = null !== $item ? alertContacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
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
