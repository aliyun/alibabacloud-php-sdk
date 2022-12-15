<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryResponseBody\module\items;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @example 9YN+jxa7PcxbNUTISeKjEw==
     *
     * @var string
     */
    public $pageToken;

    /**
     * @example 0
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'hasMore'   => 'has_more',
        'items'     => 'items',
        'pageToken' => 'page_token',
        'total'     => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageToken) {
            $res['page_token'] = $this->pageToken;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['has_more'])) {
            $model->hasMore = $map['has_more'];
        }
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page_token'])) {
            $model->pageToken = $map['page_token'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
