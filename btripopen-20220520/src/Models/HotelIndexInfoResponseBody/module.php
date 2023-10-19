<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelIndexInfoResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelIndexInfoResponseBody\module\items;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'items'     => 'items',
        'pageSize'  => 'page_size',
        'pageToken' => 'page_token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageToken) {
            $res['page_token'] = $this->pageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['page_token'])) {
            $model->pageToken = $map['page_token'];
        }

        return $model;
    }
}
