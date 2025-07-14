<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @description The list of routing rules.
     *
     * @var ingressList[]
     */
    public $ingressList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'ingressList' => 'IngressList',
        'pageSize' => 'PageSize',
        'totalSize' => 'TotalSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->ingressList) {
            $res['IngressList'] = [];
            if (null !== $this->ingressList && \is_array($this->ingressList)) {
                $n = 0;
                foreach ($this->ingressList as $item) {
                    $res['IngressList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IngressList'])) {
            if (!empty($map['IngressList'])) {
                $model->ingressList = [];
                $n = 0;
                foreach ($map['IngressList'] as $item) {
                    $model->ingressList[$n++] = null !== $item ? ingressList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
