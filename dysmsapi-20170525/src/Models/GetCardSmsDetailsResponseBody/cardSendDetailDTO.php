<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsDetailsResponseBody;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsDetailsResponseBody\cardSendDetailDTO\records;
use AlibabaCloud\Tea\Model;

class cardSendDetailDTO extends Model
{
    /**
     * @description 页码
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description 页数
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @description 总量
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'records'     => 'Records',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardSendDetailDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
