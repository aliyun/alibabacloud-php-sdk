<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeTransactionsListResponseBody;

use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeTransactionsListResponseBody\data\in;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeTransactionsListResponseBody\data\out;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var in[]
     */
    public $in;

    /**
     * @var out[]
     */
    public $out;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 6
     *
     * @var int
     */
    public $totalPages;

    /**
     * @example 300
     *
     * @var int
     */
    public $transactionsOnPage;
    protected $_name = [
        'in'                 => 'In',
        'out'                => 'Out',
        'page'               => 'Page',
        'totalPages'         => 'TotalPages',
        'transactionsOnPage' => 'TransactionsOnPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->in) {
            $res['In'] = [];
            if (null !== $this->in && \is_array($this->in)) {
                $n = 0;
                foreach ($this->in as $item) {
                    $res['In'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->out) {
            $res['Out'] = [];
            if (null !== $this->out && \is_array($this->out)) {
                $n = 0;
                foreach ($this->out as $item) {
                    $res['Out'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->transactionsOnPage) {
            $res['TransactionsOnPage'] = $this->transactionsOnPage;
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
        if (isset($map['In'])) {
            if (!empty($map['In'])) {
                $model->in = [];
                $n         = 0;
                foreach ($map['In'] as $item) {
                    $model->in[$n++] = null !== $item ? in::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Out'])) {
            if (!empty($map['Out'])) {
                $model->out = [];
                $n          = 0;
                foreach ($map['Out'] as $item) {
                    $model->out[$n++] = null !== $item ? out::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['TransactionsOnPage'])) {
            $model->transactionsOnPage = $map['TransactionsOnPage'];
        }

        return $model;
    }
}
